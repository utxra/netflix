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

/* series/index.html.twig */
class __TwigTemplate_844bea7cd0b2c4509d4568a60280c05f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "series/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "series/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "series/index.html.twig", 1);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["banner_serie"]) || array_key_exists("banner_serie", $context) ? $context["banner_serie"] : (function () { throw new RuntimeError('Variable "banner_serie" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        yield "')\">
            <div class=\"banner-content\">
                <div>
                    <img src=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["banner_serie"]) || array_key_exists("banner_serie", $context) ? $context["banner_serie"] : (function () { throw new RuntimeError('Variable "banner_serie" does not exist.', 18, $this->source); })()), "logo", [], "any", false, false, false, 18), "html", null, true);
        yield "\" alt=\"Logo ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["banner_serie"]) || array_key_exists("banner_serie", $context) ? $context["banner_serie"] : (function () { throw new RuntimeError('Variable "banner_serie" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        yield "\" class=\"banner-image\" style=\"width: 100%;\">
                </div>
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<a href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_movies", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["banner_serie"]) || array_key_exists("banner_serie", $context) ? $context["banner_serie"] : (function () { throw new RuntimeError('Variable "banner_serie" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
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
    <p class=\"titulo-seccion\">Series mejor valoradas ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">

\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_rated_series"]) || array_key_exists("top_rated_series", $context) ? $context["top_rated_series"] : (function () { throw new RuntimeError('Variable "top_rated_series" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 37
            yield "
\t\t\t<div class=\"card\" id=\"card-serie-";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\">

\t\t\t\t<img src=\"";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "image", [], "any", false, false, false, 40), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Imagen";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 40), "html", null, true);
            yield "\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<section class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t\t<h2 style=\"color: white; font-size: 1.75rem;\">";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 59), "html", null, true);
            yield "</h2>

                    <p style=\"font-size: 0.75rem;color:#fff;margin:0;\">Series</p>

\t\t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

\t\t\t\t\t\t <div class=\"puntuacion\">
    \t\t\t\t\t    
                            <div class=\"porcentaje\">
                            
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                ";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::round(Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "vote_average", [], "any", false, false, false, 70))), "html", null, true);
            yield "%</p>
                            
                            </div>
                        
                        </div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">";
            // line 76
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "genres", [], "any", false, false, false, 76), " - "), "html", null, true);
            yield "</span>

\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>

\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t";
            // line 87
            yield "\t\t\t<dialog id=\"info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 87), "html", null, true);
            yield "\" class=\"info\">

\t\t\t\t<div>

\t\t\t\t\t<section class=\"netflix-home-video\">

\t\t\t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-series-";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 93), "html", null, true);
            yield "\"></button>

\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "image", [], "any", false, false, false, 95), "html", null, true);
            yield "');\">
\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "logo", [], "any", false, false, false, 97)) {
                // line 98
                yield "\t\t\t\t\t\t\t\t<img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "logo", [], "any", false, false, false, 98), "html", null, true);
                yield "\" alt=\"Logo ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 98), "html", null, true);
                yield "\" class=\"info-logo\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 100
                yield "\t\t\t\t\t\t\t\t<h4>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 100), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t";
            }
            // line 102
            yield "\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 103
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_series", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 103)]), "html", null, true);
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
            // line 129
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "release_date", [], "any", false, false, false, 129), "html", null, true);
            yield "</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div>

\t\t\t\t\t\t<p style=\"text-align: justify;\">";
            // line 135
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "description", [], "any", false, false, false, 135), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "cast", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 140
                yield "\t\t\t\t\t\t\t\t";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 140), "html", null, true);
                yield "
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t";
                // line 142
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "character", [], "any", false, false, false, 142), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "\t\t\t\t\t\t\t, etc.
                        </p>

\t\t\t\t\t</div>

                    <div>
                    
                        <p>
                            <b>Temporadas:
                            </b>
                            ";
            // line 154
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "seasons", [], "any", false, false, false, 154)), "html", null, true);
            yield "
                        </p>
\t\t\t\t\t\t<p> 
\t\t\t\t\t\t\t<b>Episodios:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 159
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "number_of_episodes", [], "any", false, false, false, 159), "html", null, true);
            yield "
\t\t\t\t\t\t</p>

                    </div>

                </div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_serie_";
            // line 170
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 170), "html", null, true);
            yield " = document.querySelector(\"#card-serie-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 170), "html", null, true);
            yield "\");
                const btnCerrarInfo_series_";
            // line 171
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 171), "html", null, true);
            yield " = document.querySelector(\"#btn-cerrar-info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 171), "html", null, true);
            yield "\");
                const info_series_";
            // line 172
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 172), "html", null, true);
            yield " = document.querySelector(\"#info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 172), "html", null, true);
            yield "\");

                card_serie_";
            // line 174
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 174), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_series_";
            // line 175
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 175), "html", null, true);
            yield ".showModal();
                })

                btnCerrarInfo_series_";
            // line 178
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 178), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_series_";
            // line 179
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 179), "html", null, true);
            yield ".close();
                console.log(\"cerrar\");
                })

            </script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "
\t</div>
    </div>

    <div style=\"
        height: 75px;
    \">
    </div>

    <div class=\"movie-container\">
    <p class=\"titulo-seccion\">Series en emisión ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">

\t\t";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["on_the_air_series"]) || array_key_exists("on_the_air_series", $context) ? $context["on_the_air_series"] : (function () { throw new RuntimeError('Variable "on_the_air_series" does not exist.', 199, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 200
            yield "
\t\t\t<div class=\"card\" id=\"card-serie-";
            // line 201
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 201), "html", null, true);
            yield "\">

\t\t\t\t<img src=\"";
            // line 203
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "image", [], "any", false, false, false, 203), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Imagen";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 203), "html", null, true);
            yield "\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<section class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t\t<h2 style=\"color: white; font-size: 1.75rem;\">";
            // line 222
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 222), "html", null, true);
            yield "</h2>

                    <p style=\"font-size: 0.75rem;color:#fff;margin:0;\">Series</p>

\t\t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

\t\t\t\t\t\t <div class=\"puntuacion\">
    \t\t\t\t\t    
                            <div class=\"porcentaje\">
                            
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                ";
            // line 233
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::round(Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "vote_average", [], "any", false, false, false, 233))), "html", null, true);
            yield "%</p>
                            
                            </div>
                        
                        </div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">";
            // line 239
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "genres", [], "any", false, false, false, 239), " - "), "html", null, true);
            yield "</span>

\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>

\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t";
            // line 250
            yield "\t\t\t<dialog id=\"info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 250), "html", null, true);
            yield "\" class=\"info\">

\t\t\t\t<div>

\t\t\t\t\t<section class=\"netflix-home-video\">

\t\t\t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-series-";
            // line 256
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 256), "html", null, true);
            yield "\"></button>

\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
            // line 258
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "image", [], "any", false, false, false, 258), "html", null, true);
            yield "');\">
\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t";
            // line 260
            if (CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "logo", [], "any", false, false, false, 260)) {
                // line 261
                yield "\t\t\t\t\t\t\t\t<img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "logo", [], "any", false, false, false, 261), "html", null, true);
                yield "\" alt=\"Logo ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 261), "html", null, true);
                yield "\" class=\"info-logo\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 263
                yield "\t\t\t\t\t\t\t\t<h4>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 263), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t";
            }
            // line 265
            yield "\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 266
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_series", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 266)]), "html", null, true);
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
            // line 292
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "release_date", [], "any", false, false, false, 292), "html", null, true);
            yield "</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div>

\t\t\t\t\t\t<p style=\"text-align: justify;\">";
            // line 298
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "description", [], "any", false, false, false, 298), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "cast", [], "any", false, false, false, 302));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 303
                yield "\t\t\t\t\t\t\t\t";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 303), "html", null, true);
                yield "
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t";
                // line 305
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "character", [], "any", false, false, false, 305), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            yield "\t\t\t\t\t\t\t, etc.
                        </p>

\t\t\t\t\t</div>

                    <div>
                    
                        <p>
                            <b>Temporadas:
                            </b>
                            ";
            // line 317
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "seasons", [], "any", false, false, false, 317)), "html", null, true);
            yield "
                        </p>
\t\t\t\t\t\t<p> 
\t\t\t\t\t\t\t<b>Episodios:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 322
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "number_of_episodes", [], "any", false, false, false, 322), "html", null, true);
            yield "
\t\t\t\t\t\t</p>

                    </div>

                </div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_serie_";
            // line 333
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 333), "html", null, true);
            yield " = document.querySelector(\"#card-serie-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 333), "html", null, true);
            yield "\");
                const btnCerrarInfo_series_";
            // line 334
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 334), "html", null, true);
            yield " = document.querySelector(\"#btn-cerrar-info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 334), "html", null, true);
            yield "\");
                const info_series_";
            // line 335
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 335), "html", null, true);
            yield " = document.querySelector(\"#info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 335), "html", null, true);
            yield "\");

                card_serie_";
            // line 337
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 337), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_series_";
            // line 338
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 338), "html", null, true);
            yield ".showModal();
                })

                btnCerrarInfo_series_";
            // line 341
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 341), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_series_";
            // line 342
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 342), "html", null, true);
            yield ".close();
                console.log(\"cerrar\");
                })

            </script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        yield "
\t</div>
    </div>

    <div style=\"
        height: 75px;
    \">
    </div>

    <div class=\"movie-container\">
    <p class=\"titulo-seccion\">Series más populares ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">

\t\t";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popular_series"]) || array_key_exists("popular_series", $context) ? $context["popular_series"] : (function () { throw new RuntimeError('Variable "popular_series" does not exist.', 362, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 363
            yield "
\t\t\t<div class=\"card\" id=\"card-serie-";
            // line 364
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 364), "html", null, true);
            yield "\">

\t\t\t\t<img src=\"";
            // line 366
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "image", [], "any", false, false, false, 366), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Imagen";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 366), "html", null, true);
            yield "\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<section class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t\t<h2 style=\"color: white; font-size: 1.75rem;\">";
            // line 385
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 385), "html", null, true);
            yield "</h2>

                    <p style=\"font-size: 0.75rem;color:#fff;margin:0;\">Series</p>

\t\t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

\t\t\t\t\t\t <div class=\"puntuacion\">
    \t\t\t\t\t    
                            <div class=\"porcentaje\">
                            
                                <p class=\"netflix-card-text m-0\" style=\"color: rgb(0, 186, 0);\">
                                ";
            // line 396
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::round(Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "vote_average", [], "any", false, false, false, 396))), "html", null, true);
            yield "%</p>
                            
                            </div>
                        
                        </div>
\t\t\t\t\t\t
                        <span class=\"m-2 netflix-card-text text-white\">";
            // line 402
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "genres", [], "any", false, false, false, 402), " - "), "html", null, true);
            yield "</span>

\t\t\t\t\t\t<span class=\"border netflix-card-text p-1 text-white\">HD</span>

\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t";
            // line 413
            yield "\t\t\t<dialog id=\"info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 413), "html", null, true);
            yield "\" class=\"info\">

\t\t\t\t<div>

\t\t\t\t\t<section class=\"netflix-home-video\">

\t\t\t\t\t\t<button class=\"btn-close btn-close-white btn-cerrar-info\" id=\"btn-cerrar-info-series-";
            // line 419
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 419), "html", null, true);
            yield "\"></button>

\t\t\t\t\t\t<div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('";
            // line 421
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "image", [], "any", false, false, false, 421), "html", null, true);
            yield "');\">
\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t";
            // line 423
            if (CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "logo", [], "any", false, false, false, 423)) {
                // line 424
                yield "\t\t\t\t\t\t\t\t<img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "logo", [], "any", false, false, false, 424), "html", null, true);
                yield "\" alt=\"Logo ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 424), "html", null, true);
                yield "\" class=\"info-logo\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 426
                yield "\t\t\t\t\t\t\t\t<h4>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "title", [], "any", false, false, false, 426), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t";
            }
            // line 428
            yield "\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 429
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_series", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 429)]), "html", null, true);
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
            // line 455
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "release_date", [], "any", false, false, false, 455), "html", null, true);
            yield "</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div>

\t\t\t\t\t\t<p style=\"text-align: justify;\">";
            // line 461
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "description", [], "any", false, false, false, 461), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Reparto:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 465
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "cast", [], "any", false, false, false, 465));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 466
                yield "\t\t\t\t\t\t\t\t";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 466), "html", null, true);
                yield "
\t\t\t\t\t\t\t\tas
\t\t\t\t\t\t\t\t";
                // line 468
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "character", [], "any", false, false, false, 468), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            yield "\t\t\t\t\t\t\t, etc.
                        </p>

\t\t\t\t\t</div>

                    <div>
                    
                        <p>
                            <b>Temporadas:
                            </b>
                            ";
            // line 480
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "seasons", [], "any", false, false, false, 480)), "html", null, true);
            yield "
                        </p>
\t\t\t\t\t\t<p> 
\t\t\t\t\t\t\t<b>Episodios:
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 485
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "number_of_episodes", [], "any", false, false, false, 485), "html", null, true);
            yield "
\t\t\t\t\t\t</p>

                    </div>

                </div>

\t\t\t</dialog>

\t\t\t<script>

\t\t\t\tconst card_serie_";
            // line 496
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 496), "html", null, true);
            yield " = document.querySelector(\"#card-serie-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 496), "html", null, true);
            yield "\");
                const btnCerrarInfo_series_";
            // line 497
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 497), "html", null, true);
            yield " = document.querySelector(\"#btn-cerrar-info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 497), "html", null, true);
            yield "\");
                const info_series_";
            // line 498
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 498), "html", null, true);
            yield " = document.querySelector(\"#info-series-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 498), "html", null, true);
            yield "\");

                card_serie_";
            // line 500
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 500), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_series_";
            // line 501
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 501), "html", null, true);
            yield ".showModal();
                })

                btnCerrarInfo_series_";
            // line 504
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 504), "html", null, true);
            yield ".addEventListener(\"click\", () => {
                info_series_";
            // line 505
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 505), "html", null, true);
            yield ".close();
                console.log(\"cerrar\");
                })

            </script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        yield "
\t</div>

\t</div>

\t</div>
    </div>


\t";
        // line 520
        yield from         $this->loadTemplate("_footer.html.twig", "series/index.html.twig", 520)->unwrap()->yield($context);
        // line 521
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
        return "series/index.html.twig";
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
        return array (  964 => 521,  962 => 520,  951 => 511,  939 => 505,  935 => 504,  929 => 501,  925 => 500,  918 => 498,  912 => 497,  906 => 496,  892 => 485,  884 => 480,  872 => 470,  864 => 468,  858 => 466,  854 => 465,  847 => 461,  838 => 455,  809 => 429,  806 => 428,  800 => 426,  792 => 424,  790 => 423,  785 => 421,  780 => 419,  770 => 413,  757 => 402,  748 => 396,  734 => 385,  710 => 366,  705 => 364,  702 => 363,  698 => 362,  682 => 348,  670 => 342,  666 => 341,  660 => 338,  656 => 337,  649 => 335,  643 => 334,  637 => 333,  623 => 322,  615 => 317,  603 => 307,  595 => 305,  589 => 303,  585 => 302,  578 => 298,  569 => 292,  540 => 266,  537 => 265,  531 => 263,  523 => 261,  521 => 260,  516 => 258,  511 => 256,  501 => 250,  488 => 239,  479 => 233,  465 => 222,  441 => 203,  436 => 201,  433 => 200,  429 => 199,  413 => 185,  401 => 179,  397 => 178,  391 => 175,  387 => 174,  380 => 172,  374 => 171,  368 => 170,  354 => 159,  346 => 154,  334 => 144,  326 => 142,  320 => 140,  316 => 139,  309 => 135,  300 => 129,  271 => 103,  268 => 102,  262 => 100,  254 => 98,  252 => 97,  247 => 95,  242 => 93,  232 => 87,  219 => 76,  210 => 70,  196 => 59,  172 => 40,  167 => 38,  164 => 37,  160 => 36,  142 => 21,  134 => 18,  128 => 15,  125 => 14,  115 => 13,  101 => 9,  97 => 8,  92 => 7,  82 => 6,  61 => 3,  38 => 1,);
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
        <div class=\"banner\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.35) 10%, rgba(0, 0, 0, 0.35) 80%, rgb(18, 18, 18) 100%), url('{{ banner_serie.image }}')\">
            <div class=\"banner-content\">
                <div>
                    <img src=\"{{ banner_serie.logo }}\" alt=\"Logo {{ banner_serie.title }}\" class=\"banner-image\" style=\"width: 100%;\">
                </div>
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<a href=\"{{ path('app_player_movies', {'id': banner_serie.id}) }}\">
\t\t\t\t\t\t<button class=\"btn btn-light m-2 d-flex justify-content-center align-item-center\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-play\" style=\"color: black; padding: 0;\"></i> Reproducir
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
            </div>
        </div>
    </div>

\t<div class=\"movie-container\">
    <p class=\"titulo-seccion\">Series mejor valoradas ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">

\t\t{% for serie in top_rated_series %}

\t\t\t<div class=\"card\" id=\"card-serie-{{ serie.id }}\">

\t\t\t\t<img src=\"{{ serie.image }}\" class=\"card-img-top\" alt=\"Imagen{{ serie.title }}\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<section class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t\t<h2 style=\"color: white; font-size: 1.75rem;\">{{ serie.title }}</h2>

                    <p style=\"font-size: 0.75rem;color:#fff;margin:0;\">Series</p>

\t\t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

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
\t\t\t\t\t\t\t\t<h4>{{ serie.title }}</h4>
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
    </div>

    <div style=\"
        height: 75px;
    \">
    </div>

    <div class=\"movie-container\">
    <p class=\"titulo-seccion\">Series en emisión ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">

\t\t{% for serie in on_the_air_series %}

\t\t\t<div class=\"card\" id=\"card-serie-{{ serie.id }}\">

\t\t\t\t<img src=\"{{ serie.image }}\" class=\"card-img-top\" alt=\"Imagen{{ serie.title }}\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<section class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t\t<h2 style=\"color: white; font-size: 1.75rem;\">{{ serie.title }}</h2>

                    <p style=\"font-size: 0.75rem;color:#fff;margin:0;\">Series</p>

\t\t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

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
\t\t\t\t\t\t\t\t<h4>{{ serie.title }}</h4>
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
    </div>

    <div style=\"
        height: 75px;
    \">
    </div>

    <div class=\"movie-container\">
    <p class=\"titulo-seccion\">Series más populares ></p>

\t<div class=\"container-fluid d-flex flex-wrap justify-content-center px-xxl-5 px-xl-4 px-l-4\">

\t\t{% for serie in popular_series %}

\t\t\t<div class=\"card\" id=\"card-serie-{{ serie.id }}\">

\t\t\t\t<img src=\"{{ serie.image }}\" class=\"card-img-top\" alt=\"Imagen{{ serie.title }}\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<section class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t<a href=\"\" download>
\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-down-circle card-icon\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t\t<h2 style=\"color: white; font-size: 1.75rem;\">{{ serie.title }}</h2>

                    <p style=\"font-size: 0.75rem;color:#fff;margin:0;\">Series</p>

\t\t\t\t\t<section class=\"d-flex align-items-center justify-content-between\">

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
\t\t\t\t\t\t\t\t<h4>{{ serie.title }}</h4>
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

\t</div>

\t</div>
    </div>


\t{% include \"_footer.html.twig\" %}

{% endblock %}
", "series/index.html.twig", "/home/utxra/projects/netflix/templates/series/index.html.twig");
    }
}
