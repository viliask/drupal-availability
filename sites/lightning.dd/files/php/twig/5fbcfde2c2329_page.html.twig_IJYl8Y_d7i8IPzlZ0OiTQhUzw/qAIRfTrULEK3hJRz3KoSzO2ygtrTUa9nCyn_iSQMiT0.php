<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_31a32ddf2da7bb16ef7391fc85fb3d64e1280d84a5f01cd0b081217e381f4538 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 64, "for" => 138];
        $filters = ["escape" => 67, "raw" => 139, "date" => 466];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "
<!-- Start: Top Bar -->
<div class=\"top-nav\">

  ";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "email", [])) {
            // line 65
            echo "    <div class=\"top-email\">
      <i class=\"fa fa-envelope\"></i>
      ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "email", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 70
        echo "
  ";
        // line 71
        if (($context["show_social_icon"] ?? null)) {
            // line 72
            echo "    <div class=\"top-social-media social-media\">
      Obserwuj na
      ";
            // line 74
            if (($context["facebook_url"] ?? null)) {
                // line 75
                echo "        <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
      ";
            }
            // line 77
            echo "      ";
            if (($context["twitter_url"] ?? null)) {
                // line 78
                echo "        <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
      ";
            }
            // line 80
            echo "      ";
            if (($context["linkedin_url"] ?? null)) {
                // line 81
                echo "        <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
      ";
            }
            // line 83
            echo "      ";
            if (($context["instagram_url"] ?? null)) {
                // line 84
                echo "        <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
      ";
            }
            // line 86
            echo "      ";
            if (($context["rss_url"] ?? null)) {
                // line 87
                echo "        <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
      ";
            }
            // line 89
            echo "    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "top_menu", [])) {
            // line 93
            echo "    <div class=\"top-menu\">
      ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_menu", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 97
        echo "
</div>
<!-- End: Region -->


<!-- Start: Header -->
<div class=\"header\">
  <div class=\"container-\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 111
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 112
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 114
        echo "      </div>

      ";
        // line 116
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 117
            echo "        <div class=\"col-md-9\">
          ";
            // line 118
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 119
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
          ";
            }
            // line 121
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 122
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
          ";
            }
            // line 124
            echo "        </div>
      ";
        }
        // line 126
        echo "
    </div>
  </div>
</div>
<!-- End: Region -->


<!-- Start: Slides -->
";
        // line 134
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 135
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 139
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 145
        echo "<!-- End: Region -->


<!--Start: Top Message -->
";
        // line 149
        if ($this->getAttribute(($context["page"] ?? null), "topmessage", [])) {
            // line 150
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topmessage", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 156
        echo "<!-- End: Region -->


<!-- Start: Top widget -->
";
        // line 160
        if (((($this->getAttribute(($context["page"] ?? null), "topwidget_title", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 161
            echo "
  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">
      ";
            // line 165
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])) {
                // line 166
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 167
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 170
            echo "
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 172
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 173
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 175
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 176
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 178
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 179
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 181
            echo "        </div>
    </div>
  </div>

";
        }
        // line 186
        echo "<!-- End: Region -->


<!--Start: Highlighted -->
";
        // line 190
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 191
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 197
        echo "<!--End: Highlighted -->


<!--Start: Title -->
";
        // line 201
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 202
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 210
        echo "<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 217
        if ( !($context["is_front"] ?? null)) {
            // line 218
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 219
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 222
        echo "
      <div class=\"row layout\">

        ";
        // line 225
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 226
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 228
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 232
        echo "
        ";
        // line 233
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 234
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 236
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 240
        echo "
        ";
        // line 241
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 242
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 244
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 248
        echo "
      </div>

    </div>
  </div>
</div>
<!-- End: Region -->


<!-- Start: Features -->
";
        // line 258
        if (((($this->getAttribute(($context["page"] ?? null), "features_title", []) || $this->getAttribute(($context["page"] ?? null), "features_first", [])) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 259
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 263
            if ($this->getAttribute(($context["page"] ?? null), "features_title", [])) {
                // line 264
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 265
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 268
            echo "
      <div class=\"row features-list\">
        ";
            // line 270
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 271
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 272
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 275
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 276
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 277
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 280
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 281
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 282
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 285
            echo "      </div>
    </div>
  </div>
";
        }
        // line 289
        echo "<!-- End: Region -->


<!-- Start: Updates widgets -->
";
        // line 293
        if (((($this->getAttribute(($context["page"] ?? null), "updates_title", []) || $this->getAttribute(($context["page"] ?? null), "updates_first", [])) || $this->getAttribute(($context["page"] ?? null), "updates_second", [])) || $this->getAttribute(($context["page"] ?? null), "updates_third", []))) {
            // line 294
            echo "
  <div class=\"updates\" id=\"updates\">
    <div class=\"container\">

      ";
            // line 298
            if ($this->getAttribute(($context["page"] ?? null), "updates_title", [])) {
                // line 299
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 300
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 303
            echo "
      <div class=\"row updates-list\">
        ";
            // line 305
            if ($this->getAttribute(($context["page"] ?? null), "updates_first", [])) {
                // line 306
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 307
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 310
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "updates_second", [])) {
                // line 311
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 312
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 315
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "updates_third", [])) {
                // line 316
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 317
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 320
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "updates_forth", [])) {
                // line 321
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 322
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 325
            echo "      </div>
    </div>
  </div>
";
        }
        // line 329
        echo "<!-- End: Region -->


<!-- Start: Middle widgets -->
";
        // line 333
        if ((((($this->getAttribute(($context["page"] ?? null), "midwidget_title", []) || $this->getAttribute(($context["page"] ?? null), "midwidget_first", [])) || $this->getAttribute(($context["page"] ?? null), "midwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "midwidget_third", [])) || $this->getAttribute(($context["page"] ?? null), "midwidget_forth", []))) {
            // line 334
            echo "
  <div class=\"midwidget\" id=\"midwidget\">
    <div class=\"container\">

      ";
            // line 338
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_title", [])) {
                // line 339
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 340
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 343
            echo "
      <div class=\"row midwidget-list\">
        ";
            // line 345
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_first", [])) {
                // line 346
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 347
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 350
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_second", [])) {
                // line 351
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 352
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 355
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_third", [])) {
                // line 356
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 357
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 360
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_forth", [])) {
                // line 361
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 362
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 365
            echo "      </div>
    </div>
  </div>
";
        }
        // line 369
        echo "<!-- End: Region -->


<!-- Start: Clients -->
";
        // line 373
        if ($this->getAttribute(($context["page"] ?? null), "clients", [])) {
            // line 374
            echo "  <div class=\"clients\" id=\"clients\">
    <div class=\"container\">
      ";
            // line 376
            if ($this->getAttribute(($context["page"] ?? null), "clients_title", [])) {
                // line 377
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 378
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 381
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 385
        echo "<!-- End: Region -->


<!-- Start: Bottom widgets -->
";
        // line 389
        if ((((($this->getAttribute(($context["page"] ?? null), "bottom_title", []) || $this->getAttribute(($context["orpage"] ?? null), "bottom_first", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 390
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">
    <div class=\"container\">

      ";
            // line 394
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 395
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 396
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 399
            echo "
      <div class=\"row bottom-widget-list\">
        ";
            // line 401
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 402
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 403
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 406
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 407
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 408
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 411
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 412
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 413
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 416
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 417
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 418
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 421
            echo "      </div>
    </div>
  </div>
";
        }
        // line 425
        echo "<!-- End: Region -->


<!-- Start: Footer widgets -->
";
        // line 429
        if (((($this->getAttribute(($context["page"] ?? null), "footer_title", []) || $this->getAttribute(($context["page"] ?? null), "footer_first", [])) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 430
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 434
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 435
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 436
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 439
            echo "
      <div class=\"row\">
        ";
            // line 441
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 442
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 443
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 446
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 447
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 448
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 451
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 452
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 453
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 456
            echo "      </div>
    </div>
  </div>
";
        }
        // line 460
        echo "<!-- End: Region -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <span>Copyright © ";
        // line 466
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 467
        if (($context["show_credit_link"] ?? null)) {
            // line 468
            echo "      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 470
        echo "  </div>
</div>
<!-- End: Region -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  914 => 470,  910 => 468,  908 => 467,  904 => 466,  896 => 460,  890 => 456,  884 => 453,  879 => 452,  876 => 451,  870 => 448,  865 => 447,  862 => 446,  856 => 443,  851 => 442,  849 => 441,  845 => 439,  839 => 436,  836 => 435,  834 => 434,  828 => 430,  826 => 429,  820 => 425,  814 => 421,  808 => 418,  803 => 417,  800 => 416,  794 => 413,  789 => 412,  786 => 411,  780 => 408,  775 => 407,  772 => 406,  766 => 403,  761 => 402,  759 => 401,  755 => 399,  749 => 396,  746 => 395,  744 => 394,  738 => 390,  736 => 389,  730 => 385,  722 => 381,  716 => 378,  713 => 377,  711 => 376,  707 => 374,  705 => 373,  699 => 369,  693 => 365,  687 => 362,  682 => 361,  679 => 360,  673 => 357,  668 => 356,  665 => 355,  659 => 352,  654 => 351,  651 => 350,  645 => 347,  640 => 346,  638 => 345,  634 => 343,  628 => 340,  625 => 339,  623 => 338,  617 => 334,  615 => 333,  609 => 329,  603 => 325,  597 => 322,  592 => 321,  589 => 320,  583 => 317,  578 => 316,  575 => 315,  569 => 312,  564 => 311,  561 => 310,  555 => 307,  550 => 306,  548 => 305,  544 => 303,  538 => 300,  535 => 299,  533 => 298,  527 => 294,  525 => 293,  519 => 289,  513 => 285,  507 => 282,  502 => 281,  499 => 280,  493 => 277,  488 => 276,  485 => 275,  479 => 272,  474 => 271,  472 => 270,  468 => 268,  462 => 265,  459 => 264,  457 => 263,  451 => 259,  449 => 258,  437 => 248,  430 => 244,  424 => 242,  422 => 241,  419 => 240,  412 => 236,  406 => 234,  404 => 233,  401 => 232,  394 => 228,  388 => 226,  386 => 225,  381 => 222,  375 => 219,  372 => 218,  370 => 217,  361 => 210,  353 => 205,  348 => 202,  346 => 201,  340 => 197,  333 => 193,  329 => 191,  327 => 190,  321 => 186,  314 => 181,  306 => 179,  303 => 178,  295 => 176,  292 => 175,  284 => 173,  282 => 172,  278 => 170,  272 => 167,  269 => 166,  267 => 165,  261 => 161,  259 => 160,  253 => 156,  246 => 152,  242 => 150,  240 => 149,  234 => 145,  228 => 141,  219 => 139,  215 => 138,  210 => 135,  208 => 134,  198 => 126,  194 => 124,  188 => 122,  185 => 121,  179 => 119,  177 => 118,  174 => 117,  172 => 116,  168 => 114,  162 => 112,  160 => 111,  144 => 97,  138 => 94,  135 => 93,  133 => 92,  130 => 91,  126 => 89,  120 => 87,  117 => 86,  111 => 84,  108 => 83,  102 => 81,  99 => 80,  93 => 78,  90 => 77,  84 => 75,  82 => 74,  78 => 72,  76 => 71,  73 => 70,  67 => 67,  63 => 65,  61 => 64,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig", "C:\\Users\\Ziemniaki\\Sites\\devdesktop\\lightning\\themes\\contrib\\freelancer_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
