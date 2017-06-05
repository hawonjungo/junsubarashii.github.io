<?php

/* themes/nero/templates/page.html.twig */
class __TwigTemplate_4e5cb33d8efcf98c3ea88271b631c97b82667bd29751c426936d1a65de25ae5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 79, "for" => 176);
        $filters = array("raw" => 177);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 71
        echo "
<!-- #pre-header -->
<div class=\"slidepanel\">
\t<div class=\"container\">
\t\t<!-- #pre-header-inside -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"spara\">
\t\t\t\t\t";
        // line 79
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_first", array())) {
            // line 80
            echo "\t\t\t\t\t\t<p><i class=\"fa fa-envelope-o lightblue\"></i></p>
\t\t\t\t\t\t";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_first", array()), "html", null, true));
            echo "
\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_second", array())) {
            // line 84
            echo "\t\t\t\t\t\t<p><i class=\"fa fa-twitter lightblue\"></i></p>
\t\t\t\t\t\t";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_second", array()), "html", null, true));
            echo "
\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_third", array())) {
            // line 88
            echo "\t\t\t\t\t\t<p><i class=\"fa fa-desktop lightblue\"></i></p>
\t\t\t\t\t\t";
            // line 89
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_third", array()), "html", null, true));
            echo "
\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
        // line 94
        if ((isset($context["show_social_icons"]) ? $context["show_social_icons"] : null)) {
            // line 95
            echo "\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t<a href=\"";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
            echo "\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
            echo "\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
            echo "\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
            echo "\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
            echo "\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 101
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
            echo "\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 104
        echo "\t\t\t</div>
\t\t\t<!-- EOF: #pre-header-inside -->
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

</div>
<!-- EOF: #pre-header -->


<!-- Header starts -->
<header>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t<!-- Logo starts -->
\t\t\t\t";
        // line 121
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 122
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t<!-- Logo ends -->
\t\t\t</div>
\t\t\t<div class=\"col-md-9 col-sm-8\">
\t\t\t\t<!-- Navbar starts -->
\t\t\t\t<div class=\"navi pull-right\">
\t\t\t\t\t<div id=\"ddtopmenubar\" class=\"mattblackmenu\">
\t\t\t\t\t\t";
        // line 130
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"navis\"></div>
\t\t\t\t<!-- Navbar ends -->
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>

<div class=\"clearfix\"></div>

";
        // line 143
        if (( !(isset($context["is_front"]) ? $context["is_front"] : null) && (((isset($context["page_title"]) ? $context["page_title"] : null) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title_right", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title_left", array())))) {
            // line 144
            echo "\t<!-- Header ends -->
\t<div class=\"page-heading blightblue\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
            // line 149
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title_left", array())) {
                // line 150
                echo "\t\t\t\t\t\t<h2 class=\"pull-left\">
\t\t\t\t\t\t\t";
                // line 151
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title_right", array())) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title_right", array()), "html", null, true));
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-flag-o title-icon\"></i>\t";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true));
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"pull-right heading-meta\"> ";
                // line 157
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title_left", array()), "html", null, true));
                echo "</div>
\t\t\t\t\t";
            } else {
                // line 159
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title_right", array())) {
                    // line 160
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title_right", array()), "html", null, true));
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 162
                    echo "\t\t\t\t\t\t\t<h2><i class=\"fa fa-flag-o title-icon\"></i>\t";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true));
                    echo "</h2>
\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t";
            }
            // line 165
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 170
        echo "
";
        // line 171
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 172
            echo "\t<!-- Slider starts -->
\t";
            // line 173
            if ((isset($context["slideshow_display"]) ? $context["slideshow_display"] : null)) {
                // line 174
                echo "\t\t<div id=\"myCarousel\" class=\"carousel slide\">
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["slider_content"]) ? $context["slider_content"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                    // line 177
                    echo "\t\t\t\t\t";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["slider_contents"]));
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "\t\t\t\t<!-- SLIDE  -->
\t\t\t</div>
\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a>
\t\t</div>
\t\t<!-- Slider ends -->
\t";
            }
        }
        // line 187
        echo "
";
        // line 188
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 189
            echo "\t<div class=\"contact\">
\t\t<div class=\"col-md-12\">
\t\t\t";
            // line 191
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
\t\t</div>
\t</div>
";
        }
        // line 195
        echo "
<div class=\"clearfix\"></div>

";
        // line 198
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_first", array())) {
            // line 199
            echo "\t<div class=\"hero\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
            // line 203
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_first", array()), "html", null, true));
            echo "
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 210
        echo "
<!-- Big box starts -->
";
        // line 212
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_second", array()))) {
            // line 213
            echo "\t<div class=\"big-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 blightblue\">
\t\t\t\t\t<!-- Left box -->
\t\t\t\t\t";
            // line 218
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_first", array())) {
                // line 219
                echo "\t\t\t\t\t\t<div class=\"big-box-left \">
\t\t\t\t\t\t\t<!-- Box content -->
\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t<!-- title -->
\t\t\t\t\t\t\t\t";
                // line 223
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_first", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 227
            echo "\t\t\t\t\t<!-- Top Second Second  -->
\t\t\t\t\t";
            // line 228
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_second", array())) {
                // line 229
                echo "\t\t\t\t\t\t<div class=\"big-box-mid \">
\t\t\t\t\t\t\t";
                // line 230
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_second", array()), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t<!-- top second third -->
\t\t\t\t\t";
            // line 234
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_third", array())) {
                // line 235
                echo "\t\t\t\t\t\t<div class=\"big-box-right bblack\">
\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t";
                // line 237
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second_third", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 241
            echo "\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

";
        }
        // line 250
        echo "<!-- Big box ends -->

";
        // line 252
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top_highlighted", array())) {
            // line 253
            echo "\t<div class=\"container\">
\t\t<div class=\"cta bviolet highlight_alignment\">
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 256
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top_highlighted", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 261
        echo "
";
        // line 262
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array())) {
            // line 263
            echo "\t<div class=\"service-home\">
\t\t<div class=\"container\">
\t\t\t<!-- Title -->
\t\t\t<h3 class=\"title\"><i class=\"fa fa-arrow-right title-icon\"></i> Service</h3>
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 268
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t<hr />
\t\t</div>
\t</div>
";
        }
        // line 274
        echo "
<div class=\"content\">
\t<div class=\"container\">
\t\t";
        // line 277
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 278
            echo "\t\t\t<div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
\t\t\t\t<!-- Sidebar 2 -->
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t";
            // line 281
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 285
        echo "\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 286
            echo "\t\t\t<div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
\t\t\t\t<div class=\"posts\">
\t\t\t\t\t";
            // line 288
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t";
            // line 290
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 294
        echo "\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 295
            echo "\t\t\t<div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
\t\t\t\t<!-- Sidebar 1 -->
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t";
            // line 298
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 302
        echo "\t</div>
</div>

<div class=\"clearfix\"></div>

";
        // line 307
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
            // line 308
            echo "\t<div class=\"foot blightblue\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- User icon -->
\t\t\t\t\t<span class=\"twitter-icon text-center\"><i class=\"fa fa-thumbs-up\"></i></span>
\t\t\t\t\t<p><em>";
            // line 314
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
            echo "</em></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 320
        echo "
<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"widgets\">
\t\t\t\t";
        // line 325
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 326
            echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t";
            // line 328
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t";
            // line 330
            if ((isset($context["show_social_icons"]) ? $context["show_social_icons"] : null)) {
                // line 331
                echo "\t\t\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 332
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                echo "\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 333
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                echo "\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 334
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                echo "\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 335
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                echo "\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 336
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                echo "\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 337
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                echo "\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 340
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 344
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 345
            echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t";
            // line 347
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 351
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 352
            echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t";
            // line 354
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 358
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
            // line 359
            echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t";
            // line 361
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 365
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 footer_bottom\">
\t\t\t\t<div class=\"copy\">
\t\t\t\t\t<p class=\"text-center\">Nero ported to drupal by <a href=\"http://dropthemes.in\" target=\"_blank\">DropThemes.in</a></p>
\t\t\t\t\t";
        // line 372
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true));
        echo "
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t";
        // line 375
        if ((isset($context["show_social_icons"]) ? $context["show_social_icons"] : null)) {
            // line 376
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["social_icons"]) ? $context["social_icons"] : null)));
            echo "
\t\t\t\t";
        }
        // line 378
        echo "
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/nero/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 378,  617 => 376,  615 => 375,  609 => 372,  600 => 365,  593 => 361,  589 => 359,  586 => 358,  579 => 354,  575 => 352,  572 => 351,  565 => 347,  561 => 345,  558 => 344,  552 => 340,  546 => 337,  542 => 336,  538 => 335,  534 => 334,  530 => 333,  526 => 332,  523 => 331,  521 => 330,  516 => 328,  512 => 326,  510 => 325,  503 => 320,  494 => 314,  486 => 308,  484 => 307,  477 => 302,  470 => 298,  463 => 295,  460 => 294,  453 => 290,  448 => 288,  442 => 286,  439 => 285,  432 => 281,  425 => 278,  423 => 277,  418 => 274,  409 => 268,  402 => 263,  400 => 262,  397 => 261,  389 => 256,  384 => 253,  382 => 252,  378 => 250,  367 => 241,  360 => 237,  356 => 235,  354 => 234,  351 => 233,  345 => 230,  342 => 229,  340 => 228,  337 => 227,  330 => 223,  324 => 219,  322 => 218,  315 => 213,  313 => 212,  309 => 210,  299 => 203,  293 => 199,  291 => 198,  286 => 195,  279 => 191,  275 => 189,  273 => 188,  270 => 187,  260 => 179,  251 => 177,  247 => 176,  243 => 174,  241 => 173,  238 => 172,  236 => 171,  233 => 170,  226 => 165,  223 => 164,  217 => 162,  211 => 160,  208 => 159,  203 => 157,  200 => 156,  194 => 154,  188 => 152,  186 => 151,  183 => 150,  181 => 149,  174 => 144,  172 => 143,  156 => 130,  148 => 124,  142 => 122,  140 => 121,  121 => 104,  115 => 101,  111 => 100,  107 => 99,  103 => 98,  99 => 97,  95 => 96,  92 => 95,  90 => 94,  85 => 91,  80 => 89,  77 => 88,  74 => 87,  69 => 85,  66 => 84,  63 => 83,  58 => 81,  55 => 80,  53 => 79,  43 => 71,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * nero's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.pre_header_first: Items for the header top first region.
 * - page.pre_header_second: Items for the header top second region.
 * - page.pre_header_third: Items for the header top third region.
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.page_title_right: Items for the page title right region.
 * - page.page_title_left: Items for the page title left region.
 * - page.banner: Items for the banner region.
 * - page.top_first: Items for the page top first region.
 * - page.top_second_first: Items for the page top second first column region.
 * - page.top_second_second: Items for the page top second second column region.
 * - page.top_second_third: Items for the page top second third column region.
 * - page.services: Items for the services region.
 * - page.highlighted: Items for the highlighted region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_bottom: Items for the footer bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 *
 * @see template_preprocess_page()
 * @see nero_preprocess_page()
 * @see html.html.twig
 */
#}

<!-- #pre-header -->
<div class=\"slidepanel\">
\t<div class=\"container\">
\t\t<!-- #pre-header-inside -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"spara\">
\t\t\t\t\t{% if page.pre_header_first %}
\t\t\t\t\t\t<p><i class=\"fa fa-envelope-o lightblue\"></i></p>
\t\t\t\t\t\t{{ page.pre_header_first }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if page.pre_header_second %}
\t\t\t\t\t\t<p><i class=\"fa fa-twitter lightblue\"></i></p>
\t\t\t\t\t\t{{ page.pre_header_second }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if page.pre_header_third %}
\t\t\t\t\t\t<p><i class=\"fa fa-desktop lightblue\"></i></p>
\t\t\t\t\t\t{{ page.pre_header_third }}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t{% if show_social_icons %}
\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t<a href=\"{{ facebook_url }}\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"{{ google_plus_url }}\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t<a href=\"{{ twitter_url }}\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"{{ linkedin_url }}\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t<a href=\"{{ pinterest_url }}\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t<a href=\"{{ rss_url }}\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<!-- EOF: #pre-header-inside -->
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

</div>
<!-- EOF: #pre-header -->


<!-- Header starts -->
<header>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t<!-- Logo starts -->
\t\t\t\t{% if page.header %}
\t\t\t\t\t{{ page.header }}
\t\t\t\t{% endif %}
\t\t\t\t<!-- Logo ends -->
\t\t\t</div>
\t\t\t<div class=\"col-md-9 col-sm-8\">
\t\t\t\t<!-- Navbar starts -->
\t\t\t\t<div class=\"navi pull-right\">
\t\t\t\t\t<div id=\"ddtopmenubar\" class=\"mattblackmenu\">
\t\t\t\t\t\t{{ page.primary_menu }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"navis\"></div>
\t\t\t\t<!-- Navbar ends -->
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>

<div class=\"clearfix\"></div>

{%  if not is_front and (page_title or page.page_title_right or page.page_title_left)  %}
\t<!-- Header ends -->
\t<div class=\"page-heading blightblue\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t{% if page.page_title_left %}
\t\t\t\t\t\t<h2 class=\"pull-left\">
\t\t\t\t\t\t\t{% if page.page_title_right %}
\t\t\t\t\t\t\t\t{{  page.page_title_right }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<i class=\"fa fa-flag-o title-icon\"></i>\t{{ page_title }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"pull-right heading-meta\"> {{ page.page_title_left }}</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% if page.page_title_right %}
\t\t\t\t\t\t\t{{  page.page_title_right }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<h2><i class=\"fa fa-flag-o title-icon\"></i>\t{{ page_title }}</h2>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}

{% if is_front  %}
\t<!-- Slider starts -->
\t{% if slideshow_display  %}
\t\t<div id=\"myCarousel\" class=\"carousel slide\">
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t{% for slider_contents in slider_content %}
\t\t\t\t\t{{ slider_contents | raw }}
\t\t\t\t{% endfor %}
\t\t\t\t<!-- SLIDE  -->
\t\t\t</div>
\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a>
\t\t</div>
\t\t<!-- Slider ends -->
\t{% endif %}
{% endif %}

{% if page.banner %}
\t<div class=\"contact\">
\t\t<div class=\"col-md-12\">
\t\t\t{{  page.banner }}
\t\t</div>
\t</div>
{% endif %}

<div class=\"clearfix\"></div>

{% if page.top_first %}
\t<div class=\"hero\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t{{ page.top_first }}
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}

<!-- Big box starts -->
{% if page.top_second_first or page.top_second_third or page.top_second_second %}
\t<div class=\"big-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 blightblue\">
\t\t\t\t\t<!-- Left box -->
\t\t\t\t\t{% if page.top_second_first %}
\t\t\t\t\t\t<div class=\"big-box-left \">
\t\t\t\t\t\t\t<!-- Box content -->
\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t<!-- title -->
\t\t\t\t\t\t\t\t{{ page.top_second_first }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<!-- Top Second Second  -->
\t\t\t\t\t{% if page.top_second_second %}
\t\t\t\t\t\t<div class=\"big-box-mid \">
\t\t\t\t\t\t\t{{ page.top_second_second }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<!-- top second third -->
\t\t\t\t\t{% if page.top_second_third %}
\t\t\t\t\t\t<div class=\"big-box-right bblack\">
\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t{{ page.top_second_third}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

{% endif %}
<!-- Big box ends -->

{% if page.content_top_highlighted %}
\t<div class=\"container\">
\t\t<div class=\"cta bviolet highlight_alignment\">
\t\t\t<div class=\"row\">
\t\t\t\t{{ page.content_top_highlighted }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}

{% if page.services %}
\t<div class=\"service-home\">
\t\t<div class=\"container\">
\t\t\t<!-- Title -->
\t\t\t<h3 class=\"title\"><i class=\"fa fa-arrow-right title-icon\"></i> Service</h3>
\t\t\t<div class=\"row\">
\t\t\t\t{{ page.services }}
\t\t\t</div>
\t\t\t<hr />
\t\t</div>
\t</div>
{% endif %}

<div class=\"content\">
\t<div class=\"container\">
\t\t{% if page.sidebar_first %}
\t\t\t<div class={{ sidebarfirst }} >
\t\t\t\t<!-- Sidebar 2 -->
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t{{ page.sidebar_first }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if page.content %}
\t\t\t<div class={{ contentlayout }}>
\t\t\t\t<div class=\"posts\">
\t\t\t\t\t{{ page.breadcrumb }}
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if page.sidebar_second %}
\t\t\t<div class={{ sidebarsecond }}>
\t\t\t\t<!-- Sidebar 1 -->
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t</div>
</div>

<div class=\"clearfix\"></div>

{% if page.footer_top %}
\t<div class=\"foot blightblue\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- User icon -->
\t\t\t\t\t<span class=\"twitter-icon text-center\"><i class=\"fa fa-thumbs-up\"></i></span>
\t\t\t\t\t<p><em>{{ page.footer_top }}</em></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}

<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"widgets\">
\t\t\t\t{% if page.footer_first %}
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t{{ page.footer_first }}
\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t{% if show_social_icons %}
\t\t\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ facebook_url }}\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ google_plus_url }}\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ twitter_url }}\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ linkedin_url }}\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ pinterest_url }}\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ rss_url }}\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.footer_second %}
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t{{ page.footer_second }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.footer_third %}
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t{{ page.footer_third }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.footer_fourth %}
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t{{ page.footer_fourth }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 footer_bottom\">
\t\t\t\t<div class=\"copy\">
\t\t\t\t\t<p class=\"text-center\">Nero ported to drupal by <a href=\"http://dropthemes.in\" target=\"_blank\">DropThemes.in</a></p>
\t\t\t\t\t{{ page.footer_fifth }}
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t{% if show_social_icons %}
\t\t\t\t\t{{ social_icons | raw}}
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
</footer>";
    }
}
