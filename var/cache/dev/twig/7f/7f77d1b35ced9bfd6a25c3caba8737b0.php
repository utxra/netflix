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

/* @EasyAdmin/includes/_encore_script_tags.html.twig */
class __TwigTemplate_0f218912f9949d51c173fca4e09ccc5c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_encore_script_tags.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_encore_script_tags.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["assets"]) || array_key_exists("assets", $context) ? $context["assets"] : (function () { throw new RuntimeError('Variable "assets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["encore_asset"]) {
            // line 3
            yield "    ";
            yield $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_script_tags", CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "value", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "webpackPackageName", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "webpackEntrypointName", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, $context["encore_asset"], "htmlAttributes", [], "any", false, false, false, 3));
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encore_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/includes/_encore_script_tags.html.twig";
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
        return array (  48 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var assets \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto[] #}
{% for encore_asset in assets %}
    {{ ea_call_function_if_exists('encore_entry_script_tags', encore_asset.value, encore_asset.webpackPackageName, encore_asset.webpackEntrypointName, encore_asset.htmlAttributes) }}
{% endfor %}
", "@EasyAdmin/includes/_encore_script_tags.html.twig", "/home/utxra/projects/netflix/vendor/easycorp/easyadmin-bundle/src/Resources/views/includes/_encore_script_tags.html.twig");
    }
}
