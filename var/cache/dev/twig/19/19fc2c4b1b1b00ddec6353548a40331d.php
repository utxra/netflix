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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_69a46e4062e3e6c6e77c4203c33e2e44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'importmap' => [$this, 'block_importmap'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search_wrapper' => [$this, 'block_search_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu_wrapper' => [$this, 'block_header_custom_menu_wrapper'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'settings_dropdown_wrapper' => [$this, 'block_settings_dropdown_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        // line 2
        $context["__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        yield "\" dir=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        yield "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('head_metas', $context, $blocks);
        // line 14
        yield "
    ";
        // line 15
        $context["page_title_block_output"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "    <title>";
        yield Twig\Extension\CoreExtension::striptags((isset($context["page_title_block_output"]) || array_key_exists("page_title_block_output", $context) ? $context["page_title_block_output"] : (function () { throw new RuntimeError('Variable "page_title_block_output" does not exist.', 16, $this->source); })()));
        yield "</title>

    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('head_stylesheets', $context, $blocks);
        // line 21
        yield "
    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('configured_stylesheets', $context, $blocks);
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('head_favicon', $context, $blocks);
        // line 30
        yield "
    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('head_javascript', $context, $blocks);
        // line 38
        yield "
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('configured_javascripts', $context, $blocks);
        // line 43
        yield "
    ";
        // line 44
        if (("rtl" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 44, $this->source); })()), "i18n", [], "any", false, false, false, 44), "textDirection", [], "any", false, false, false, 44))) {
            // line 45
            yield "        <link rel=\"stylesheet\" href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.rtl.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 45, $this->source); })()), "assets", [], "any", false, false, false, 45), "defaultAssetPackageName", [], "any", false, false, false, 45)), "html", null, true);
            yield "\">
    ";
        }
        // line 47
        yield "
    ";
        // line 48
        yield from $this->unwrap()->yieldBlock('configured_head_contents', $context, $blocks);
        // line 53
        yield "</head>

";
        // line 55
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 387
        yield "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        // line 8
        yield "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield from         $this->unwrap()->yieldBlock("content_title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 18
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 19
        yield "        <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 19, $this->source); })()), "assets", [], "any", false, false, false, 19), "defaultAssetPackageName", [], "any", false, false, false, 19)), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 22
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 23
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        yield "
        ";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 28
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 28, $this->source); })()), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 32
        yield "        <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 32, $this->source); })()), "assets", [], "any", false, false, false, 32), "defaultAssetPackageName", [], "any", false, false, false, 32)), "html", null, true);
        yield "\"></script>

        ";
        // line 34
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 37
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 34
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        // line 35
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_importmap.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)) : ([]))], false);
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 39
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 40
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", false, false, false, 40)) : ([]))], false);
        yield "
        ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)) : ([]))], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 48
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 49
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", false, false, false, 49)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", false, false, false, 49)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 50
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        yield "    <body ";
        yield from $this->unwrap()->yieldBlock('body_attr', $context, $blocks);
        // line 57
        yield "        id=\"";
        yield from $this->unwrap()->yieldBlock('body_id', $context, $blocks);
        yield "\"
        class=\"ea ";
        // line 58
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\"
        data-ea-content-width=\"";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", false, false, false, 59)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 59)) : ("normal")))), "html", null, true);
        yield "\"
        data-ea-sidebar-width=\"";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", true, true, false, 60) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", false, false, false, 60)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", false, false, false, 60)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 60) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 60)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 60)) : ("normal")))), "html", null, true);
        yield "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 61, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 61)) ? ("true") : ("false"));
        yield "\"
    >
    ";
        // line 63
        yield from $this->unwrap()->yieldBlock('javascript_page_layout', $context, $blocks);
        // line 66
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascript_page_color_scheme', $context, $blocks);
        // line 69
        yield "
    ";
        // line 70
        yield from $this->unwrap()->yieldBlock('wrapper_wrapper', $context, $blocks);
        // line 377
        yield "
    ";
        // line 378
        yield from $this->unwrap()->yieldBlock('body_javascript', $context, $blocks);
        // line 379
        yield "
    ";
        // line 380
        yield from $this->unwrap()->yieldBlock('configured_body_contents', $context, $blocks);
        // line 385
        yield "    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 56
    public function block_body_attr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 57
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 58
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 63
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        // line 64
        yield "        <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 64, $this->source); })()), "assets", [], "any", false, false, false, 64), "defaultAssetPackageName", [], "any", false, false, false, 64)), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 66
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        // line 67
        yield "        <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 67, $this->source); })()), "assets", [], "any", false, false, false, 67), "defaultAssetPackageName", [], "any", false, false, false, 67)), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 70
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 71
        yield "        ";
        yield from $this->unwrap()->yieldBlock('flash_messages', $context, $blocks);
        // line 74
        yield "
        ";
        // line 75
        $context["user_menu_avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 76
            yield "            ";
            if ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 76, $this->source); })()), "userMenu", [], "any", false, false, false, 76), "avatarUrl", [], "any", false, false, false, 76))) {
                // line 77
                yield "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
                // line 80
                yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80))) ? ("fa fa-user") : ("fas fa-user-slash"));
                yield " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
            } else {
                // line 84
                yield "                <img class=\"user-avatar\" src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 84, $this->source); })()), "userMenu", [], "any", false, false, false, 84), "avatarUrl", [], "any", false, false, false, 84), "html", null, true);
                yield "\" />
            ";
            }
            // line 86
            yield "        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "
        ";
        // line 88
        $context["impersonator_permission"] = ((Twig\Extension\CoreExtension::constantIsDefined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 89
        yield "
        ";
        // line 90
        $context["user_menu_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 91
            yield "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 93, $this->source); })()), "html", null, true);
            yield "</div>
                    <div>
                        <span class=\"user-label\">";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
            yield "</span>
                        <span class=\"user-name\">";
            // line 96
            yield Twig\Extension\EscaperExtension::escape($this->env, (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 96, $this->source); })()), "userMenu", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96))), "html", null, true);
            yield "</span>
                    </div>
                </li>

                ";
            // line 100
            yield from $this->unwrap()->yieldBlock('user_menu', $context, $blocks);
            // line 119
            yield "            </ul>
        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        yield "
        ";
        // line 122
        $context["settings_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 123
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 123, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 123) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 123, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 123))) {
                // line 124
                yield "                <div class=\"dropdown dropdown-settings\">
                    <a class=\"dropdown-settings-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                        <i class=\"fas fa-gear\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-end\">
                        ";
                // line 130
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 130, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 130)) {
                    // line 131
                    yield "                            <li class=\"dropdown-header dropdown-locales-label\">
                                ";
                    // line 132
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                            </li>

                            ";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 135, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 135));
                    foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
                        // line 136
                        yield "                                <li>
                                    <a href=\"";
                        // line 137
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 137)], "method", false, false, false, 137), "html", null, true);
                        yield "\" class=\"dropdown-item";
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "locale", [], "any", false, false, false, 137) == CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 137))) {
                            yield " active";
                        }
                        yield "\">
                                        ";
                        // line 138
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 138)) {
                            // line 139
                            yield "                                            <i class=\"";
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 139), "html", null, true);
                            yield "\"></i>
                                        ";
                        }
                        // line 141
                        yield "                                        ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 141), "html", null, true);
                        yield "
                                    </a>
                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeDto'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    yield "                        ";
                }
                // line 146
                yield "
                        ";
                // line 147
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 147, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 147)) {
                    // line 148
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 148, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 148)) {
                        // line 149
                        yield "                                <div class=\"dropdown-divider\"></div>
                            ";
                    }
                    // line 151
                    yield "
                            <li class=\"dropdown-header dropdown-appearance-label\">
                                ";
                    // line 153
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"light\">
                                    <i class=\"far fa-sun fa-fw\"></i>
                                    ";
                    // line 158
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"dark\">
                                    <i class=\"far fa-moon fa-fw\"></i>
                                    ";
                    // line 164
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item active\" data-ea-color-scheme=\"auto\">
                                    <i class=\"fas fa-desktop fa-fw\"></i>
                                    ";
                    // line 170
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
                    yield "
                                </a>
                            </li>
                        ";
                }
                // line 174
                yield "                    </ul>
                </div>
            ";
            }
            // line 177
            yield "        ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        yield "
        <div class=\"wrapper\">
            ";
        // line 180
        yield from $this->unwrap()->yieldBlock('wrapper', $context, $blocks);
        // line 375
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 71
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 72
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 72, $this->source); })()), "templatePath", ["flash_messages"], "method", false, false, false, 72));
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 100
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        // line 101
        yield "                    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 101, $this->source); })()), "userMenu", [], "any", false, false, false, 101), "items", [], "any", false, false, false, 101)) > 0)) {
            // line 102
            yield "                        <li><hr class=\"dropdown-divider\"></li>
                        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 103, $this->source); })()), "userMenu", [], "any", false, false, false, 103), "items", [], "any", false, false, false, 103));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 104
                yield "                            <li>
                                ";
                // line 105
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 105) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 105))) {
                    // line 106
                    yield "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !CoreExtension::getAttribute($this->env, $this->source,                 // line 107
$context["item"], "isMenuSection", [], "any", false, false, false, 107)) {
                    // line 108
                    yield "                                    <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 108), "html", null, true);
                    yield "\" class=\"dropdown-item user-action ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 108), "html", null, true);
                    yield "\"
                                       target=\"";
                    // line 109
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 109), "html", null, true);
                    yield "\" rel=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 109), "html", null, true);
                    yield "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 111
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 111))) {
                        yield "<i class=\"fa fa-fw ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 111), "html", null, true);
                        yield "\"></i>";
                    }
                    // line 112
                    yield "                                        ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 112), [],                     // line 2
(isset($context["__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3"]) || array_key_exists("__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3", $context) ? $context["__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3"] : (function () { throw new RuntimeError('Variable "__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3" does not exist.', 2, $this->source); })())), "html", null, true);
                    // line 112
                    yield "
                                    </a>
                                ";
                }
                // line 115
                yield "                            </li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "                    ";
        }
        // line 118
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 180
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 181
        yield "                <div class=\"responsive-header\">
                    ";
        // line 182
        yield from $this->unwrap()->yieldBlock('responsive_header', $context, $blocks);
        // line 211
        yield "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 215
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 237
        yield "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 243
        $context["has_search"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 243, $this->source); })()), "crud", [], "any", false, false, false, 243)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 243, $this->source); })()), "crud", [], "any", false, false, false, 243), "isSearchEnabled", [], "any", false, false, false, 243));
        // line 244
        yield "                    <aside class=\"content-top ";
        yield (((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 244, $this->source); })())) ? ("ea-search-enabled") : ("ea-search-disabled"));
        yield "\">
                        ";
        // line 245
        yield from $this->unwrap()->yieldBlock('content_top_header', $context, $blocks);
        // line 326
        yield "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 329
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 370
        yield "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 182
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        // line 183
        yield "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 188
        yield from $this->unwrap()->yieldBlock('responsive_header_logo', $context, $blocks);
        // line 193
        yield "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 195
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 195, $this->source); })()))) ? ("user-is-impersonated") : (""));
        yield " ms-auto\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 199
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 199, $this->source); })()), "userMenu", [], "any", false, false, false, 199), "avatarDisplayed", [], "any", false, false, false, 199)) {
            // line 200
            yield "                                    ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 200, $this->source); })()), "html", null, true);
            yield "
                                ";
        } else {
            // line 202
            yield "                                    <i class=\"user-avatar fa fa-fw ";
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 202, $this->source); })()), "user", [], "any", false, false, false, 202))) ? ("fa-user") : ("fa-user-times"));
            yield "\"></i>
                                ";
        }
        // line 204
        yield "                            </a>

                            ";
        // line 206
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 206, $this->source); })()), "html", null, true);
        yield "
                        </div>

                        ";
        // line 209
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 209, $this->source); })()), "html", null, true);
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 188
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        // line 189
        yield "                                <a class=\"responsive-logo\" title=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 189, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 189)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 189, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 189));
        yield "\">
                                    ";
        // line 190
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 190, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 190);
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 215
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 216
        yield "                            <header class=\"main-header\">
                                ";
        // line 217
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 231
        yield "                            </header>

                            ";
        // line 233
        yield from $this->unwrap()->yieldBlock('main_menu_wrapper', $context, $blocks);
        // line 236
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 217
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 218
        yield "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 219
        yield from $this->unwrap()->yieldBlock('header_navbar', $context, $blocks);
        // line 229
        yield "                                </nav>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 219
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        // line 220
        yield "                                        <div id=\"header-logo\">
                                            ";
        // line 221
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 227
        yield "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 221
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 222
        yield "                                                <a class=\"logo\" title=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 222, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 222)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 222, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 222));
        yield "\">
                                                    <span class=\"logo-custom\">";
        // line 223
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 223, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 223);
        yield "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 233
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 234
        yield "                                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 234, $this->source); })()), "templatePath", ["main_menu"], "method", false, false, false, 234));
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 245
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        // line 246
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('search_wrapper', $context, $blocks);
        // line 304
        yield "
                            ";
        // line 305
        yield from $this->unwrap()->yieldBlock('header_custom_menu_wrapper', $context, $blocks);
        // line 321
        yield "
                            ";
        // line 322
        yield from $this->unwrap()->yieldBlock('settings_dropdown_wrapper', $context, $blocks);
        // line 325
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 246
    public function block_search_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_wrapper"));

        // line 247
        yield "                            <div class=\"content-search\">
                                ";
        // line 248
        if ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 248, $this->source); })())) {
            // line 249
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
            // line 301
            yield "                                ";
        }
        // line 302
        yield "                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 249
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 250
        yield "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 252
        yield from $this->unwrap()->yieldBlock('search_form', $context, $blocks);
        // line 299
        yield "                                        </form>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 252
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 253
        yield "                                                ";
        yield from $this->unwrap()->yieldBlock('search_form_filters', $context, $blocks);
        // line 278
        yield "
                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 280
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 280, $this->source); })()), "request", [], "any", false, false, false, 280), "query", [], "any", false, false, false, 280), "get", ["crudControllerFqcn"], "method", false, false, false, 280), "html", null, true);
        yield "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 287
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 287, $this->source); })()), "request", [], "any", false, false, false, 287), "get", ["query"], "method", false, false, false, 287), "html", null, true);
        yield "\">
                                                            <input class=\"form-control ";
        // line 288
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "request", [], "any", false, false, false, 288), "get", ["query"], "method", false, false, false, 288))) ? ("is-blank") : (""));
        yield "\" type=\"search\" name=\"query\" value=\"";
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", true, true, false, 288) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", false, false, false, 288)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", false, false, false, 288), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 288, $this->source); })()), "i18n", [], "any", false, false, false, 288), "translationParameters", [], "any", false, false, false, 288), "EasyAdminBundle"), [],         // line 2
(isset($context["__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3"]) || array_key_exists("__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3", $context) ? $context["__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3"] : (function () { throw new RuntimeError('Variable "__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 288
        yield "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 288, $this->source); })()), "crud", [], "any", false, false, false, 288), "currentAction", [], "any", false, false, false, 288) == "index") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 288, $this->source); })()), "crud", [], "any", false, false, false, 288), "autofocusSearch", [], "any", false, false, false, 288) == true))) {
            yield " autofocus=\"autofocus\"";
        }
        yield ">
                                                        </label>

                                                        ";
        // line 291
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "request", [], "any", false, false, false, 291), "get", ["query"], "method", false, false, false, 291)) {
            // line 292
            yield "                                                            <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 292), "html", null, true);
            yield "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 296
        yield "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 253
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        // line 254
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 254, $this->source); })()), "search", [], "any", false, false, false, 254), "appliedFilters", [], "any", false, false, false, 254));
        foreach ($context['_seq'] as $context["field"] => $context["fieldValue"]) {
            // line 255
            yield "                                                        ";
            if (is_iterable($context["fieldValue"])) {
                // line 256
                yield "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["fieldValue"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 257
                    yield "                                                                ";
                    // line 258
                    yield "                                                                ";
                    if (is_iterable($context["value"])) {
                        // line 259
                        yield "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                        foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                            // line 260
                            yield "                                                                        ";
                            // line 261
                            yield "                                                                        ";
                            if (is_iterable($context["iterValue"])) {
                                // line 262
                                yield "                                                                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable($context["iterValue"]);
                                foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                    // line 263
                                    yield "                                                                                <input type=\"hidden\" name=\"filters[";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                                    yield "][";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
                                    yield "][";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["index"], "html", null, true);
                                    yield "][";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["subIndex"], "html", null, true);
                                    yield "]\" value=\"";
                                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["subIterValue"], "html", null, true);
                                    yield "\">
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['subIndex'], $context['subIterValue'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 265
                                yield "                                                                        ";
                            } else {
                                // line 266
                                yield "                                                                            <input type=\"hidden\" name=\"filters[";
                                yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                                yield "][";
                                yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
                                yield "][";
                                yield Twig\Extension\EscaperExtension::escape($this->env, $context["index"], "html", null, true);
                                yield "]\" value=\"";
                                yield Twig\Extension\EscaperExtension::escape($this->env, $context["iterValue"], "html", null, true);
                                yield "\">
                                                                        ";
                            }
                            // line 268
                            yield "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 269
                        yield "                                                                ";
                    } else {
                        // line 270
                        yield "                                                                    <input type=\"hidden\" name=\"filters[";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                        yield "][";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
                        yield "]\" value=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html", null, true);
                        yield "\">
                                                                ";
                    }
                    // line 272
                    yield "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                yield "                                                        ";
            } else {
                // line 274
                yield "                                                            <input type=\"hidden\" name=\"filters[";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                yield "]\" value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["fieldValue"], "html", null, true);
                yield "\">
                                                        ";
            }
            // line 276
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 305
    public function block_header_custom_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu_wrapper"));

        // line 306
        yield "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 307
        yield from $this->unwrap()->yieldBlock('header_custom_menu', $context, $blocks);
        // line 319
        yield "                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 307
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 308
        yield "                                    <div class=\"dropdown user-menu-wrapper ";
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 308, $this->source); })()))) ? ("user-is-impersonated") : (""));
        yield "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 310
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 310, $this->source); })()), "html", null, true);
        yield "
                                            ";
        // line 311
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 311, $this->source); })()), "userMenu", [], "any", false, false, false, 311), "isNameDisplayed", [], "any", false, false, false, 311)) {
            // line 312
            yield "                                                <span class=\"user-name\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 312, $this->source); })()), "userMenu", [], "any", false, false, false, 312), "name", [], "any", false, false, false, 312), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 314
        yield "                                        </a>

                                        ";
        // line 316
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 316, $this->source); })()), "html", null, true);
        yield "
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 322
    public function block_settings_dropdown_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "settings_dropdown_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "settings_dropdown_wrapper"));

        // line 323
        yield "                                ";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 323, $this->source); })()), "html", null, true);
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 329
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 330
        yield "                            <article class=\"content\">
                                ";
        // line 331
        yield from $this->unwrap()->yieldBlock('content_header_wrapper', $context, $blocks);
        // line 355
        yield "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 357
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 358
        yield "                                </section>

                                ";
        // line 360
        yield from $this->unwrap()->yieldBlock('content_footer_wrapper', $context, $blocks);
        // line 368
        yield "                            </article>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 331
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 332
        yield "                                    ";
        $context["has_help_message"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", true, true, false, 332) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", false, false, false, 332)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", false, false, false, 332)) : ("")));
        // line 333
        yield "                                    <section class=\"content-header\">
                                        ";
        // line 334
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 353
        yield "                                    </section>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 334
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 335
        yield "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 337
        yield from $this->unwrap()->yieldBlock('content_title', $context, $blocks);
        // line 338
        yield "
                                                    ";
        // line 339
        yield from $this->unwrap()->yieldBlock('content_help', $context, $blocks);
        // line 346
        yield "                                                </h1>
                                            </div>

                                            ";
        // line 349
        yield from $this->unwrap()->yieldBlock('page_actions_wrapper', $context, $blocks);
        // line 352
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 337
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 339
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        // line 340
        yield "                                                        ";
        if ((isset($context["has_help_message"]) || array_key_exists("has_help_message", $context) ? $context["has_help_message"] : (function () { throw new RuntimeError('Variable "has_help_message" does not exist.', 340, $this->source); })())) {
            // line 341
            yield "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 341, $this->source); })()), "crud", [], "any", false, false, false, 341), "helpMessage", [], "any", false, false, false, 341), [],             // line 2
(isset($context["__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3"]) || array_key_exists("__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3", $context) ? $context["__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3"] : (function () { throw new RuntimeError('Variable "__internal_ef16418e57ae120572759c36101ecfba393c316e6046e52d8c7a726ce47048b3" does not exist.', 2, $this->source); })())), "html_attr");
            // line 341
            yield "\">
                                                                <i class=\"far fa-question-circle\"></i>
                                                            </a>
                                                        ";
        }
        // line 345
        yield "                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 349
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 350
        yield "                                                <div class=\"page-actions\">";
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        yield "</div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 357
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 360
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 361
        yield "                                    ";
        $context["content_footer"] = ((        $this->unwrap()->hasBlock("content_footer", $context, $blocks)) ? (        $this->unwrap()->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 362
        yield "                                    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 362, $this->source); })()))) {
            // line 363
            yield "                                        <section class=\"content-footer\">
                                            ";
            // line 364
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 364, $this->source); })()), "html", null, true);
            yield "
                                        </section>
                                    ";
        }
        // line 367
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 378
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 380
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 381
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", true, true, false, 381) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", false, false, false, 381)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", false, false, false, 381)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 382
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
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
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1917 => 384,  1908 => 382,  1903 => 381,  1893 => 380,  1874 => 378,  1863 => 367,  1857 => 364,  1854 => 363,  1851 => 362,  1848 => 361,  1838 => 360,  1819 => 357,  1787 => 350,  1777 => 349,  1766 => 345,  1760 => 341,  1758 => 2,  1756 => 341,  1753 => 340,  1743 => 339,  1724 => 337,  1713 => 352,  1711 => 349,  1706 => 346,  1704 => 339,  1701 => 338,  1699 => 337,  1695 => 335,  1685 => 334,  1673 => 353,  1671 => 334,  1668 => 333,  1665 => 332,  1655 => 331,  1643 => 368,  1641 => 360,  1637 => 358,  1635 => 357,  1631 => 355,  1629 => 331,  1626 => 330,  1616 => 329,  1602 => 323,  1592 => 322,  1578 => 316,  1574 => 314,  1568 => 312,  1566 => 311,  1562 => 310,  1556 => 308,  1546 => 307,  1534 => 319,  1532 => 307,  1529 => 306,  1519 => 305,  1508 => 277,  1502 => 276,  1494 => 274,  1491 => 273,  1485 => 272,  1475 => 270,  1472 => 269,  1466 => 268,  1454 => 266,  1451 => 265,  1434 => 263,  1429 => 262,  1426 => 261,  1424 => 260,  1419 => 259,  1416 => 258,  1414 => 257,  1409 => 256,  1406 => 255,  1401 => 254,  1391 => 253,  1378 => 296,  1370 => 292,  1368 => 291,  1359 => 288,  1357 => 2,  1352 => 288,  1348 => 287,  1338 => 280,  1334 => 278,  1331 => 253,  1321 => 252,  1309 => 299,  1307 => 252,  1303 => 250,  1293 => 249,  1281 => 302,  1278 => 301,  1275 => 249,  1273 => 248,  1270 => 247,  1260 => 246,  1249 => 325,  1247 => 322,  1244 => 321,  1242 => 305,  1239 => 304,  1236 => 246,  1226 => 245,  1212 => 234,  1202 => 233,  1187 => 223,  1180 => 222,  1170 => 221,  1158 => 227,  1156 => 221,  1153 => 220,  1143 => 219,  1131 => 229,  1129 => 219,  1126 => 218,  1116 => 217,  1105 => 236,  1103 => 233,  1099 => 231,  1097 => 217,  1094 => 216,  1084 => 215,  1070 => 190,  1063 => 189,  1053 => 188,  1040 => 209,  1034 => 206,  1030 => 204,  1024 => 202,  1018 => 200,  1015 => 199,  1010 => 195,  1006 => 193,  1004 => 188,  997 => 183,  987 => 182,  972 => 370,  970 => 329,  965 => 326,  963 => 245,  958 => 244,  956 => 243,  948 => 237,  946 => 215,  940 => 211,  938 => 182,  935 => 181,  925 => 180,  914 => 118,  911 => 117,  896 => 115,  891 => 112,  889 => 2,  887 => 112,  881 => 111,  874 => 109,  867 => 108,  865 => 107,  862 => 106,  860 => 105,  857 => 104,  840 => 103,  837 => 102,  834 => 101,  824 => 100,  810 => 72,  800 => 71,  788 => 375,  786 => 180,  782 => 178,  779 => 177,  774 => 174,  767 => 170,  758 => 164,  749 => 158,  741 => 153,  737 => 151,  733 => 149,  730 => 148,  728 => 147,  725 => 146,  722 => 145,  711 => 141,  705 => 139,  703 => 138,  695 => 137,  692 => 136,  688 => 135,  682 => 132,  679 => 131,  677 => 130,  669 => 124,  666 => 123,  664 => 122,  661 => 121,  657 => 119,  655 => 100,  648 => 96,  644 => 95,  639 => 93,  635 => 91,  633 => 90,  630 => 89,  628 => 88,  625 => 87,  622 => 86,  616 => 84,  609 => 80,  604 => 77,  601 => 76,  599 => 75,  596 => 74,  593 => 71,  583 => 70,  569 => 67,  559 => 66,  545 => 64,  535 => 63,  516 => 58,  497 => 57,  478 => 56,  466 => 385,  464 => 380,  461 => 379,  459 => 378,  456 => 377,  454 => 70,  451 => 69,  448 => 66,  446 => 63,  441 => 61,  437 => 60,  433 => 59,  429 => 58,  424 => 57,  421 => 56,  411 => 55,  400 => 52,  391 => 50,  386 => 49,  376 => 48,  363 => 41,  358 => 40,  348 => 39,  334 => 35,  324 => 34,  313 => 37,  311 => 34,  305 => 32,  295 => 31,  281 => 28,  271 => 27,  258 => 24,  253 => 23,  243 => 22,  229 => 19,  219 => 18,  199 => 15,  183 => 8,  173 => 7,  161 => 387,  159 => 55,  155 => 53,  153 => 48,  150 => 47,  144 => 45,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  107 => 15,  104 => 14,  102 => 7,  95 => 5,  91 => 3,  89 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% if 'rtl' == ea.i18n.textDirection %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.rtl.css', ea.assets.defaultAssetPackageName) }}\">
    {% endif %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground {{ ea.user is not null ? 'fa fa-user' : 'fas fa-user-slash' }} fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                </li>

                {% block user_menu %}
                    {% if ea.userMenu.items|length > 0 %}
                        <li><hr class=\"dropdown-divider\"></li>
                        {% for item in ea.userMenu.items %}
                            <li>
                                {% if item.isMenuSection and not loop.first %}
                                    <hr class=\"dropdown-divider\">
                                {% elseif not item.isMenuSection %}
                                    <a href=\"{{ item.linkUrl }}\" class=\"dropdown-item user-action {{ item.cssClass }}\"
                                       target=\"{{ item.linkTarget }}\" rel=\"{{ item.linkRel }}\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        {% if item.icon is not empty %}<i class=\"fa fa-fw {{ item.icon }}\"></i>{% endif %}
                                        {{ item.label|trans }}
                                    </a>
                                {% endif %}
                            </li>
                        {% endfor %}
                    {% endif %}
                {% endblock user_menu %}
            </ul>
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                <div class=\"dropdown dropdown-settings\">
                    <a class=\"dropdown-settings-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                        <i class=\"fas fa-gear\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-end\">
                        {% if ea.dashboardLocales %}
                            <li class=\"dropdown-header dropdown-locales-label\">
                                {{ 'settings.locale'|trans(domain = 'EasyAdminBundle') }}
                            </li>

                            {% for localeDto in ea.dashboardLocales %}
                                <li>
                                    <a href=\"{{ ea_url().set('_locale', localeDto.locale) }}\" class=\"dropdown-item{% if app.request.locale == localeDto.locale %} active{% endif %}\">
                                        {% if localeDto.icon %}
                                            <i class=\"{{ localeDto.icon }}\"></i>
                                        {% endif %}
                                        {{ localeDto.name }}
                                    </a>
                                </li>
                            {% endfor %}
                        {% endif %}

                        {% if ea.dashboardHasDarkModeEnabled %}
                            {% if ea.dashboardLocales %}
                                <div class=\"dropdown-divider\"></div>
                            {% endif %}

                            <li class=\"dropdown-header dropdown-appearance-label\">
                                {{ 'settings.appearance.label'|trans(domain = 'EasyAdminBundle') }}
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"light\">
                                    <i class=\"far fa-sun fa-fw\"></i>
                                    {{ 'settings.appearance.light'|trans(domain = 'EasyAdminBundle') }}
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"dark\">
                                    <i class=\"far fa-moon fa-fw\"></i>
                                    {{ 'settings.appearance.dark'|trans(domain = 'EasyAdminBundle') }}
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item active\" data-ea-color-scheme=\"auto\">
                                    <i class=\"fas fa-desktop fa-fw\"></i>
                                    {{ 'settings.appearance.auto'|trans(domain = 'EasyAdminBundle') }}
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        <div class=\"dropdown user-menu-wrapper {{ is_granted(impersonator_permission) ? 'user-is-impersonated' }} ms-auto\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    <i class=\"user-avatar fa fa-fw {{ ea.user is not null ? 'fa-user' : 'fa-user-times' }}\"></i>
                                {% endif %}
                            </a>

                            {{ user_menu_dropdown }}
                        </div>

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}

                                        <form class=\"form-action-search\" method=\"get\">
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.get('query') %}
                                                            <a href=\"{{ ea_url().unset('query') }}\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    <div class=\"dropdown user-menu-wrapper {{ is_granted(impersonator_permission) ? 'user-is-impersonated' }}\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            {{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        </a>

                                        {{ user_menu_dropdown }}
                                    </div>
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html_attr') }}\">
                                                                <i class=\"far fa-question-circle\"></i>
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/utxra/projects/netflix/vendor/easycorp/easyadmin-bundle/src/Resources/views/layout.html.twig");
    }
}
