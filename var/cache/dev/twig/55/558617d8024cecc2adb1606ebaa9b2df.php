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

/* registration/register.html.twig */
class __TwigTemplate_5ac7c75f4bf9d2c1f151d4df04d7fdd3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        yield "\">
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
        yield "    
    ";
        // line 12
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 14
        yield "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 16
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
    <div class=\"d-flex flex-column justify-content-center align-items-center\" style=\"width: 100vw; height: 100vh;\">
        <img src=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"logo mb-4\">
        <section class=\"login-box\">
        <h2 class=\"text-white\">Regístrate</h2>

            ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'form_start');
        yield "
                <div class=\"mb-3 bg-white rounded px-2\">
            
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "nombre", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form_label small_text"], "label" => "Nombre"]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "nombre", [], "any", false, false, false, 28), 'widget', ["label" => false, "attr" => ["class" => "form-control border-0 p-0"]]);
        yield "
                
                    ";
        // line 30
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "nombre", [], "any", false, false, false, 30), 'errors')) {
            // line 31
            yield "                    <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "nombre", [], "any", false, false, false, 31), 'errors');
            yield "</div>
                    ";
        }
        // line 33
        yield "                </div>
                
                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "apellidos", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form_label small_text"], "label" => "Apellidos"]);
        yield "
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "apellidos", [], "any", false, false, false, 38), 'widget', ["label" => false, "attr" => ["class" => "form-control border-0 p-0"]]);
        yield "

                    ";
        // line 40
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "apellidos", [], "any", false, false, false, 40), 'errors')) {
            // line 41
            yield "                    <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "apellidos", [], "any", false, false, false, 41), 'errors');
            yield "</div>
                    ";
        }
        // line 43
        yield "                </div>

                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "fnac", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form_label small_text"], "label" => "Fecha de nacimiento"]);
        yield "
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "fnac", [], "any", false, false, false, 48), 'widget', ["label" => false, "attr" => ["class" => "form-control border-0 p-0", "required" => "required"]]);
        yield "
                    
                    ";
        // line 50
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "fnac", [], "any", false, false, false, 50), 'errors')) {
            // line 51
            yield "                    <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "fnac", [], "any", false, false, false, 51), 'errors');
            yield "</div>
                    ";
        }
        // line 53
        yield "                </div>

                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form_label small_text"], "label" => "Email"]);
        yield "
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'widget', ["label" => false, "attr" => ["class" => "form-control border-0 p-0"]]);
        yield "
                    
                    ";
        // line 60
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'errors')) {
            // line 61
            yield "                    <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'errors');
            yield "</div>
                    ";
        }
        // line 63
        yield "                </div>

                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "plainPassword", [], "any", false, false, false, 67), "first", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "form_label small_text"], "label" => "Contraseña"]);
        yield "
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "plainPassword", [], "any", false, false, false, 68), "first", [], "any", false, false, false, 68), 'widget', ["label" => false, "attr" => ["class" => "form-control border-0 p-0"]]);
        yield "
                    <div class=\"small-text\">La contraseña debe tener entre 8 y 24 carácteres. Debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.</div>

                    ";
        // line 71
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "plainPassword", [], "any", false, false, false, 71), "first", [], "any", false, false, false, 71), 'errors')) {
            // line 72
            yield "                    <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "plainPassword", [], "any", false, false, false, 72), "first", [], "any", false, false, false, 72), 'errors');
            yield "</div>
                    ";
        }
        // line 74
        yield "                </div>

                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "plainPassword", [], "any", false, false, false, 78), "second", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "form_label small_text"], "label" => "Confirmar contraseña"]);
        yield "
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "plainPassword", [], "any", false, false, false, 79), "second", [], "any", false, false, false, 79), 'widget', ["label" => false, "attr" => ["class" => "form-control border-0 p-0"]]);
        yield "
                    
                    ";
        // line 81
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), "second", [], "any", false, false, false, 81), 'errors')) {
            // line 82
            yield "                    <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "plainPassword", [], "any", false, false, false, 82), "second", [], "any", false, false, false, 82), 'errors');
            yield "</div>
                    ";
        }
        // line 84
        yield "                </div>
                
                <div class=\"checkbox mb-3 text-white\">
                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "agreeTerms", [], "any", false, false, false, 87), 'widget');
        yield "
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "agreeTerms", [], "any", false, false, false, 88), 'label', ["label_attr" => ["class" => "text-white"], "label" => "Acepto los términos y condiciones"]);
        yield "
                </div>

                
                <div class=\"mb-3 rounded px-2\">
                    
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "avatar", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "text-white mb-3 h5"], "label" => "Selecciona un avatar"]);
        yield "
                    <br>
                    <div class=\"avatares\">
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "avatar", [], "any", false, false, false, 97));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar"]) {
            // line 98
            yield "                        <label>
                            ";
            // line 99
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["avatar"], 'widget', ["label" => false]);
            yield "
                            <img src=\"";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/avatar/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avatar"], "vars", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100)) . ".png")), "html", null, true);
            yield "\" width=\"50px\" alt=\"avatar\" class=\"avatar\">
                        </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                    </div>                   
                    ";
        // line 104
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 104, $this->source); })()), "avatar", [], "any", false, false, false, 104), 'errors')) {
            // line 105
            yield "                        <div class=\"alert alert-danger rounded px-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "plainPassword", [], "any", false, false, false, 105), "avatar", [], "any", false, false, false, 105), 'errors');
            yield "</div>
                    ";
        }
        // line 107
        yield "
                </div>

                <input type=\"hidden\" name=\"_csrf_token\"
                    value=\"";
        // line 111
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                    >

                <button type=\"submit\" class=\"btn btn-danger mt-3\" style=\"width: 100%;\">Register</button>

                <div class=\"text-center mt-3\">
                    <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-white small-text\">¿Ya tienes cuenta? Inicia sesión</a>
                </div>
            
            ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), 'form_end');
        yield "
        
        </section>
        
        

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 13
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
        return "registration/register.html.twig";
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
        return array (  397 => 13,  387 => 12,  367 => 120,  361 => 117,  352 => 111,  346 => 107,  340 => 105,  338 => 104,  335 => 103,  326 => 100,  322 => 99,  319 => 98,  315 => 97,  309 => 94,  300 => 88,  296 => 87,  291 => 84,  285 => 82,  283 => 81,  278 => 79,  274 => 78,  268 => 74,  262 => 72,  260 => 71,  254 => 68,  250 => 67,  244 => 63,  238 => 61,  236 => 60,  231 => 58,  227 => 57,  221 => 53,  215 => 51,  213 => 50,  208 => 48,  204 => 47,  198 => 43,  192 => 41,  190 => 40,  185 => 38,  181 => 37,  175 => 33,  169 => 31,  167 => 30,  162 => 28,  158 => 27,  152 => 24,  145 => 20,  141 => 18,  132 => 16,  128 => 15,  125 => 14,  123 => 12,  120 => 11,  110 => 10,  97 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/register.css') }}\">
{% endblock %}

{% block body %}
    
    {% block header %}
    {% endblock %}

    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    <div class=\"d-flex flex-column justify-content-center align-items-center\" style=\"width: 100vw; height: 100vh;\">
        <img src=\"{{ asset('images/logo/logo.png') }}\" alt=\"logo\" class=\"logo mb-4\">
        <section class=\"login-box\">
        <h2 class=\"text-white\">Regístrate</h2>

            {{ form_start(registrationForm) }}
                <div class=\"mb-3 bg-white rounded px-2\">
            
                    {{ form_label(registrationForm.nombre, 'Nombre', { 'label_attr': {'class': 'form_label small_text'}}) }}
                    {{ form_widget(registrationForm.nombre, { 'label': false, 'attr': {'class': 'form-control border-0 p-0'}}) }}
                
                    {% if form_errors(registrationForm.nombre) %}
                    <div class=\"alert alert-danger rounded px-2\">{{ form_errors(registrationForm.nombre) }}</div>
                    {% endif %}
                </div>
                
                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    {{ form_label(registrationForm.apellidos, 'Apellidos', { 'label_attr': {'class': 'form_label small_text'}}) }}
                    {{ form_widget(registrationForm.apellidos, { 'label': false, 'attr': {'class': 'form-control border-0 p-0'}}) }}

                    {% if form_errors(registrationForm.apellidos) %}
                    <div class=\"alert alert-danger rounded px-2\">{{ form_errors(registrationForm.apellidos) }}</div>
                    {% endif %}
                </div>

                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    {{ form_label(registrationForm.fnac, 'Fecha de nacimiento', { 'label_attr': {'class': 'form_label small_text'}}) }}
                    {{ form_widget(registrationForm.fnac, { 'label': false, 'attr': {'class': 'form-control border-0 p-0','required':'required'}}) }}
                    
                    {% if form_errors(registrationForm.fnac) %}
                    <div class=\"alert alert-danger rounded px-2\">{{ form_errors(registrationForm.fnac) }}</div>
                    {% endif %}
                </div>

                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    {{ form_label(registrationForm.email, 'Email', { 'label_attr': {'class': 'form_label small_text'}}) }}
                    {{ form_widget(registrationForm.email, { 'label': false, 'attr': {'class': 'form-control border-0 p-0'}}) }}
                    
                    {% if form_errors(registrationForm.email) %}
                    <div class=\"alert alert-danger rounded px-2\">{{ form_errors(registrationForm.email) }}</div>
                    {% endif %}
                </div>

                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    {{ form_label(registrationForm.plainPassword.first, 'Contraseña', { 'label_attr': {'class': 'form_label small_text'}}) }}
                    {{ form_widget(registrationForm.plainPassword.first, { 'label': false, 'attr': {'class': 'form-control border-0 p-0'}}) }}
                    <div class=\"small-text\">La contraseña debe tener entre 8 y 24 carácteres. Debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.</div>

                    {% if form_errors(registrationForm.plainPassword.first) %}
                    <div class=\"alert alert-danger rounded px-2\">{{ form_errors(registrationForm.plainPassword.first) }}</div>
                    {% endif %}
                </div>

                <div class=\"mb-3 bg-white rounded px-2\">
                    
                    {{ form_label(registrationForm.plainPassword.second, 'Confirmar contraseña', { 'label_attr': {'class': 'form_label small_text'}}) }}
                    {{ form_widget(registrationForm.plainPassword.second, { 'label': false, 'attr': {'class': 'form-control border-0 p-0'}}) }}
                    
                    {% if form_errors(registrationForm.plainPassword.second) %}
                    <div class=\"alert alert-danger rounded px-2\">{{ form_errors(registrationForm.plainPassword.second) }}</div>
                    {% endif %}
                </div>
                
                <div class=\"checkbox mb-3 text-white\">
                    {{ form_widget(registrationForm.agreeTerms) }}
                    {{ form_label(registrationForm.agreeTerms, 'Acepto los términos y condiciones', { 'label_attr': {'class': 'text-white'} }) }}
                </div>

                
                <div class=\"mb-3 rounded px-2\">
                    
                    {{ form_label(registrationForm.avatar, 'Selecciona un avatar', { 'label_attr': {'class': 'text-white mb-3 h5'}}) }}
                    <br>
                    <div class=\"avatares\">
                    {% for avatar in registrationForm.avatar %}
                        <label>
                            {{ form_widget(avatar, { 'label': false }) }}
                            <img src=\"{{ asset('images/avatar/' ~ avatar.vars.value ~ '.png') }}\" width=\"50px\" alt=\"avatar\" class=\"avatar\">
                        </label>
                    {% endfor %}
                    </div>                   
                    {% if form_errors(registrationForm.avatar) %}
                        <div class=\"alert alert-danger rounded px-2\">{{ form_errors(registrationForm.plainPassword.avatar) }}</div>
                    {% endif %}

                </div>

                <input type=\"hidden\" name=\"_csrf_token\"
                    value=\"{{ csrf_token('authenticate') }}\"
                    >

                <button type=\"submit\" class=\"btn btn-danger mt-3\" style=\"width: 100%;\">Register</button>

                <div class=\"text-center mt-3\">
                    <a href=\"{{ path('app_login') }}\" class=\"text-white small-text\">¿Ya tienes cuenta? Inicia sesión</a>
                </div>
            
            {{ form_end(registrationForm) }}
        
        </section>
        
        

    </div>

{% endblock %}", "registration/register.html.twig", "/home/utxra/projects/netflix/templates/registration/register.html.twig");
    }
}
