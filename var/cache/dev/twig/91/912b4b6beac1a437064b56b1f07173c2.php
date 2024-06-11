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

/* _footer.html.twig */
class __TwigTemplate_484ed95991f7331503141f9c2502c1dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        yield "<div class=\"container footer\">
        <div class=\"row\">
            <div class=\"col-md-10 mx-auto\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <ul>
                            <li>Audio and Subtitle</li>
                            <li>Media Center</li>
                            <li>Privacy</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class=\"col-md-3\">
                        <ul>
                            <li>Audio description</li>
                            <li>Investor Relation</li>
                            <li>Terms and Conditions</li>
                            <li>Legal Notices</li>
                        </ul>
                    </div>
                    <div class=\"col-md-3\">
                        <ul>
                            <li>Help Center</li>
                            <li>Jobs</li>

                        </ul>
                    </div>
                    <div class=\"col-md-3\">
                        <ul>
                            <li>Gift card</li>
                            <li>Subscription</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"row\">

                    <div class=\"col\">
                        <p class=\"copy-right\">@netflix copyright</p>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container footer\">
        <div class=\"row\">
            <div class=\"col-md-10 mx-auto\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <ul>
                            <li>Audio and Subtitle</li>
                            <li>Media Center</li>
                            <li>Privacy</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class=\"col-md-3\">
                        <ul>
                            <li>Audio description</li>
                            <li>Investor Relation</li>
                            <li>Terms and Conditions</li>
                            <li>Legal Notices</li>
                        </ul>
                    </div>
                    <div class=\"col-md-3\">
                        <ul>
                            <li>Help Center</li>
                            <li>Jobs</li>

                        </ul>
                    </div>
                    <div class=\"col-md-3\">
                        <ul>
                            <li>Gift card</li>
                            <li>Subscription</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"row\">

                    <div class=\"col\">
                        <p class=\"copy-right\">@netflix copyright</p>
                    </div>
                </div>
            </div>
        </div>
    </div>", "_footer.html.twig", "/home/utxra/projects/netflix/templates/_footer.html.twig");
    }
}
