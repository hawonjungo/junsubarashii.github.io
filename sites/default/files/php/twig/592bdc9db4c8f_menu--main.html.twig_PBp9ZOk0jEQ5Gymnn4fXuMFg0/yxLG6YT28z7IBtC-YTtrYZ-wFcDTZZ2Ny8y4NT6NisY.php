<?php

/* themes/nero/templates/menu--main.html.twig */
class __TwigTemplate_34cf848cd1acaad3f291dc36950cdcf5f0cc4aac3ec39aee51b9016001b3c879 extends Twig_Template
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
        $tags = array("set" => 12, "for" => 14, "if" => 18);
        $filters = array();
        $functions = array("random" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array(),
                array('random')
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

        // line 10
        echo "
";
        // line 12
        $context["colors"] = array(0 => "blightblue", 1 => "bred", 2 => "bviolet", 3 => "bgreen", 4 => "borange", 5 => "bblue");
        // line 13
        echo "<ul class=\"nero-menu\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "
    ";
            // line 17
            echo "
    ";
            // line 18
            if ($this->getAttribute($context["item"], "below", array())) {
                // line 19
                echo "      <li>
\t\t\t\t";
                // line 20
                if (($this->getAttribute($context["item"], "title", array()) == "Home")) {
                    // line 21
                    echo "\t\t\t\t\t<a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\"  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-home\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t\t\t\t";
                } elseif (($this->getAttribute(                // line 22
$context["item"], "title", array()) == "About")) {
                    // line 23
                    echo "\t\t\t\t\t<a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\"  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-desktop\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t\t\t\t";
                } elseif (($this->getAttribute(                // line 24
$context["item"], "title", array()) == "Pages")) {
                    // line 25
                    echo "\t\t\t\t\t<a href= ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\"  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-tablet\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t\t\t\t";
                } elseif (($this->getAttribute(                // line 26
$context["item"], "title", array()) == "Blogs")) {
                    // line 27
                    echo "\t\t\t\t\t<a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\" class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-comments\"></i>  ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t\t\t\t";
                } elseif (($this->getAttribute(                // line 28
$context["item"], "title", array()) == "Porfolio")) {
                    // line 29
                    echo "\t\t\t\t\t<a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\" class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-camera\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t\t\t\t";
                } elseif (($this->getAttribute(                // line 30
$context["item"], "title", array()) == "Contact")) {
                    // line 31
                    echo "\t\t\t\t\t<a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\" class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-envelope-o\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t\t<a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\" class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-envelope-o\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t<ul id=\"ddsubmenu2\" class=\"ddsubmenustyle nero-sub\">
\t\t\t\t\t\t";
                // line 37
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "\t\t\t\t\t\t\t ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t <li><a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\"> ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "<span class=\"fa fa-arrow-right submenu-right-arrow\"></span></a>
\t\t\t\t\t\t\t\t\t <ul class=\"melti-child\">
\t\t\t\t\t\t\t\t\t\t ";
                        // line 41
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 42
                            echo "\t\t\t\t\t\t\t\t\t\t\t ";
                            if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                                // line 43
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"";
                                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                                echo "\"> ";
                                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t ";
                            } else {
                                // line 45
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"";
                                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                                echo "\"> ";
                                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                                echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t ";
                            }
                            // line 47
                            echo "\t\t\t\t\t\t\t\t\t\t ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t </ul>
\t\t\t\t\t\t\t\t </li>
\t\t\t\t\t\t\t   ";
                    } else {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t <li><a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\"> ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"arrow-down\"></span></a></li>
\t\t\t\t\t\t   ";
                    }
                    // line 53
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t\t\t</ul>
      </li>

    ";
                // line 58
                echo "    ";
            } else {
                // line 59
                echo "      ";
                // line 60
                echo "      ";
                if (($this->getAttribute($context["item"], "title", array()) == "Home")) {
                    // line 61
                    echo "\t\t\t\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-home\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
\t\t\t";
                } elseif (($this->getAttribute(                // line 62
$context["item"], "title", array()) == "About")) {
                    // line 63
                    echo "\t\t\t\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-desktop\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
\t\t\t";
                } elseif (($this->getAttribute(                // line 64
$context["item"], "title", array()) == "Pages")) {
                    // line 65
                    echo "\t\t\t\t<li><a href= ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-tablet\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
\t\t\t";
                } elseif (($this->getAttribute(                // line 66
$context["item"], "title", array()) == "Blogs")) {
                    // line 67
                    echo "\t\t\t\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-comments\"></i>  ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
\t\t\t";
                } elseif (($this->getAttribute(                // line 68
$context["item"], "title", array()) == "Porfolio")) {
                    // line 69
                    echo "\t\t\t\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-camera\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
\t\t\t";
                } elseif (($this->getAttribute(                // line 70
$context["item"], "title", array()) == "Contact")) {
                    // line 71
                    echo "\t\t\t\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-envelope-o\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
\t\t\t";
                } else {
                    // line 73
                    echo "\t\t\t\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-envelope-o\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
      ";
                }
                // line 75
                echo "    ";
            }
            // line 76
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "themes/nero/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 77,  301 => 76,  298 => 75,  288 => 73,  278 => 71,  276 => 70,  267 => 69,  265 => 68,  256 => 67,  254 => 66,  245 => 65,  243 => 64,  234 => 63,  232 => 62,  223 => 61,  220 => 60,  218 => 59,  215 => 58,  210 => 54,  204 => 53,  196 => 51,  191 => 48,  185 => 47,  177 => 45,  169 => 43,  166 => 42,  162 => 41,  154 => 39,  151 => 38,  146 => 37,  143 => 35,  133 => 33,  123 => 31,  121 => 30,  112 => 29,  110 => 28,  101 => 27,  99 => 26,  90 => 25,  88 => 24,  79 => 23,  77 => 22,  68 => 21,  66 => 20,  63 => 19,  61 => 18,  58 => 17,  55 => 15,  51 => 14,  48 => 13,  46 => 12,  43 => 10,);
    }

    public function getSource()
    {
        return "{#  https://api.drupal.org/api/drupal/core!modules!system!templates!menu.html.twig/8
    menu_name: The machine name of the menu.
    items: A nested list of menu items. Each menu item contains:
      attributes: HTML attributes for the menu item.
      below: The menu item child items.
      title: The menu link title.
      url: The menu link url, instance of \\Drupal\\Core\\Url
      localized_options: Menu link localized options.
#}

{# All menu and submenu items #}
{% set colors = ['blightblue', 'bred', 'bviolet', 'bgreen', 'borange', 'bblue'] %}
<ul class=\"nero-menu\">
  {% for item in items %}

    {# Menu with submenu #}

    {% if item.below %}
      <li>
\t\t\t\t{% if item.title == 'Home' %}
\t\t\t\t\t<a href={{ item.url }} rel=\"ddsubmenu2\"  class=\"{{ random(colors) }}\"> <i class=\"fa fa-home\"></i> {{ item.title }} <span class=\"down-arrow\"></span></a>
\t\t\t\t{% elseif item.title == 'About' %}
\t\t\t\t\t<a href={{ item.url }} rel=\"ddsubmenu2\"  class=\"{{ random(colors) }}\"> <i class=\"fa fa-desktop\"></i> {{ item.title }} <span class=\"down-arrow\"></span></a>
\t\t\t\t{% elseif item.title == 'Pages' %}
\t\t\t\t\t<a href= {{ item.url }} rel=\"ddsubmenu2\"  class=\"{{ random(colors) }}\"> <i class=\"fa fa-tablet\"></i> {{ item.title }} <span class=\"down-arrow\"></span></a>
\t\t\t\t{% elseif item.title == 'Blogs' %}
\t\t\t\t\t<a href={{ item.url }} rel=\"ddsubmenu2\" class=\"{{ random(colors) }}\"> <i class=\"fa fa-comments\"></i>  {{ item.title }} <span class=\"down-arrow\"></span></a>
\t\t\t\t{% elseif item.title == 'Porfolio' %}
\t\t\t\t\t<a href={{ item.url }} rel=\"ddsubmenu2\" class=\"{{ random(colors) }}\"> <i class=\"fa fa-camera\"></i> {{ item.title }} <span class=\"down-arrow\"></span></a>
\t\t\t\t{% elseif item.title == 'Contact' %}
\t\t\t\t\t<a href={{ item.url }} rel=\"ddsubmenu2\" class=\"{{ random(colors) }}\"> <i class=\"fa fa-envelope-o\"></i> {{ item.title }} <span class=\"down-arrow\"></span></a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href={{ item.url }} rel=\"ddsubmenu2\" class=\"{{ random(colors) }}\"> <i class=\"fa fa-envelope-o\"></i> {{ item.title }} <span class=\"down-arrow\"></span></a>
\t\t\t\t{% endif %}
\t\t\t\t\t<ul id=\"ddsubmenu2\" class=\"ddsubmenustyle nero-sub\">
\t\t\t\t\t\t{# Menu -> Submenu #}
\t\t\t\t\t\t{% for item in item.below %}
\t\t\t\t\t\t\t {% if item.below %}
\t\t\t\t\t\t\t\t <li><a href=\"{{ item.url }}\"> {{ item.title }}<span class=\"fa fa-arrow-right submenu-right-arrow\"></span></a>
\t\t\t\t\t\t\t\t\t <ul class=\"melti-child\">
\t\t\t\t\t\t\t\t\t\t {% for item in item.below %}
\t\t\t\t\t\t\t\t\t\t\t {% if menu_level == 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"{{ item.url }}\"> {{ item.title }}</a></li>
\t\t\t\t\t\t\t\t\t\t\t {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"{{ item.url }}\"> {{ item.title }}</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t {% endif %}
\t\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t </ul>
\t\t\t\t\t\t\t\t </li>
\t\t\t\t\t\t\t   {% else %}
\t\t\t\t\t\t\t\t <li><a href=\"{{ item.url }}\"> {{ item.title }} <span class=\"arrow-down\"></span></a></li>
\t\t\t\t\t\t   {% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
      </li>

    {# Menu without submenu #}
    {% else %}
      {# Menu - Link #}
      {% if item.title == 'Home' %}
\t\t\t\t<li><a href={{ item.url }}  class=\"{{ random(colors) }}\"> <i class=\"fa fa-home\"></i> {{ item.title }} </a></li>
\t\t\t{% elseif item.title == 'About' %}
\t\t\t\t<li><a href={{ item.url }}  class=\"{{ random(colors) }}\"> <i class=\"fa fa-desktop\"></i> {{ item.title }} </a></li>
\t\t\t{% elseif item.title == 'Pages' %}
\t\t\t\t<li><a href= {{ item.url }}  class=\"{{ random(colors) }}\"> <i class=\"fa fa-tablet\"></i> {{ item.title }} </a></li>
\t\t\t{% elseif item.title == 'Blogs' %}
\t\t\t\t<li><a href={{ item.url }}  class=\"{{ random(colors) }}\"> <i class=\"fa fa-comments\"></i>  {{ item.title }} </a></li>
\t\t\t{% elseif item.title == 'Porfolio' %}
\t\t\t\t<li><a href={{ item.url }} class=\"{{ random(colors) }}\"> <i class=\"fa fa-camera\"></i> {{ item.title }} </a></li>
\t\t\t{% elseif item.title == 'Contact' %}
\t\t\t\t<li><a href={{ item.url }} class=\"{{ random(colors) }}\"> <i class=\"fa fa-envelope-o\"></i> {{ item.title }} </a></li>
\t\t\t{% else %}
\t\t\t\t<li><a href={{ item.url }} class=\"{{ random(colors) }}\"> <i class=\"fa fa-envelope-o\"></i> {{ item.title }} </a></li>
      {% endif %}
    {% endif %}
  {% endfor %}
</ul>
";
    }
}
