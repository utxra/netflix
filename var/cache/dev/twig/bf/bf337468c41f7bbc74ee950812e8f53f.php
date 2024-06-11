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

/* player/index.html.twig */
class __TwigTemplate_7af406bc46c72fc3fe37c7aa937e9fb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "player/index.html.twig", 1);
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

        yield "Hello PlayerController!";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.7.8/plyr.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "
";
        // line 13
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 16
        yield "
<div class=\"plyr__video-embed\" id=\"player\">
  <iframe
    src=\"https://www.youtube.com/embed/";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "?origin=";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["origin"]) || array_key_exists("origin", $context) ? $context["origin"] : (function () { throw new RuntimeError('Variable "origin" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "&autoplay=1\"
    allowfullscreen
    allowtransparency
    allow=\"autoplay\"
    autoplay
  ></iframe>
</div>

<script src=\"https://cdn.plyr.io/3.7.8/plyr.polyfilled.js\"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const player = new Plyr('#player', { 
            youtube: { 
                noCookie: true 
            } 
        });

        // Función para obtener el valor de una cookie por nombre
        function getCookie(name) {
            const value = `; \${document.cookie}`;
            const parts = value.split(`; \${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        // Verificar si hay un tiempo de restauración guardado en la cookie
        const tiempoRestauracion = getCookie('videoTime_";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "');
        if (tiempoRestauracion) {
            player.once('ready', () => {
                player.currentTime = parseFloat(tiempoRestauracion);
            });
        }

        // Guardar el progreso en la cookie en cada actualización de tiempo
        player.on('timeupdate', () => {
            document.cookie = \"videoTime_";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "=\" + player.currentTime + \"; path=/\";
        });

        // Guardar el tiempo de reproducción antes de que la página se recargue o se cierre
        window.addEventListener(\"beforeunload\", () => {
            document.cookie = \"videoTime_";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "=\" + player.currentTime + \"; path=/\";
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "player/index.html.twig";
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
        return array (  207 => 14,  197 => 13,  181 => 59,  173 => 54,  161 => 45,  130 => 19,  125 => 16,  123 => 13,  120 => 12,  110 => 11,  97 => 8,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PlayerController!{% endblock %}

{% block stylesheets %}
{{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.7.8/plyr.css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/player.css') }}\">
{% endblock %}

{% block body %}

{% block header %}

{% endblock %}

<div class=\"plyr__video-embed\" id=\"player\">
  <iframe
    src=\"https://www.youtube.com/embed/{{ video }}?origin={{ origin }}&autoplay=1\"
    allowfullscreen
    allowtransparency
    allow=\"autoplay\"
    autoplay
  ></iframe>
</div>

<script src=\"https://cdn.plyr.io/3.7.8/plyr.polyfilled.js\"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const player = new Plyr('#player', { 
            youtube: { 
                noCookie: true 
            } 
        });

        // Función para obtener el valor de una cookie por nombre
        function getCookie(name) {
            const value = `; \${document.cookie}`;
            const parts = value.split(`; \${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        // Verificar si hay un tiempo de restauración guardado en la cookie
        const tiempoRestauracion = getCookie('videoTime_{{ video }}');
        if (tiempoRestauracion) {
            player.once('ready', () => {
                player.currentTime = parseFloat(tiempoRestauracion);
            });
        }

        // Guardar el progreso en la cookie en cada actualización de tiempo
        player.on('timeupdate', () => {
            document.cookie = \"videoTime_{{ video }}=\" + player.currentTime + \"; path=/\";
        });

        // Guardar el tiempo de reproducción antes de que la página se recargue o se cierre
        window.addEventListener(\"beforeunload\", () => {
            document.cookie = \"videoTime_{{ video }}=\" + player.currentTime + \"; path=/\";
        });
    });
</script>
{% endblock %}
", "player/index.html.twig", "/home/utxra/projects/netflix/templates/player/index.html.twig");
    }
}
