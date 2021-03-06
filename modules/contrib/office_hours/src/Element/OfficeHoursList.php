<?php

namespace Drupal\office_hours\Element;

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\FormElement;
use Drupal\office_hours\OfficeHoursDateHelper;

/**
 * Provides a one-line basic form element.
 *
 * @FormElement("office_hours_list")
 */
class OfficeHoursList extends FormElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    $class = get_class($this);
    $info = [
      '#input' => TRUE,
      '#tree' => TRUE,
      '#process' => [
        [$class, 'processOfficeHoursSlot'],
      ],
      '#element_validate' => [
        [$class, 'validateOfficeHoursSlot'],
      ],
    ];
    return $info;
  }

  /**
   * {@inheritdoc}
   */
  public static function valueCallback(&$element, $input, FormStateInterface $form_state) {
    $input = parent::valueCallback($element, $input, $form_state);
    return $input;
  }

  /**
   * Process an individual element.
   *
   * Build the form element. When creating a form using Form API #process,
   * note that $element['#value'] is already set.
   *
   * @param $element
   * @param FormStateInterface $form_state
   * @param $complete_form
   * @return
   */
  public static function processOfficeHoursSlot(&$element, FormStateInterface $form_state, &$complete_form) {
    // @todo D8 $form_state = ...
    // @todo D8 $form = ...

    $slot_class = 'office-hours-slot';
    $element['#attributes']['class'][] = 'form-item'; //D8
    $element['#attributes']['class'][] = $slot_class;
    $field_settings = $element['#field_settings'];

    $element['day'] = [
      //'#type' => 'value',
      //'#value' => $element['#day'],
      '#type' => 'select',
      //'#title' => $this->t('Day'),
      '#options' => OfficeHoursDateHelper::weekDays(FALSE),
      '#default_value' => isset($element['#value']['day']) ? $element['#value']['day'] : NULL,
      '#description' => '',
    ];
    $element['starthours'] = [
      '#type' => $field_settings['element_type'], // datelist, datetime.
      '#field_settings' => $field_settings,
      // Get the valid, restricted hours. Date API doesn't provide a straight method for this.
      '#hour_options' => OfficeHoursDateHelper::hours($field_settings['time_format'], FALSE, $field_settings['limit_start'], $field_settings['limit_end']),
      // Attributes for element \Drupal\Core\Datetime\Element\Datelist - Start.
      //'#theme_wrappers' => ['datetime_wrapper'],
      '#date_part_order' => (in_array($field_settings['time_format'], ['g', 'h']))
        ? ['hour', 'minute', 'ampm', ]
        : ['hour', 'minute', ],
      '#date_increment' => $field_settings['increment'],
      '#date_time_element' => 'time',
      '#date_time_format' => OfficeHoursDateHelper::getTimeFormat($field_settings['time_format']),
      //'#date_time_callbacks' => [],
      //'#date_date_format' => 'none', // $date_format,
      //'#date_date_element' => 'none', // 'date',
      //'#date_date_callbacks' => [],
      //'#date_year_range' => FALSE, // '2000:2000',
      '#date_timezone' => '+0000', // new \DateTimezone(DATETIME_STORAGE_TIMEZONE),
      // Attributes for element \Drupal\Core\Datetime\Element\Datelist - End.
    ];
    $element['endhours'] = $element['starthours'];
    $element['starthours']['#default_value'] = isset($element['#value']['starthours']) ? $element['#value']['starthours'] : NULL;
    $element['endhours']['#default_value'] = isset($element['#value']['endhours']) ? $element['#value']['endhours'] : NULL;

    if ($field_settings['comment']) {
      $element['comment'] = [
        '#type' => 'textfield',
        '#default_value' => isset($element['#value']['comment']) ? $element['#value']['comment'] : NULL,
        '#size' => 20,
        '#maxlength' => 255,
        '#field_settings' => $field_settings,
      ];
    }

    // Copied from EntityListBuilder::buildOperations().
    // $element['#value']['operations'] = $this->buildOperations($entity);
    $element['operations'] = [
      'data' => OfficeHoursSlot::getDefaultOperations($element),
    ];

    return $element;
  }

  /**
   * Render API callback: Validates the element.
   *
   * Implements a callback for _office_hours_elements().
   *
   * For 'office_hours_slot' (day) and 'office_hours_datelist' (hour) elements.
   * You can find the value in $element['#value'], but better in $form_state['values'],
   * which is set in validateOfficeHoursSlot().
   * @param $element
   * @param FormStateInterface $form_state
   * @param $complete_form
   */
  public static function validateOfficeHoursSlot(&$element, FormStateInterface $form_state, &$complete_form) {
    $error_text = '';
    $field_settings = $element['#field_settings'];
    $val_hrs = $field_settings['valhrs'];

    if (!$val_hrs) {
      return;
    }

    $input_exists = FALSE;
    $input = NestedArray::getValue($form_state->getValues(), $element['#parents'], $input_exists);

    $input_exists = TRUE;

    if ($input_exists && $val_hrs) {
      $limit_start = $field_settings['limit_start'];
      $limit_end = $field_settings['limit_end'];

      $start = OfficeHoursDatetime::get($input['starthours'], 'Hi');
      $end = OfficeHoursDatetime::get($input['endhours'], 'Hi');
      // Validate the input.
      if ((!empty($start) xor !empty($end)) && !empty($limit_end)) {
        $error_text = 'Both Opening hours and Closing hours must be set.';
      }
      elseif (($end < $start) && ($end == '0000')) {
        // Exception: end time is 00:00 / 24:00
        $error_text = 'Closing hours are earlier than Opening hours.';
      }
      elseif ((!empty($limit_start) || !empty($limit_end))) {
        if (($start && ($limit_start * 100) > $start) || ($end && ($limit_end * 100) < $end)) {
          $error_text = 'Hours are outside limits ( @start - @end ).';
        }
      }

      //if ($hour < 0 || $hour > 23) {
      //  $error_text = $this->t('Hours should be between 0 and 23.', [], ['office_hours']);
      //  $form_state->setErrorByName('office_hours_datelist', $error_text);
      //}
      //if ($minute < 0 || $minute > 59) {
      //  $error_text = $this->t('Minutes should be between 0 and 59.', [], ['office_hours']);
      //  $form_state->setErrorByName('office_hours_datelist', $error_text);
      //}

      if ($error_text) {
        $error_text = $element['#dayname']  // Day name is already translated.
          . ': '
          . t($error_text,
            [
              '@start' => $limit_start . ':00',
              '@end' => $limit_end . ':00',
            ],
            ['context' => 'office_hours']
          );
        $form_state->setError($element, $error_text);
      }
    }
  }

}
