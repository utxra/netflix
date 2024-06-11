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

/* _navbar.html.twig */
class __TwigTemplate_f35c0763e0f295219f2b590155f66cd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        if (((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 1, $this->source); })()) == null)) {
            yield " ";
            $context["avatar"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar/default.png");
            yield " ";
        }
        // line 3
        yield "
<nav
\tclass=\"navbar navbar-expand-lg netflix-navbar netflix-padding-left netflix-padding-right ea-dark-scheme\"
>
\t<div class=\"container-fluid\">
\t\t<button
\t\t\tclass=\"navbar-toggler\"
\t\t\ttype=\"button\"
\t\t\tdata-bs-toggle=\"collapse\"
\t\t\tdata-bs-target=\"#navbarNav\"
\t\t\taria-controls=\"navbarNav\"
\t\t\taria-expanded=\"false\"
\t\t\taria-label=\"Toggle navigation\"
\t\t>
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<a class=\"navbar-brand\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
\t\t\t<img src=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" />
\t\t</a>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav mr-auto text-white\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_peliculas");
        yield "\">Peliculas</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_series");
        yield "\">Series</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<div class=\"navbar-custom-menu\" id=\"user_menu_desktop\">
\t\t\t<div class=\"dropdown user-menu-wrapper\">
\t\t\t\t<button
\t\t\t\t\tclass=\"user-details\"
\t\t\t\t\ttype=\"button\"
\t\t\t\t\tdata-bs-toggle=\"dropdown\"
\t\t\t\t\tdata-bs-offset=\"0,5\"
\t\t\t\t\taria-expanded=\"false\"
\t\t\t\t>
\t\t\t\t\t<img class=\"user-avatar\" src=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "\" />
\t\t\t\t\t<span class=\"user-name\">";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
        yield "</span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t<li class=\"dropdown-user-details\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<img class=\"user-avatar\" src=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"user-label\">Has iniciado sesión con</span>
\t\t\t\t\t\t\t<span class=\"user-name\">";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "email", [], "any", false, false, false, 57), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"user-label\">Nombre</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"text-white fs-6 fw-bold\">";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "nombre", [], "any", false, false, false, 65), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"user-label\">Apellidos</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"text-white fs-6 fw-bold\">";
        // line 71
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 72
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "apellidos", [], "any", false, false, false, 72), "html", null, true);
        // line 73
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\" />
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 80
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 81
            yield "\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\"
\t\t\t\t\t\t\tclass=\"dropdown-item user-action\"
\t\t\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\t\t\trel=\"\"
\t\t\t\t\t\t\treferrerpolicy=\"origin-when-cross-origin\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<i class=\"fa-fw fa fa-dashboard\"></i>Admin Dashboard
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 91
        yield "\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"
\t\t\t\t\t\t\tclass=\"dropdown-item user-action\"
\t\t\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\t\t\trel=\"\"
\t\t\t\t\t\t\treferrerpolicy=\"origin-when-cross-origin\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-sign-out\"></i>Cerrar sesión
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"dropdown user-menu-wrapper ms-auto\" id=\"user_menu_mobile\">
\t\t<button
\t\t\tclass=\"user-details\"
\t\t\ttype=\"button\"
\t\t\tdata-bs-toggle=\"dropdown\"
\t\t\tdata-bs-offset=\"0,5\"
\t\t\taria-expanded=\"false\"
\t\t>
\t\t\t<img class=\"user-avatar\" src=\"";
        // line 114
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "\" />
\t\t</button>

\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t<li class=\"dropdown-user-details\">
\t\t\t\t<div>
\t\t\t\t\t<img class=\"user-avatar\" src=\"";
        // line 120
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 120, $this->source); })()), "html", null, true);
        yield "\" />
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"user-label\">Has iniciado sesión con</span>
\t\t\t\t\t<span class=\"user-name\">";
        // line 124
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "email", [], "any", false, false, false, 124), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"user-label\">Nombre</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"text-white fs-6 fw-bold\">";
        // line 132
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "nombre", [], "any", false, false, false, 132), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"user-label\">Apellidos</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"text-white fs-6 fw-bold\">";
        // line 138
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "apellidos", [], "any", false, false, false, 138), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<hr class=\"dropdown-divider\" />
\t\t\t</li>
\t\t\t<li>
\t\t\t\t";
        // line 145
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 146
            yield "\t\t\t\t<a
\t\t\t\t\thref=\"";
            // line 147
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\"
\t\t\t\t\tclass=\"dropdown-item user-action\"
\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\trel=\"\"
\t\t\t\t\treferrerpolicy=\"origin-when-cross-origin\"
\t\t\t\t>
\t\t\t\t\t<i class=\"fa-fw fa fa-dashboard\"></i>Admin Dashboard
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 156
        yield "\t\t\t\t<a
\t\t\t\t\thref=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"
\t\t\t\t\tclass=\"dropdown-item user-action\"
\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\trel=\"\"
\t\t\t\t\treferrerpolicy=\"origin-when-cross-origin\"
\t\t\t\t>
\t\t\t\t\t<i class=\"fa fa-fw fa-sign-out\"></i>Cerrar sesión
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_navbar.html.twig";
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
        return array (  273 => 157,  270 => 156,  258 => 147,  255 => 146,  253 => 145,  243 => 138,  234 => 132,  223 => 124,  216 => 120,  207 => 114,  182 => 92,  179 => 91,  167 => 82,  164 => 81,  162 => 80,  153 => 73,  151 => 72,  150 => 71,  141 => 65,  130 => 57,  123 => 53,  115 => 48,  111 => 47,  94 => 33,  88 => 30,  82 => 27,  73 => 21,  69 => 20,  50 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if avatar == null %} {% set avatar = asset('images/avatar/default.png') %} {%
endif %}

<nav
\tclass=\"navbar navbar-expand-lg netflix-navbar netflix-padding-left netflix-padding-right ea-dark-scheme\"
>
\t<div class=\"container-fluid\">
\t\t<button
\t\t\tclass=\"navbar-toggler\"
\t\t\ttype=\"button\"
\t\t\tdata-bs-toggle=\"collapse\"
\t\t\tdata-bs-target=\"#navbarNav\"
\t\t\taria-controls=\"navbarNav\"
\t\t\taria-expanded=\"false\"
\t\t\taria-label=\"Toggle navigation\"
\t\t>
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
\t\t\t<img src=\"{{ asset('images/logo/logo.png') }}\" alt=\"Logo\" />
\t\t</a>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav mr-auto text-white\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_home') }}\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_peliculas') }}\">Peliculas</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_series') }}\">Series</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<div class=\"navbar-custom-menu\" id=\"user_menu_desktop\">
\t\t\t<div class=\"dropdown user-menu-wrapper\">
\t\t\t\t<button
\t\t\t\t\tclass=\"user-details\"
\t\t\t\t\ttype=\"button\"
\t\t\t\t\tdata-bs-toggle=\"dropdown\"
\t\t\t\t\tdata-bs-offset=\"0,5\"
\t\t\t\t\taria-expanded=\"false\"
\t\t\t\t>
\t\t\t\t\t<img class=\"user-avatar\" src=\"{{ avatar }}\" />
\t\t\t\t\t<span class=\"user-name\">{{ app.user.email }}</span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t<li class=\"dropdown-user-details\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<img class=\"user-avatar\" src=\"{{ avatar }}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"user-label\">Has iniciado sesión con</span>
\t\t\t\t\t\t\t<span class=\"user-name\">{{ app.user.email }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"user-label\">Nombre</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"text-white fs-6 fw-bold\">{{ app.user.nombre }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"user-label\">Apellidos</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"text-white fs-6 fw-bold\">{{
\t\t\t\t\t\t\t\tapp.user.apellidos
\t\t\t\t\t\t\t}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\" />
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"{{ path('admin') }}\"
\t\t\t\t\t\t\tclass=\"dropdown-item user-action\"
\t\t\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\t\t\trel=\"\"
\t\t\t\t\t\t\treferrerpolicy=\"origin-when-cross-origin\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<i class=\"fa-fw fa fa-dashboard\"></i>Admin Dashboard
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"{{ path('app_logout') }}\"
\t\t\t\t\t\t\tclass=\"dropdown-item user-action\"
\t\t\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\t\t\trel=\"\"
\t\t\t\t\t\t\treferrerpolicy=\"origin-when-cross-origin\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-sign-out\"></i>Cerrar sesión
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"dropdown user-menu-wrapper ms-auto\" id=\"user_menu_mobile\">
\t\t<button
\t\t\tclass=\"user-details\"
\t\t\ttype=\"button\"
\t\t\tdata-bs-toggle=\"dropdown\"
\t\t\tdata-bs-offset=\"0,5\"
\t\t\taria-expanded=\"false\"
\t\t>
\t\t\t<img class=\"user-avatar\" src=\"{{ avatar }}\" />
\t\t</button>

\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t<li class=\"dropdown-user-details\">
\t\t\t\t<div>
\t\t\t\t\t<img class=\"user-avatar\" src=\"{{ avatar }}\" />
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"user-label\">Has iniciado sesión con</span>
\t\t\t\t\t<span class=\"user-name\">{{ app.user.email }}</span>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"user-label\">Nombre</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"text-white fs-6 fw-bold\">{{ app.user.nombre }}</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"user-label\">Apellidos</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span class=\"text-white fs-6 fw-bold\">{{ app.user.apellidos }}</span>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<hr class=\"dropdown-divider\" />
\t\t\t</li>
\t\t\t<li>
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t<a
\t\t\t\t\thref=\"{{ path('admin') }}\"
\t\t\t\t\tclass=\"dropdown-item user-action\"
\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\trel=\"\"
\t\t\t\t\treferrerpolicy=\"origin-when-cross-origin\"
\t\t\t\t>
\t\t\t\t\t<i class=\"fa-fw fa fa-dashboard\"></i>Admin Dashboard
\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t\t<a
\t\t\t\t\thref=\"{{ path('app_logout') }}\"
\t\t\t\t\tclass=\"dropdown-item user-action\"
\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\trel=\"\"
\t\t\t\t\treferrerpolicy=\"origin-when-cross-origin\"
\t\t\t\t>
\t\t\t\t\t<i class=\"fa fa-fw fa-sign-out\"></i>Cerrar sesión
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>
", "_navbar.html.twig", "/home/utxra/projects/netflix/templates/_navbar.html.twig");
    }
}
