<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/crud/field/country.html.twig */
class __TwigTemplate_df334115a6809d11df69d23ddc212d75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/country.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/country.html.twig"));

        // line 6
        $context["show_flag"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "customOptions", [], "any", false, false, false, 6), "get", ["showFlag"], "method", false, false, false, 6);
        // line 7
        $context["show_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "customOptions", [], "any", false, false, false, 7), "get", ["showName"], "method", false, false, false, 7);
        // line 8
        yield "
";
        // line 9
        if (((isset($context["show_flag"]) || array_key_exists("show_flag", $context) ? $context["show_flag"] : (function () { throw new RuntimeError('Variable "show_flag" does not exist.', 9, $this->source); })()) &&  !(isset($context["show_name"]) || array_key_exists("show_name", $context) ? $context["show_name"] : (function () { throw new RuntimeError('Variable "show_name" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "formattedValue", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 11
                yield "        ";
                if ( !(null === $context["flag_code"])) {
                    // line 12
                    yield "            ";
                    // line 13
                    yield "            <img class=\"country-flag\" height=\"17\" alt=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true);
                    yield "\" title=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true);
                    yield "\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 13, $this->source); })()), "assets", [], "any", false, false, false, 13), "defaultAssetPackageName", [], "any", false, false, false, 13)), "html", null, true);
                    yield "\">
        ";
                }
                // line 15
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((        // line 16
(isset($context["show_name"]) || array_key_exists("show_name", $context) ? $context["show_name"] : (function () { throw new RuntimeError('Variable "show_name" does not exist.', 16, $this->source); })()) &&  !(isset($context["show_flag"]) || array_key_exists("show_flag", $context) ? $context["show_flag"] : (function () { throw new RuntimeError('Variable "show_flag" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "    ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "formattedValue", [], "any", false, false, false, 17), ", "), "html", null, true);
            yield "
";
        } else {
            // line 19
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 19, $this->source); })()), "formattedValue", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 20
                yield "        <span>";
                // line 21
                if ((isset($context["show_flag"]) || array_key_exists("show_flag", $context) ? $context["show_flag"] : (function () { throw new RuntimeError('Variable "show_flag" does not exist.', 21, $this->source); })())) {
                    // line 22
                    if ( !(null === $context["flag_code"])) {
                        // line 24
                        yield "                    <img class=\"country-flag\" height=\"17\" alt=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true);
                        yield "\" title=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true);
                        yield "\" src=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 24, $this->source); })()), "assets", [], "any", false, false, false, 24), "defaultAssetPackageName", [], "any", false, false, false, 24)), "html", null, true);
                        yield "\">";
                    }
                }
                // line 28
                if ((isset($context["show_name"]) || array_key_exists("show_name", $context) ? $context["show_name"] : (function () { throw new RuntimeError('Variable "show_name" does not exist.', 28, $this->source); })())) {
                    // line 29
                    (((array_key_exists("country_name", $context) &&  !(null === $context["country_name"]))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, $context["country_name"], "html", null, true)) : (yield ""));
                }
                // line 31
                yield "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/country.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  113 => 31,  110 => 29,  108 => 28,  98 => 24,  96 => 22,  94 => 21,  92 => 20,  87 => 19,  81 => 17,  79 => 16,  73 => 15,  63 => 13,  61 => 12,  58 => 11,  53 => 10,  51 => 9,  48 => 8,  46 => 7,  44 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{# Regardless of the field options, country names are always stored
   in field.formattedValue as ['alpha2CountryCode' => 'countryName'] #}
{% set show_flag = field.customOptions.get('showFlag') %}
{% set show_name = field.customOptions.get('showName') %}

{% if show_flag and not show_name %}
    {% for flag_code, country_name in field.formattedValue %}
        {% if flag_code is not null %}
            {# the explicit height is needed to avoid issues with SVG images in Safari browser #}
            <img class=\"country-flag\" height=\"17\" alt=\"{{ country_name }}\" title=\"{{ country_name }}\" src=\"{{ asset('images/flags/' ~ flag_code ~ '.svg', ea.assets.defaultAssetPackageName) }}\">
        {% endif %}
    {% endfor %}
{% elseif show_name and not show_flag  %}
    {{ field.formattedValue|join(', ') }}
{% else %}
    {% for flag_code, country_name in field.formattedValue %}
        <span>
            {%- if show_flag -%}
                {%- if flag_code is not null -%}
                    {# the explicit height is needed to avoid issues with SVG images in Safari browser #}
                    <img class=\"country-flag\" height=\"17\" alt=\"{{ country_name }}\" title=\"{{ country_name }}\" src=\"{{ asset('images/flags/' ~ flag_code ~ '.svg', ea.assets.defaultAssetPackageName) }}\">
                {%- endif -%}
            {%- endif -%}

            {%- if show_name -%}
                {{- country_name ?? '' -}}
            {%- endif -%}
        </span>
    {% endfor %}
{% endif %}
", "@EasyAdmin/crud/field/country.html.twig", "/home/utxra/projects/netflix/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/country.html.twig");
    }
}
