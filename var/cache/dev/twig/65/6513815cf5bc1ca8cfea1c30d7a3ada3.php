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

/* home/index.html.twig */
class __TwigTemplate_45aedbd214a15848fb5e15f117ceb966 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Home
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "\t";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        yield "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "    <div style=\"banner-parent\">
        <div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["banner_movie"]) || array_key_exists("banner_movie", $context) ? $context["banner_movie"] : (function () { throw new RuntimeError('Variable "banner_movie" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        yield "')\">
            <div class=\"banner-content\">
                <div>
                    <img src=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["banner_movie"]) || array_key_exists("banner_movie", $context) ? $context["banner_movie"] : (function () { throw new RuntimeError('Variable "banner_movie" does not exist.', 18, $this->source); })()), "logo", [], "any", false, false, false, 18), "html", null, true);
        yield "\" alt=\"Logo ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["banner_movie"]) || array_key_exists("banner_movie", $context) ? $context["banner_movie"] : (function () { throw new RuntimeError('Variable "banner_movie" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        yield "\" class=\"banner-image\" style=\"width: 100%;\">
                </div>
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<a href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_movies", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["banner_movie"]) || array_key_exists("banner_movie", $context) ? $context["banner_movie"] : (function () { throw new RuntimeError('Variable "banner_movie" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\">
\t\t\t\t\t\t<button class=\"btn btn-light m-2 d-flex justify-content-center align-item-center\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-play\" style=\"color: black; padding: 0;\"></i> Reproducir
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
            </div>
        </div>
    </div>

\t<div class=\"movie-container\">
    <p class=\"titulo-seccion\">Películas mejor valoradas ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">
\t
    \t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_rated_peliculas"]) || array_key_exists("top_rated_peliculas", $context) ? $context["top_rated_peliculas"] : (function () { throw new RuntimeError('Variable "top_rated_peliculas" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 37
            yield "\t
    \t\t<div class=\"card\" id=\"card-peli-";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\">
\t
    \t\t\t<img src=\"";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "image", [], "any", false, false, false, 40), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Imagen ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
\t
    \t\t\t<div class=\"card-body\">
\t
    \t\t\t\t<h2 style=\"color: white;\">";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 44), "html", null, true);
            yield "</h2>
\t
    \t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

                        <div class=\"puntuacion\">

    \t\t\t\t\t    <div class=\"porcentaje\">
                        
\t\t\t\t\t\t        <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                        
\t\t\t\t\t\t        ";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::round(Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "vote_average", [], "any", false, false, false, 54))), "html", null, true);
            yield "%</p>
                            
                            </div>
                        
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">";
            // line 60
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "genres", [], "any", false, false, false, 60), " - "), "html", null, true);
            yield "</span>
\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>
\t
    \t\t\t\t</section>
\t
    \t\t\t</div>
\t
    \t\t</div>

\t\t\t";
            // line 70
            yield "            <dialog id=\"info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\" class=\"info\">
\t\t
        \t\t<div>
\t\t
        \t\t\t<section class=\"netflix-home-video\">
\t\t
        \t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-peliculas-";
            // line 76
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "\"></button>
        \t\t\t\t<div class=\"content\">
\t\t
        \t\t\t\t\t<section class=\"left\">

\t\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
            // line 81
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "image", [], "any", false, false, false, 81), "html", null, true);
            yield "');\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 85
            if (CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "logo", [], "any", false, false, false, 85)) {
                // line 86
                yield "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "logo", [], "any", false, false, false, 86), "html", null, true);
                yield "\" alt=\"Logo ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 86), "html", null, true);
                yield "\" class=\"info-logo\">
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 88
                yield "\t\t\t\t\t\t\t\t\t\t<h2>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 88), "html", null, true);
                yield "</h2>
\t\t\t\t\t\t\t\t\t";
            }
            // line 90
            yield "\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 91
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_movies", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light m-2 d-flex justify-content-center align-item-center\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-play\" style=\"color: black; padding: 0;\"></i> Reproducir
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t
        \t\t\t\t\t</section>
\t\t
        \t\t\t\t</div>
\t\t
        \t\t\t</section>
\t\t
        \t\t</div>
\t\t
        \t\t<div class=\"info-contenido m-3 row\">
\t\t
        \t\t\t<div class=\"col d-flex align-items-center\">
\t\t
        \t\t\t\t<h3 class=\"text-white\">Sinopsis</h3>
\t\t
        \t\t\t\t<div class=\"duracion\">Fecha ";
            // line 116
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "release_date", [], "any", false, false, false, 116), "html", null, true);
            yield "</div>
\t\t\t\t\t
                    </div>
\t\t\t\t\t
                    <div>
\t\t\t\t\t
                    \t<p style=\"text-align: justify;\">";
            // line 122
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "description", [], "any", false, false, false, 122), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "cast", [], "any", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 127
                yield "\t\t\t\t\t\t\t\t";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 127), "html", null, true);
                yield "
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t";
                // line 129
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "character", [], "any", false, false, false, 129), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "\t\t\t\t\t\t\t, etc.
                        </p>
\t\t\t\t
                \t</div>

\t\t\t\t</div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_peli_";
            // line 142
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 142), "html", null, true);
            yield " = document.querySelector(\"#card-peli-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 142), "html", null, true);
            yield "\");
                const btnCerrarInfo_pelis_";
            // line 143
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield " = document.querySelector(\"#btn-cerrar-info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "\");
                const info_pelis_";
            // line 144
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 144), "html", null, true);
            yield " = document.querySelector(\"#info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 144), "html", null, true);
            yield "\");

                card_peli_";
            // line 146
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 146), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_pelis_";
            // line 147
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 147), "html", null, true);
            yield ".showModal();
                })

                btnCerrarInfo_pelis_";
            // line 150
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 150), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_pelis_";
            // line 151
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 151), "html", null, true);
            yield ".close();
                })

\t\t\t</script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "\t</div>
    </div>

\t<p class=\"titulo-seccion mt-4\">Series mejor valoradas ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">

\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_rated_series"]) || array_key_exists("top_rated_series", $context) ? $context["top_rated_series"] : (function () { throw new RuntimeError('Variable "top_rated_series" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 164
            yield "
\t\t\t<div class=\"card\" id=\"card-serie-";
            // line 165
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 165), "html", null, true);
            yield "\">

\t\t\t\t<img src=\"";
            // line 167
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "image", [], "any", false, false, false, 167), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Imagen";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 167), "html", null, true);
            yield "\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<h2 style=\"color: white;\">";
            // line 171
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 171), "html", null, true);
            yield "</h2>

\t\t\t\t\t<section class=\"d-flex align-items-center\">

\t\t\t\t\t\t <div class=\"puntuacion\">
    \t\t\t\t\t    
                            <div class=\"porcentaje\">
                            
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                ";
            // line 180
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::round(Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "vote_average", [], "any", false, false, false, 180))), "html", null, true);
            yield "%</p>
                            
                            </div>
                        
                        </div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">";
            // line 186
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "genres", [], "any", false, false, false, 186), " - "), "html", null, true);
            yield "</span>

\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>

\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t";
            // line 197
            yield "\t\t\t<dialog id=\"info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 197), "html", null, true);
            yield "\" class=\"info\">

\t\t\t\t<div>

\t\t\t\t\t<section class=\"netflix-home-video\">

\t\t\t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-series-";
            // line 203
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 203), "html", null, true);
            yield "\"></button>

\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
            // line 205
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "image", [], "any", false, false, false, 205), "html", null, true);
            yield "');\">
\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t";
            // line 207
            if (CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "logo", [], "any", false, false, false, 207)) {
                // line 208
                yield "\t\t\t\t\t\t\t\t<img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "logo", [], "any", false, false, false, 208), "html", null, true);
                yield "\" alt=\"Logo ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 208), "html", null, true);
                yield "\" class=\"info-logo\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 210
                yield "\t\t\t\t\t\t\t\t<h2>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 210), "html", null, true);
                yield "</h2>
\t\t\t\t\t\t\t\t";
            }
            // line 212
            yield "\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 213
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_series", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 213)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light m-2 d-flex justify-content-center align-item-center\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-play\" style=\"color: black; padding: 0;\"></i> Reproducir
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t<section class=\"left\">

\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t\t<div class=\"info-contenido m-5 row\">

\t\t\t\t\t<div class=\"col d-flex align-items-center\">

\t\t\t\t\t\t<h3 class=\"text-white\">Sinopsis</h3>

\t\t\t\t\t\t<div class=\"duracion\">Fecha ";
            // line 239
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "release_date", [], "any", false, false, false, 239), "html", null, true);
            yield "</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div>

\t\t\t\t\t\t<p style=\"text-align: justify;\">";
            // line 245
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "description", [], "any", false, false, false, 245), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "cast", [], "any", false, false, false, 249));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 250
                yield "\t\t\t\t\t\t\t\t";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 250), "html", null, true);
                yield "
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t";
                // line 252
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "character", [], "any", false, false, false, 252), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            yield "\t\t\t\t\t\t\t, etc.
                        </p>

\t\t\t\t\t</div>

                    <div>
                    
                        <p>
                            <b>Temporadas:
                            </b>
                            ";
            // line 264
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "seasons", [], "any", false, false, false, 264)), "html", null, true);
            yield "
                        </p>
\t\t\t\t\t\t<p> 
\t\t\t\t\t\t\t<b>Episodios:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 269
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "number_of_episodes", [], "any", false, false, false, 269), "html", null, true);
            yield "
\t\t\t\t\t\t</p>

                    </div>

                </div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_serie_";
            // line 280
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 280), "html", null, true);
            yield " = document.querySelector(\"#card-serie-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 280), "html", null, true);
            yield "\");
                const btnCerrarInfo_series_";
            // line 281
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 281), "html", null, true);
            yield " = document.querySelector(\"#btn-cerrar-info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 281), "html", null, true);
            yield "\");
                const info_series_";
            // line 282
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 282), "html", null, true);
            yield " = document.querySelector(\"#info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 282), "html", null, true);
            yield "\");

                card_serie_";
            // line 284
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 284), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_series_";
            // line 285
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 285), "html", null, true);
            yield ".showModal();
                })

                btnCerrarInfo_series_";
            // line 288
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 288), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_series_";
            // line 289
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 289), "html", null, true);
            yield ".close();
                console.log(\"cerrar\");
                })

            </script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        yield "
\t</div>

\t";
        // line 298
        yield from         $this->loadTemplate("_footer.html.twig", "home/index.html.twig", 298)->unwrap()->yield($context);
        // line 299
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
        return "home/index.html.twig";
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
        return array (  630 => 299,  628 => 298,  623 => 295,  611 => 289,  607 => 288,  601 => 285,  597 => 284,  590 => 282,  584 => 281,  578 => 280,  564 => 269,  556 => 264,  544 => 254,  536 => 252,  530 => 250,  526 => 249,  519 => 245,  510 => 239,  481 => 213,  478 => 212,  472 => 210,  464 => 208,  462 => 207,  457 => 205,  452 => 203,  442 => 197,  429 => 186,  420 => 180,  408 => 171,  399 => 167,  394 => 165,  391 => 164,  387 => 163,  378 => 156,  367 => 151,  363 => 150,  357 => 147,  353 => 146,  346 => 144,  340 => 143,  334 => 142,  321 => 131,  313 => 129,  307 => 127,  303 => 126,  296 => 122,  287 => 116,  259 => 91,  256 => 90,  250 => 88,  242 => 86,  240 => 85,  233 => 81,  225 => 76,  215 => 70,  203 => 60,  194 => 54,  181 => 44,  172 => 40,  167 => 38,  164 => 37,  160 => 36,  142 => 21,  134 => 18,  128 => 15,  125 => 14,  115 => 13,  101 => 9,  97 => 8,  92 => 7,  82 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/base.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/home.css') }}\">

{% endblock %}

{% block body %}
    <div style=\"banner-parent\">
        <div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('{{ banner_movie.image }}')\">
            <div class=\"banner-content\">
                <div>
                    <img src=\"{{ banner_movie.logo }}\" alt=\"Logo {{ banner_movie.title }}\" class=\"banner-image\" style=\"width: 100%;\">
                </div>
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<a href=\"{{ path('app_player_movies', {'id': banner_movie.id}) }}\">
\t\t\t\t\t\t<button class=\"btn btn-light m-2 d-flex justify-content-center align-item-center\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-play\" style=\"color: black; padding: 0;\"></i> Reproducir
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
            </div>
        </div>
    </div>

\t<div class=\"movie-container\">
    <p class=\"titulo-seccion\">Películas mejor valoradas ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">
\t
    \t{% for pelicula in top_rated_peliculas %}
\t
    \t\t<div class=\"card\" id=\"card-peli-{{ pelicula.id }}\">
\t
    \t\t\t<img src=\"{{ pelicula.image }}\" class=\"card-img-top\" alt=\"Imagen {{ pelicula.title }}\">
\t
    \t\t\t<div class=\"card-body\">
\t
    \t\t\t\t<h2 style=\"color: white;\">{{ pelicula.title }}</h2>
\t
    \t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

                        <div class=\"puntuacion\">

    \t\t\t\t\t    <div class=\"porcentaje\">
                        
\t\t\t\t\t\t        <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                        
\t\t\t\t\t\t        {{ pelicula.vote_average|number_format|round }}%</p>
                            
                            </div>
                        
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">{{ pelicula.genres|join(' - ') }}</span>
\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>
\t
    \t\t\t\t</section>
\t
    \t\t\t</div>
\t
    \t\t</div>

\t\t\t{# <--! POP UP PELÍCULA --> #}
            <dialog id=\"info-peliculas-{{ pelicula.id }}\" class=\"info\">
\t\t
        \t\t<div>
\t\t
        \t\t\t<section class=\"netflix-home-video\">
\t\t
        \t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-peliculas-{{ pelicula.id }}\"></button>
        \t\t\t\t<div class=\"content\">
\t\t
        \t\t\t\t\t<section class=\"left\">

\t\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('{{ pelicula.image }}');\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% if pelicula.logo %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ pelicula.logo }}\" alt=\"Logo {{ pelicula.title }}\" class=\"info-logo\">
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<h2>{{ pelicula.title }}</h2>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_player_movies', {'id': pelicula.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light m-2 d-flex justify-content-center align-item-center\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-play\" style=\"color: black; padding: 0;\"></i> Reproducir
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t
        \t\t\t\t\t</section>
\t\t
        \t\t\t\t</div>
\t\t
        \t\t\t</section>
\t\t
        \t\t</div>
\t\t
        \t\t<div class=\"info-contenido m-3 row\">
\t\t
        \t\t\t<div class=\"col d-flex align-items-center\">
\t\t
        \t\t\t\t<h3 class=\"text-white\">Sinopsis</h3>
\t\t
        \t\t\t\t<div class=\"duracion\">Fecha {{ pelicula.release_date }}</div>
\t\t\t\t\t
                    </div>
\t\t\t\t\t
                    <div>
\t\t\t\t\t
                    \t<p style=\"text-align: justify;\">{{ pelicula.description }}</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t{% for member in pelicula.cast %}
\t\t\t\t\t\t\t\t{{ member.name }}
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t{{ member.character }}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t, etc.
                        </p>
\t\t\t\t
                \t</div>

\t\t\t\t</div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_peli_{{ pelicula.id }} = document.querySelector(\"#card-peli-{{ pelicula.id }}\");
                const btnCerrarInfo_pelis_{{ pelicula.id }} = document.querySelector(\"#btn-cerrar-info-peliculas-{{ pelicula.id }}\");
                const info_pelis_{{ pelicula.id }} = document.querySelector(\"#info-peliculas-{{ pelicula.id }}\");

                card_peli_{{ pelicula.id }}.addEventListener(\"click\", () => {
                info_pelis_{{ pelicula.id }}.showModal();
                })

                btnCerrarInfo_pelis_{{ pelicula.id }}.addEventListener(\"click\", () => {
                info_pelis_{{ pelicula.id }}.close();
                })

\t\t\t</script>
\t\t{% endfor %}
\t</div>
    </div>

\t<p class=\"titulo-seccion mt-4\">Series mejor valoradas ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">

\t\t{% for serie in top_rated_series %}

\t\t\t<div class=\"card\" id=\"card-serie-{{ serie.id }}\">

\t\t\t\t<img src=\"{{ serie.image }}\" class=\"card-img-top\" alt=\"Imagen{{ serie.title }}\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<h2 style=\"color: white;\">{{ serie.title }}</h2>

\t\t\t\t\t<section class=\"d-flex align-items-center\">

\t\t\t\t\t\t <div class=\"puntuacion\">
    \t\t\t\t\t    
                            <div class=\"porcentaje\">
                            
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                {{ serie.vote_average|number_format|round }}%</p>
                            
                            </div>
                        
                        </div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">{{ serie.genres|join(' - ') }}</span>

\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>

\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t{# <--! POP UP SERIE --> #}
\t\t\t<dialog id=\"info-series-{{ serie.id }}\" class=\"info\">

\t\t\t\t<div>

\t\t\t\t\t<section class=\"netflix-home-video\">

\t\t\t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-series-{{ serie.id }}\"></button>

\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('{{ serie.image }}');\">
\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t{% if serie.logo %}
\t\t\t\t\t\t\t\t<img src=\"{{ serie.logo }}\" alt=\"Logo {{ serie.title }}\" class=\"info-logo\">
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<h2>{{ serie.title }}</h2>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_player_series', {'id': serie.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light m-2 d-flex justify-content-center align-item-center\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-play\" style=\"color: black; padding: 0;\"></i> Reproducir
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t<section class=\"left\">

\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t\t<div class=\"info-contenido m-5 row\">

\t\t\t\t\t<div class=\"col d-flex align-items-center\">

\t\t\t\t\t\t<h3 class=\"text-white\">Sinopsis</h3>

\t\t\t\t\t\t<div class=\"duracion\">Fecha {{ serie.release_date }}</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div>

\t\t\t\t\t\t<p style=\"text-align: justify;\">{{ serie.description }}</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t{% for member in serie.cast %}
\t\t\t\t\t\t\t\t{{ member.name }}
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t{{ member.character }}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t, etc.
                        </p>

\t\t\t\t\t</div>

                    <div>
                    
                        <p>
                            <b>Temporadas:
                            </b>
                            {{ serie.seasons|length }}
                        </p>
\t\t\t\t\t\t<p> 
\t\t\t\t\t\t\t<b>Episodios:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t{{ serie.number_of_episodes }}
\t\t\t\t\t\t</p>

                    </div>

                </div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_serie_{{ serie.id }} = document.querySelector(\"#card-serie-{{ serie.id }}\");
                const btnCerrarInfo_series_{{ serie.id }} = document.querySelector(\"#btn-cerrar-info-series-{{ serie.id }}\");
                const info_series_{{ serie.id }} = document.querySelector(\"#info-series-{{ serie.id }}\");

                card_serie_{{ serie.id }}.addEventListener(\"click\", () => {
                info_series_{{ serie.id }}.showModal();
                })

                btnCerrarInfo_series_{{ serie.id }}.addEventListener(\"click\", () => {
                info_series_{{ serie.id }}.close();
                console.log(\"cerrar\");
                })

            </script>
\t\t{% endfor %}

\t</div>

\t{% include \"_footer.html.twig\" %}

{% endblock %}
", "home/index.html.twig", "/home/utxra/projects/netflix/templates/home/index.html.twig");
    }
}
