<?php

/* themes/nero/templates/block--system-branding-block.html.twig */
class __TwigTemplate_a97f3ab119e74681cd442d9404e58aeb567d9197cabc306814568cdab617a451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/nero/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 17, "if" => 21);
        $filters = array("t" => 24);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
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

        // line 17
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"logo\">
    ";
        // line 21
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 22
            echo "    <div class=\"logo-image\">
    <!-- Image link -->
      <a href=\"";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" id=\"logo\">
\t<img src = ";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo " >
      </a>
    </div>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 31
            echo "      <div class=\"logo-text\">
\t";
            // line 32
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 33
                echo "\t  <h1 class=\"site-name\">
\t    <a href=\"";
                // line 34
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
\t  </h1>
\t";
            }
            // line 37
            echo "
\t";
            // line 38
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 39
                echo "\t  <div class=\"logo-meta\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>

\t";
            }
            // line 42
            echo "      </div>
    ";
        }
        // line 44
        echo "
    <div class=\"clearfix\"></div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/nero/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  115 => 42,  108 => 39,  106 => 38,  103 => 37,  93 => 34,  90 => 33,  88 => 32,  85 => 31,  83 => 30,  80 => 29,  73 => 25,  67 => 24,  63 => 22,  61 => 21,  58 => 20,  55 => 19,  51 => 1,  49 => 17,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Bartik's theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}

{% set attributes = attributes.addClass('site-branding') %}

{% block content %}
  <div class=\"logo\">
    {% if  site_logo %}
    <div class=\"logo-image\">
    <!-- Image link -->
      <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\" id=\"logo\">
\t<img src = {{ site_logo }} >
      </a>
    </div>
    {% endif %}

    {% if site_name or site_slogan %}
      <div class=\"logo-text\">
\t{% if site_name %}
\t  <h1 class=\"site-name\">
\t    <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
\t  </h1>
\t{% endif %}

\t{% if site_slogan %}
\t  <div class=\"logo-meta\">{{ site_slogan }}</div>

\t{% endif %}
      </div>
    {% endif %}

    <div class=\"clearfix\"></div>

  </div>
{% endblock %}
";
    }
}
