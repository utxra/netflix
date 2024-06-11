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

/* reset_password/reset.html.twig */
class __TwigTemplate_0b5476c17105e583d1ab168fc1e6f008 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/reset.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Reset your password";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 13
        yield "

    <div
        class=\"d-flex flex-column justify-content-center align-items-center\"
        style=\"width: 100vw; height: 100vh\">
        <img src=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"logo mb-4\" />
        <section class=\"login-box\">
            <h2 class=\"text-white\">Reestablece tu contraseña</h2>
            ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 21, $this->source); })()), 'form_start');
        yield "

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 24
            yield "            <div class=\"alert alert-danger\" role=\"alert\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_error"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            
            <div class=\"mb-3 bg-white rounded px-2\">
                    
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), "first", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form_label small_text"], "label" => "Contraseña"]);
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 30, $this->source); })()), "plainPassword", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), 'widget', ["label" => false, "attr" => ["class" => "form-control border-0 p-0"]]);
        yield "
                <div class=\"small-text\">La contraseña debe tener entre 8 y 24 carácteres. Debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.</div>

                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 33, $this->source); })()), "plainPassword", [], "any", false, false, false, 33), "first", [], "any", false, false, false, 33), 'errors')) {
            // line 34
            yield "                <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 34, $this->source); })()), "plainPassword", [], "any", false, false, false, 34), "first", [], "any", false, false, false, 34), 'errors');
            yield "</div>
                ";
        }
        // line 36
        yield "            </div>

            <div class=\"mb-3 bg-white rounded px-2\">
                
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), "second", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form_label small_text"], "label" => "Confirmar contraseña"]);
        yield "
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), "second", [], "any", false, false, false, 41), 'widget', ["label" => false, "attr" => ["class" => "form-control border-0 p-0"]]);
        yield "
                
                ";
        // line 43
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), "second", [], "any", false, false, false, 43), 'errors')) {
            // line 44
            yield "                <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), "second", [], "any", false, false, false, 44), 'errors');
            yield "</div>
                ";
        }
        // line 46
        yield "            </div>

            <button
                class=\"btn btn-danger btn-primary mt-3\"
                style=\"width: 100%\"
            >
            Reset password
            </button>

            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-white small-text\"
                    >¿No tienes cuenta? Regístrate</a
                >
            </div>
            ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 60, $this->source); })()), 'form_end');
        yield "
        </section>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 12
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reset_password/reset.html.twig";
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
        return array (  243 => 12,  233 => 11,  217 => 60,  210 => 56,  198 => 46,  192 => 44,  190 => 43,  185 => 41,  181 => 40,  175 => 36,  169 => 34,  167 => 33,  161 => 30,  157 => 29,  152 => 26,  143 => 24,  139 => 23,  134 => 21,  128 => 18,  121 => 13,  119 => 11,  109 => 10,  96 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reset your password{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\" />
{% endblock %} 

{% block body %}
{% block header %}
    {% endblock %}


    <div
        class=\"d-flex flex-column justify-content-center align-items-center\"
        style=\"width: 100vw; height: 100vh\">
        <img src=\"{{ asset('images/logo/logo.png') }}\" alt=\"logo\" class=\"logo mb-4\" />
        <section class=\"login-box\">
            <h2 class=\"text-white\">Reestablece tu contraseña</h2>
            {{ form_start(resetForm) }}

            {% for flash_error in app.flashes('reset_password_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
            {% endfor %}
            
            <div class=\"mb-3 bg-white rounded px-2\">
                    
                {{ form_label(resetForm.plainPassword.first, 'Contraseña', { 'label_attr': {'class': 'form_label small_text'}}) }}
                {{ form_widget(resetForm.plainPassword.first, { 'label': false, 'attr': {'class': 'form-control border-0 p-0'}}) }}
                <div class=\"small-text\">La contraseña debe tener entre 8 y 24 carácteres. Debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.</div>

                {% if form_errors(resetForm.plainPassword.first) %}
                <div class=\"alert alert-danger rounded px-2\">{{ form_errors(resetForm.plainPassword.first) }}</div>
                {% endif %}
            </div>

            <div class=\"mb-3 bg-white rounded px-2\">
                
                {{ form_label(resetForm.plainPassword.second, 'Confirmar contraseña', { 'label_attr': {'class': 'form_label small_text'}}) }}
                {{ form_widget(resetForm.plainPassword.second, { 'label': false, 'attr': {'class': 'form-control border-0 p-0'}}) }}
                
                {% if form_errors(resetForm.plainPassword.second) %}
                <div class=\"alert alert-danger rounded px-2\">{{ form_errors(resetForm.plainPassword.second) }}</div>
                {% endif %}
            </div>

            <button
                class=\"btn btn-danger btn-primary mt-3\"
                style=\"width: 100%\"
            >
            Reset password
            </button>

            <div class=\"text-center mt-3\">
                <a href=\"{{ path('app_register') }}\" class=\"text-white small-text\"
                    >¿No tienes cuenta? Regístrate</a
                >
            </div>
            {{ form_end(resetForm) }}
        </section>
    </div>

{% endblock %}", "reset_password/reset.html.twig", "/home/utxra/projects/netflix/templates/reset_password/reset.html.twig");
    }
}
