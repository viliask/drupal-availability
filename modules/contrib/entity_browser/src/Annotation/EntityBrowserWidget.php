<?php

namespace Drupal\entity_browser\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines an entity browser widget annotation object.
 *
 * @see hook_entity_browser_widget_info_alter()
 *
 * @Annotation
 */
class EntityBrowserWidget extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the widget.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

  /**
   * A brief description of the widget.
   *
   * This will be shown when adding or configuring this widget.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $description = '';

  /**
   * Indicates that widget supports auto selection of entities.
   *
   * @var bool
   */
  public $auto_select = FALSE;

}
