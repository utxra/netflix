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

/* peliculas/index.html.twig */
class __TwigTemplate_376fcf1ce9144800c41ca50d006ea41f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peliculas/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peliculas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "peliculas/index.html.twig", 1);
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
    \t\t\t\t<section class=\"d-flex justify-content-between\">
                        <div>
                            <p class=\"text-white\" style=\"font-size: small;\">
                            Película
                            </p>
                        </div>
                        <div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t
    \t\t\t\t<h1 style=\"color: white; font-size: 1.75rem;\">";
            // line 60
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 60), "html", null, true);
            yield "</h1>
\t
    \t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

                        <div class=\"puntuacion\">
    \t\t\t\t\t    <div class=\"porcentaje\">
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                ";
            // line 67
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::round(Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "vote_average", [], "any", false, false, false, 67))), "html", null, true);
            yield "%</p>
                            
                            </div>
                        </div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">";
            // line 72
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "genres", [], "any", false, false, false, 72), " - "), "html", null, true);
            yield "</span>
\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>
\t
    \t\t\t\t</section>
\t
    \t\t\t</div>
\t
    \t\t</div>

\t\t\t";
            // line 82
            yield "            <dialog id=\"info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 82), "html", null, true);
            yield "\" class=\"info\">
\t\t
        \t\t<div>
\t\t
        \t\t\t<section class=\"netflix-home-video\">
\t\t
        \t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-peliculas-";
            // line 88
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 88), "html", null, true);
            yield "\"></button>
        \t\t\t\t<div class=\"content\">
\t\t
        \t\t\t\t\t<section class=\"left\">

\t\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "image", [], "any", false, false, false, 93), "html", null, true);
            yield "');\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "logo", [], "any", false, false, false, 97)) {
                // line 98
                yield "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "logo", [], "any", false, false, false, 98), "html", null, true);
                yield "\" alt=\"Logo ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 98), "html", null, true);
                yield "\" class=\"info-logo\">
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 100
                yield "\t\t\t\t\t\t\t\t\t\t<h4>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 100), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t";
            }
            // line 102
            yield "\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 103
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_movies", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 103)]), "html", null, true);
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
        \t\t<div class=\"info-contenido m-5 row\">
\t\t
        \t\t\t<div class=\"col d-flex align-items-center\">
\t\t
        \t\t\t\t<h3 class=\"text-white\">Sinopsis</h3>
\t\t
        \t\t\t\t<div class=\"duracion\">Fecha ";
            // line 128
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "release_date", [], "any", false, false, false, 128), "html", null, true);
            yield "</div>
\t\t\t\t\t
                    </div>
\t\t\t\t\t
                    <div>
\t\t\t\t\t
                    \t<p style=\"text-align: justify;\">";
            // line 134
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "description", [], "any", false, false, false, 134), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "cast", [], "any", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 139
                yield "\t\t\t\t\t\t\t\t";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 139), "html", null, true);
                yield "
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t";
                // line 141
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "character", [], "any", false, false, false, 141), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            yield "\t\t\t\t\t\t\t, etc.
                        </p>
\t\t\t\t
                \t</div>

\t\t\t\t</div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_peli_";
            // line 154
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 154), "html", null, true);
            yield " = document.querySelector(\"#card-peli-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 154), "html", null, true);
            yield "\");
                const btnCerrarInfo_pelis_";
            // line 155
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 155), "html", null, true);
            yield " = document.querySelector(\"#btn-cerrar-info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 155), "html", null, true);
            yield "\");
                const info_pelis_";
            // line 156
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 156), "html", null, true);
            yield " = document.querySelector(\"#info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 156), "html", null, true);
            yield "\");

                card_peli_";
            // line 158
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 158), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_pelis_";
            // line 159
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 159), "html", null, true);
            yield ".showModal();
                })

                btnCerrarInfo_pelis_";
            // line 162
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 162), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_pelis_";
            // line 163
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 163), "html", null, true);
            yield ".close();
                })

\t\t\t</script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "\t</div>
    </div>

    <div style=\"
        height: 75px;
    \">
    </div>

    <div class=\"movie-container\">
    <p class=\"titulo-seccion\">Ahora mismo en el cine ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">
\t
    \t";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["now_playing_peliculas"]) || array_key_exists("now_playing_peliculas", $context) ? $context["now_playing_peliculas"] : (function () { throw new RuntimeError('Variable "now_playing_peliculas" does not exist.', 181, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 182
            yield "\t
    \t\t<div class=\"card\" id=\"card-peli-";
            // line 183
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 183), "html", null, true);
            yield "\">
\t
    \t\t\t<img src=\"";
            // line 185
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "image", [], "any", false, false, false, 185), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Imagen ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 185), "html", null, true);
            yield "\">
\t
    \t\t\t<div class=\"card-body\">
\t
    \t\t\t\t<section class=\"d-flex justify-content-between\">
                        <div>
                            <p class=\"text-white\" style=\"font-size: small;\">
                            Película
                            </p>
                        </div>
                        <div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t
    \t\t\t\t<h1 style=\"color: white; font-size: 1.75rem;\">";
            // line 205
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 205), "html", null, true);
            yield "</h1>
\t
    \t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

                        <div class=\"puntuacion\">
    \t\t\t\t\t    <div class=\"porcentaje\">
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                ";
            // line 212
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::round(Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "vote_average", [], "any", false, false, false, 212))), "html", null, true);
            yield "%</p>
                            
                            </div>
                        </div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">";
            // line 217
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "genres", [], "any", false, false, false, 217), " - "), "html", null, true);
            yield "</span>
\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>
\t
    \t\t\t\t</section>
\t
    \t\t\t</div>
\t
    \t\t</div>

\t\t\t";
            // line 227
            yield "            <dialog id=\"info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 227), "html", null, true);
            yield "\" class=\"info\">
\t\t
        \t\t<div>
\t\t
        \t\t\t<section class=\"netflix-home-video\">
\t\t
        \t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-peliculas-";
            // line 233
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 233), "html", null, true);
            yield "\"></button>
        \t\t\t\t<div class=\"content\">
\t\t
        \t\t\t\t\t<section class=\"left\">

\t\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
            // line 238
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "image", [], "any", false, false, false, 238), "html", null, true);
            yield "');\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 242
            if (CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "logo", [], "any", false, false, false, 242)) {
                // line 243
                yield "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "logo", [], "any", false, false, false, 243), "html", null, true);
                yield "\" alt=\"Logo ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 243), "html", null, true);
                yield "\" class=\"info-logo\">
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 245
                yield "\t\t\t\t\t\t\t\t\t\t<h4>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 245), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t";
            }
            // line 247
            yield "\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 248
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_movies", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 248)]), "html", null, true);
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
        \t\t<div class=\"info-contenido m-5 row\">
\t\t
        \t\t\t<div class=\"col d-flex align-items-center\">
\t\t
        \t\t\t\t<h3 class=\"text-white\">Sinopsis</h3>
\t\t
        \t\t\t\t<div class=\"duracion\">Fecha ";
            // line 273
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "release_date", [], "any", false, false, false, 273), "html", null, true);
            yield "</div>
\t\t\t\t\t
                    </div>
\t\t\t\t\t
                    <div>
\t\t\t\t\t
                    \t<p style=\"text-align: justify;\">";
            // line 279
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "description", [], "any", false, false, false, 279), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "cast", [], "any", false, false, false, 283));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 284
                yield "\t\t\t\t\t\t\t\t";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 284), "html", null, true);
                yield "
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t";
                // line 286
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "character", [], "any", false, false, false, 286), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            yield "\t\t\t\t\t\t\t, etc.
                        </p>
\t\t\t\t
                \t</div>

\t\t\t\t</div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_peli_";
            // line 299
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 299), "html", null, true);
            yield " = document.querySelector(\"#card-peli-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 299), "html", null, true);
            yield "\");
                const btnCerrarInfo_pelis_";
            // line 300
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 300), "html", null, true);
            yield " = document.querySelector(\"#btn-cerrar-info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 300), "html", null, true);
            yield "\");
                const info_pelis_";
            // line 301
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 301), "html", null, true);
            yield " = document.querySelector(\"#info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 301), "html", null, true);
            yield "\");

                card_peli_";
            // line 303
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 303), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_pelis_";
            // line 304
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 304), "html", null, true);
            yield ".showModal();
                })

                btnCerrarInfo_pelis_";
            // line 307
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 307), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_pelis_";
            // line 308
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 308), "html", null, true);
            yield ".close();
                })

\t\t\t</script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        yield "\t</div>
    </div>


    <div style=\"
        height: 75px;
    \">
    </div>

    <div class=\"movie-container\">
    <p class=\"titulo-seccion\">Populares ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">
\t
    \t";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popular_peliculas"]) || array_key_exists("popular_peliculas", $context) ? $context["popular_peliculas"] : (function () { throw new RuntimeError('Variable "popular_peliculas" does not exist.', 327, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 328
            yield "\t
    \t\t<div class=\"card\" id=\"card-peli-";
            // line 329
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 329), "html", null, true);
            yield "\">
\t
    \t\t\t<img src=\"";
            // line 331
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "image", [], "any", false, false, false, 331), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Imagen ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 331), "html", null, true);
            yield "\">
\t
    \t\t\t<div class=\"card-body\">
\t
    \t\t\t\t<section class=\"d-flex justify-content-between\">
                        <div>
                            <p class=\"text-white\" style=\"font-size: small;\">
                            Película
                            </p>
                        </div>
                        <div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t
    \t\t\t\t<h1 style=\"color: white; font-size: 1.75rem;\">";
            // line 351
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 351), "html", null, true);
            yield "</h1>
\t
    \t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

                        <div class=\"puntuacion\">
    \t\t\t\t\t    <div class=\"porcentaje\">
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                ";
            // line 358
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::round(Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "vote_average", [], "any", false, false, false, 358))), "html", null, true);
            yield "%</p>
                            
                            </div>
                        </div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">";
            // line 363
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "genres", [], "any", false, false, false, 363), " - "), "html", null, true);
            yield "</span>
\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>
\t
    \t\t\t\t</section>
\t
    \t\t\t</div>
\t
    \t\t</div>

\t\t\t";
            // line 373
            yield "            <dialog id=\"info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 373), "html", null, true);
            yield "\" class=\"info\">
\t\t
        \t\t<div>
\t\t
        \t\t\t<section class=\"netflix-home-video\">
\t\t
        \t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-peliculas-";
            // line 379
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 379), "html", null, true);
            yield "\"></button>
        \t\t\t\t<div class=\"content\">
\t\t
        \t\t\t\t\t<section class=\"left\">

\t\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
            // line 384
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "image", [], "any", false, false, false, 384), "html", null, true);
            yield "');\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 388
            if (CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "logo", [], "any", false, false, false, 388)) {
                // line 389
                yield "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "logo", [], "any", false, false, false, 389), "html", null, true);
                yield "\" alt=\"Logo ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 389), "html", null, true);
                yield "\" class=\"info-logo\">
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 391
                yield "\t\t\t\t\t\t\t\t\t\t<h4>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "title", [], "any", false, false, false, 391), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t";
            }
            // line 393
            yield "\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 394
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_movies", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 394)]), "html", null, true);
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
        \t\t<div class=\"info-contenido m-5 row\">
\t\t
        \t\t\t<div class=\"col d-flex align-items-center\">
\t\t
        \t\t\t\t<h3 class=\"text-white\">Sinopsis</h3>
\t\t
        \t\t\t\t<div class=\"duracion\">Fecha ";
            // line 419
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "release_date", [], "any", false, false, false, 419), "html", null, true);
            yield "</div>
\t\t\t\t\t
                    </div>
\t\t\t\t\t
                    <div>
\t\t\t\t\t
                    \t<p style=\"text-align: justify;\">";
            // line 425
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "description", [], "any", false, false, false, 425), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 429
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "cast", [], "any", false, false, false, 429));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 430
                yield "\t\t\t\t\t\t\t\t";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 430), "html", null, true);
                yield "
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t";
                // line 432
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "character", [], "any", false, false, false, 432), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            yield "\t\t\t\t\t\t\t, etc.
                        </p>
\t\t\t\t
                \t</div>

\t\t\t\t</div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_peli_";
            // line 445
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 445), "html", null, true);
            yield " = document.querySelector(\"#card-peli-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 445), "html", null, true);
            yield "\");
                const btnCerrarInfo_pelis_";
            // line 446
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 446), "html", null, true);
            yield " = document.querySelector(\"#btn-cerrar-info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 446), "html", null, true);
            yield "\");
                const info_pelis_";
            // line 447
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 447), "html", null, true);
            yield " = document.querySelector(\"#info-peliculas-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 447), "html", null, true);
            yield "\");

                card_peli_";
            // line 449
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 449), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_pelis_";
            // line 450
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 450), "html", null, true);
            yield ".showModal();
                })

                btnCerrarInfo_pelis_";
            // line 453
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 453), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_pelis_";
            // line 454
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 454), "html", null, true);
            yield ".close();
                })

\t\t\t</script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 459
        yield "\t</div>
    </div>

\t";
        // line 462
        yield from         $this->loadTemplate("_footer.html.twig", "peliculas/index.html.twig", 462)->unwrap()->yield($context);
        // line 463
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
        return "peliculas/index.html.twig";
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
        return array (  888 => 463,  886 => 462,  881 => 459,  870 => 454,  866 => 453,  860 => 450,  856 => 449,  849 => 447,  843 => 446,  837 => 445,  824 => 434,  816 => 432,  810 => 430,  806 => 429,  799 => 425,  790 => 419,  762 => 394,  759 => 393,  753 => 391,  745 => 389,  743 => 388,  736 => 384,  728 => 379,  718 => 373,  706 => 363,  698 => 358,  688 => 351,  663 => 331,  658 => 329,  655 => 328,  651 => 327,  635 => 313,  624 => 308,  620 => 307,  614 => 304,  610 => 303,  603 => 301,  597 => 300,  591 => 299,  578 => 288,  570 => 286,  564 => 284,  560 => 283,  553 => 279,  544 => 273,  516 => 248,  513 => 247,  507 => 245,  499 => 243,  497 => 242,  490 => 238,  482 => 233,  472 => 227,  460 => 217,  452 => 212,  442 => 205,  417 => 185,  412 => 183,  409 => 182,  405 => 181,  390 => 168,  379 => 163,  375 => 162,  369 => 159,  365 => 158,  358 => 156,  352 => 155,  346 => 154,  333 => 143,  325 => 141,  319 => 139,  315 => 138,  308 => 134,  299 => 128,  271 => 103,  268 => 102,  262 => 100,  254 => 98,  252 => 97,  245 => 93,  237 => 88,  227 => 82,  215 => 72,  207 => 67,  197 => 60,  172 => 40,  167 => 38,  164 => 37,  160 => 36,  142 => 21,  134 => 18,  128 => 15,  125 => 14,  115 => 13,  101 => 9,  97 => 8,  92 => 7,  82 => 6,  61 => 3,  38 => 1,);
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
    \t\t\t\t<section class=\"d-flex justify-content-between\">
                        <div>
                            <p class=\"text-white\" style=\"font-size: small;\">
                            Película
                            </p>
                        </div>
                        <div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t
    \t\t\t\t<h1 style=\"color: white; font-size: 1.75rem;\">{{ pelicula.title }}</h1>
\t
    \t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

                        <div class=\"puntuacion\">
    \t\t\t\t\t    <div class=\"porcentaje\">
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                {{ pelicula.vote_average|number_format|round }}%</p>
                            
                            </div>
                        </div>
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
\t\t\t\t\t\t\t\t\t\t<h4>{{ pelicula.title }}</h4>
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
        \t\t<div class=\"info-contenido m-5 row\">
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

    <div style=\"
        height: 75px;
    \">
    </div>

    <div class=\"movie-container\">
    <p class=\"titulo-seccion\">Ahora mismo en el cine ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">
\t
    \t{% for pelicula in now_playing_peliculas %}
\t
    \t\t<div class=\"card\" id=\"card-peli-{{ pelicula.id }}\">
\t
    \t\t\t<img src=\"{{ pelicula.image }}\" class=\"card-img-top\" alt=\"Imagen {{ pelicula.title }}\">
\t
    \t\t\t<div class=\"card-body\">
\t
    \t\t\t\t<section class=\"d-flex justify-content-between\">
                        <div>
                            <p class=\"text-white\" style=\"font-size: small;\">
                            Película
                            </p>
                        </div>
                        <div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t
    \t\t\t\t<h1 style=\"color: white; font-size: 1.75rem;\">{{ pelicula.title }}</h1>
\t
    \t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

                        <div class=\"puntuacion\">
    \t\t\t\t\t    <div class=\"porcentaje\">
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                {{ pelicula.vote_average|number_format|round }}%</p>
                            
                            </div>
                        </div>
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
\t\t\t\t\t\t\t\t\t\t<h4>{{ pelicula.title }}</h4>
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
        \t\t<div class=\"info-contenido m-5 row\">
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


    <div style=\"
        height: 75px;
    \">
    </div>

    <div class=\"movie-container\">
    <p class=\"titulo-seccion\">Populares ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">
\t
    \t{% for pelicula in popular_peliculas %}
\t
    \t\t<div class=\"card\" id=\"card-peli-{{ pelicula.id }}\">
\t
    \t\t\t<img src=\"{{ pelicula.image }}\" class=\"card-img-top\" alt=\"Imagen {{ pelicula.title }}\">
\t
    \t\t\t<div class=\"card-body\">
\t
    \t\t\t\t<section class=\"d-flex justify-content-between\">
                        <div>
                            <p class=\"text-white\" style=\"font-size: small;\">
                            Película
                            </p>
                        </div>
                        <div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t
    \t\t\t\t<h1 style=\"color: white; font-size: 1.75rem;\">{{ pelicula.title }}</h1>
\t
    \t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

                        <div class=\"puntuacion\">
    \t\t\t\t\t    <div class=\"porcentaje\">
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                {{ pelicula.vote_average|number_format|round }}%</p>
                            
                            </div>
                        </div>
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
\t\t\t\t\t\t\t\t\t\t<h4>{{ pelicula.title }}</h4>
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
        \t\t<div class=\"info-contenido m-5 row\">
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

\t{% include \"_footer.html.twig\" %}

{% endblock %}
", "peliculas/index.html.twig", "/home/utxra/projects/netflix/templates/peliculas/index.html.twig");
    }
}
