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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_92c1d53d5b0e92475cbfd06d309ff2ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        yield "<html>
\t<head>
\t\t<style type=\"text/css\">
\t\t\t#outlook a {
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.ExternalClass {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.ExternalClass,
\t\t\t.ExternalClass p,
\t\t\t.ExternalClass span,
\t\t\t.ExternalClass font,
\t\t\t.ExternalClass td,
\t\t\t.ExternalClass div {
\t\t\t\tline-height: 100%;
\t\t\t}
\t\t\t.es-button {
\t\t\t\tmso-style-priority: 100 !important;
\t\t\t\ttext-decoration: none !important;
\t\t\t}
\t\t\ta[x-apple-data-detectors] {
\t\t\t\tcolor: inherit !important;
\t\t\t\ttext-decoration: none !important;
\t\t\t\tfont-size: inherit !important;
\t\t\t\tfont-family: inherit !important;
\t\t\t\tfont-weight: inherit !important;
\t\t\t\tline-height: inherit !important;
\t\t\t}
\t\t\t.es-desk-hidden {
\t\t\t\tdisplay: none;
\t\t\t\tfloat: left;
\t\t\t\toverflow: hidden;
\t\t\t\twidth: 0;
\t\t\t\tmax-height: 0;
\t\t\t\tline-height: 0;
\t\t\t\tmso-hide: all;
\t\t\t}
\t\t\t@media only screen and (max-width: 600px) {
\t\t\t\tp,
\t\t\t\tul li,
\t\t\t\tol li,
\t\t\t\ta {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t\tline-height: 150% !important;
\t\t\t\t}
\t\t\t\th1 {
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tline-height: 120% !important;
\t\t\t\t}
\t\t\t\th2 {
\t\t\t\t\tfont-size: 26px !important;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tline-height: 120% !important;
\t\t\t\t}
\t\t\t\th3 {
\t\t\t\t\tfont-size: 20px !important;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tline-height: 120% !important;
\t\t\t\t}
\t\t\t\th1 a {
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t}
\t\t\t\th2 a {
\t\t\t\t\tfont-size: 26px !important;
\t\t\t\t}
\t\t\t\th3 a {
\t\t\t\t\tfont-size: 20px !important;
\t\t\t\t}
\t\t\t\t.es-menu td a {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t}
\t\t\t\t.es-header-body p,
\t\t\t\t.es-header-body ul li,
\t\t\t\t.es-header-body ol li,
\t\t\t\t.es-header-body a {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t}
\t\t\t\t.es-footer-body p,
\t\t\t\t.es-footer-body ul li,
\t\t\t\t.es-footer-body ol li,
\t\t\t\t.es-footer-body a {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t}
\t\t\t\t.es-infoblock p,
\t\t\t\t.es-infoblock ul li,
\t\t\t\t.es-infoblock ol li,
\t\t\t\t.es-infoblock a {
\t\t\t\t\tfont-size: 12px !important;
\t\t\t\t}
\t\t\t\t*[class=\"gmail-fix\"] {
\t\t\t\t\tdisplay: none !important;
\t\t\t\t}
\t\t\t\t.es-m-txt-c,
\t\t\t\t.es-m-txt-c h1,
\t\t\t\t.es-m-txt-c h2,
\t\t\t\t.es-m-txt-c h3 {
\t\t\t\t\ttext-align: center !important;
\t\t\t\t}
\t\t\t\t.es-m-txt-r,
\t\t\t\t.es-m-txt-r h1,
\t\t\t\t.es-m-txt-r h2,
\t\t\t\t.es-m-txt-r h3 {
\t\t\t\t\ttext-align: right !important;
\t\t\t\t}
\t\t\t\t.es-m-txt-l,
\t\t\t\t.es-m-txt-l h1,
\t\t\t\t.es-m-txt-l h2,
\t\t\t\t.es-m-txt-l h3 {
\t\t\t\t\ttext-align: left !important;
\t\t\t\t}
\t\t\t\t.es-m-txt-r img,
\t\t\t\t.es-m-txt-c img,
\t\t\t\t.es-m-txt-l img {
\t\t\t\t\tdisplay: inline !important;
\t\t\t\t}
\t\t\t\t.es-button-border {
\t\t\t\t\tdisplay: block !important;
\t\t\t\t}
\t\t\t\t.es-btn-fw {
\t\t\t\t\tborder-width: 10px 0px !important;
\t\t\t\t\ttext-align: center !important;
\t\t\t\t}
\t\t\t\t.es-adaptive table,
\t\t\t\t.es-btn-fw,
\t\t\t\t.es-btn-fw-brdr,
\t\t\t\t.es-left,
\t\t\t\t.es-right {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t\t.es-content table,
\t\t\t\t.es-header table,
\t\t\t\t.es-footer table,
\t\t\t\t.es-content,
\t\t\t\t.es-footer,
\t\t\t\t.es-header {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t\tmax-width: 600px !important;
\t\t\t\t}
\t\t\t\t.es-adapt-td {
\t\t\t\t\tdisplay: block !important;
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t\t.adapt-img {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t\theight: auto !important;
\t\t\t\t}
\t\t\t\t.es-m-p0 {
\t\t\t\t\tpadding: 0px !important;
\t\t\t\t}
\t\t\t\t.es-m-p0r {
\t\t\t\t\tpadding-right: 0px !important;
\t\t\t\t}
\t\t\t\t.es-m-p0l {
\t\t\t\t\tpadding-left: 0px !important;
\t\t\t\t}
\t\t\t\t.es-m-p0t {
\t\t\t\t\tpadding-top: 0px !important;
\t\t\t\t}
\t\t\t\t.es-m-p0b {
\t\t\t\t\tpadding-bottom: 0 !important;
\t\t\t\t}
\t\t\t\t.es-m-p20b {
\t\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\t}
\t\t\t\t.es-mobile-hidden,
\t\t\t\t.es-hidden {
\t\t\t\t\tdisplay: none !important;
\t\t\t\t}
\t\t\t\ttr.es-desk-hidden,
\t\t\t\ttd.es-desk-hidden,
\t\t\t\ttable.es-desk-hidden {
\t\t\t\t\twidth: auto !important;
\t\t\t\t\toverflow: visible !important;
\t\t\t\t\tfloat: none !important;
\t\t\t\t\tmax-height: inherit !important;
\t\t\t\t\tline-height: inherit !important;
\t\t\t\t}
\t\t\t\ttr.es-desk-hidden {
\t\t\t\t\tdisplay: table-row !important;
\t\t\t\t}
\t\t\t\ttable.es-desk-hidden {
\t\t\t\t\tdisplay: table !important;
\t\t\t\t}
\t\t\t\ttd.es-desk-menu-hidden {
\t\t\t\t\tdisplay: table-cell !important;
\t\t\t\t}
\t\t\t\t.es-menu td {
\t\t\t\t\twidth: 1% !important;
\t\t\t\t}
\t\t\t\ttable.es-table-not-adapt,
\t\t\t\t.esd-block-html table {
\t\t\t\t\twidth: auto !important;
\t\t\t\t}
\t\t\t\ttable.es-social {
\t\t\t\t\tdisplay: inline-block !important;
\t\t\t\t}
\t\t\t\ttable.es-social td {
\t\t\t\t\tdisplay: inline-block !important;
\t\t\t\t}
\t\t\t\ta.es-button,
\t\t\t\tbutton.es-button {
\t\t\t\t\tfont-size: 20px !important;
\t\t\t\t\tdisplay: block !important;
\t\t\t\t\tborder-width: 10px 0px 10px 0px !important;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"es-wrapper-color\" style=\"background-color: #f6f6f6\">
\t\t\t<!--[if gte mso 9]>
\t\t\t\t<v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
\t\t\t\t\t<v:fill type=\"tile\" color=\"#f6f6f6\"></v:fill>
\t\t\t\t</v:background>
\t\t\t<![endif]-->
\t\t\t<table
\t\t\t\tcellpadding=\"0\"
\t\t\t\tcellspacing=\"0\"
\t\t\t\tclass=\"es-wrapper\"
\t\t\t\tstyle=\"
\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\tpadding: 0;
\t\t\t\t\tmargin: 0;
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tbackground-repeat: repeat;
\t\t\t\t\tbackground-position: center top;
\t\t\t\t\"
\t\t\t\twidth=\"100%\"
\t\t\t>
\t\t\t\t<tbody>
\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t<td style=\"padding: 0; margin: 0\" valign=\"top\">
\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-m-p0r\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://d1yynrqd2fp86j.cloudfront.net/EmailTemplates/Common/images/netflix-logo.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\toutline: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-interpolation-mode: bicubic;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 37.5px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 60px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
                                                                                                    Confirma tu correo electrónico
                                                                                                </strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]><table style=\"width:560px\" cellpadding=\"0\" 
                        cellspacing=\"0\"><tr><td style=\"width:270px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-m-p20b\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 270px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 30px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHola ";
        // line 497
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 497, $this->source); })()), "html", null, true);
        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:270px\" valign=\"top\"><![endif]-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfloat: right;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 270px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 21px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #333333;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 30px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tConfirma tu dirección de correo eléctronico haciendo clic en el siguiente botón:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button-border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-style: solid;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-color: #2cb543;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground: #e50914;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-width: 0px 0px 2px 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-bottom-width: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
        // line 799
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_verify_email", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 799, $this->source); })())]), "html", null, true);
        yield "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-style-priority: 100 !important;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-style: solid;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-color: #e50914;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-width: 10px 20px 10px
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground: #e50914;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-weight: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-style: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 22px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Confirma tu correo</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t></span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 27px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNecesitas verificar tu correo electrónico para poder disfrutar de Netflix. Si no confirmas tu dirección de correo electrónico, no podrás acceder a tu cuenta.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 27px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #333333;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t– Tus amigos de Netflix
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 21px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #333333;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#221F1F\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 21px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t¿Alguna pregunta? Visita el centro de ayuda&nbsp;<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Help Centre</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>‪<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNetflix Productions
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br /><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Communication<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>&nbsp;|&nbsp;<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Terms of Use</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>&nbsp;|&nbsp;<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Privacy</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>&nbsp;|&nbsp;<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Help Centre</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEste mensaje ha sido enviado a ";
        // line 1387
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 1387, $this->source); })()), "html", null, true);
        yield " por
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNetflix.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<style>
\t\t\ta {
\t\t\t\tcursor: pointer;
\t\t\t}
\t\t</style>
\t</body>
</html>
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
        return "registration/confirmation_email.html.twig";
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
        return array (  1438 => 1387,  847 => 799,  542 => 497,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<style type=\"text/css\">
\t\t\t#outlook a {
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.ExternalClass {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.ExternalClass,
\t\t\t.ExternalClass p,
\t\t\t.ExternalClass span,
\t\t\t.ExternalClass font,
\t\t\t.ExternalClass td,
\t\t\t.ExternalClass div {
\t\t\t\tline-height: 100%;
\t\t\t}
\t\t\t.es-button {
\t\t\t\tmso-style-priority: 100 !important;
\t\t\t\ttext-decoration: none !important;
\t\t\t}
\t\t\ta[x-apple-data-detectors] {
\t\t\t\tcolor: inherit !important;
\t\t\t\ttext-decoration: none !important;
\t\t\t\tfont-size: inherit !important;
\t\t\t\tfont-family: inherit !important;
\t\t\t\tfont-weight: inherit !important;
\t\t\t\tline-height: inherit !important;
\t\t\t}
\t\t\t.es-desk-hidden {
\t\t\t\tdisplay: none;
\t\t\t\tfloat: left;
\t\t\t\toverflow: hidden;
\t\t\t\twidth: 0;
\t\t\t\tmax-height: 0;
\t\t\t\tline-height: 0;
\t\t\t\tmso-hide: all;
\t\t\t}
\t\t\t@media only screen and (max-width: 600px) {
\t\t\t\tp,
\t\t\t\tul li,
\t\t\t\tol li,
\t\t\t\ta {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t\tline-height: 150% !important;
\t\t\t\t}
\t\t\t\th1 {
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tline-height: 120% !important;
\t\t\t\t}
\t\t\t\th2 {
\t\t\t\t\tfont-size: 26px !important;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tline-height: 120% !important;
\t\t\t\t}
\t\t\t\th3 {
\t\t\t\t\tfont-size: 20px !important;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tline-height: 120% !important;
\t\t\t\t}
\t\t\t\th1 a {
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t}
\t\t\t\th2 a {
\t\t\t\t\tfont-size: 26px !important;
\t\t\t\t}
\t\t\t\th3 a {
\t\t\t\t\tfont-size: 20px !important;
\t\t\t\t}
\t\t\t\t.es-menu td a {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t}
\t\t\t\t.es-header-body p,
\t\t\t\t.es-header-body ul li,
\t\t\t\t.es-header-body ol li,
\t\t\t\t.es-header-body a {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t}
\t\t\t\t.es-footer-body p,
\t\t\t\t.es-footer-body ul li,
\t\t\t\t.es-footer-body ol li,
\t\t\t\t.es-footer-body a {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t}
\t\t\t\t.es-infoblock p,
\t\t\t\t.es-infoblock ul li,
\t\t\t\t.es-infoblock ol li,
\t\t\t\t.es-infoblock a {
\t\t\t\t\tfont-size: 12px !important;
\t\t\t\t}
\t\t\t\t*[class=\"gmail-fix\"] {
\t\t\t\t\tdisplay: none !important;
\t\t\t\t}
\t\t\t\t.es-m-txt-c,
\t\t\t\t.es-m-txt-c h1,
\t\t\t\t.es-m-txt-c h2,
\t\t\t\t.es-m-txt-c h3 {
\t\t\t\t\ttext-align: center !important;
\t\t\t\t}
\t\t\t\t.es-m-txt-r,
\t\t\t\t.es-m-txt-r h1,
\t\t\t\t.es-m-txt-r h2,
\t\t\t\t.es-m-txt-r h3 {
\t\t\t\t\ttext-align: right !important;
\t\t\t\t}
\t\t\t\t.es-m-txt-l,
\t\t\t\t.es-m-txt-l h1,
\t\t\t\t.es-m-txt-l h2,
\t\t\t\t.es-m-txt-l h3 {
\t\t\t\t\ttext-align: left !important;
\t\t\t\t}
\t\t\t\t.es-m-txt-r img,
\t\t\t\t.es-m-txt-c img,
\t\t\t\t.es-m-txt-l img {
\t\t\t\t\tdisplay: inline !important;
\t\t\t\t}
\t\t\t\t.es-button-border {
\t\t\t\t\tdisplay: block !important;
\t\t\t\t}
\t\t\t\t.es-btn-fw {
\t\t\t\t\tborder-width: 10px 0px !important;
\t\t\t\t\ttext-align: center !important;
\t\t\t\t}
\t\t\t\t.es-adaptive table,
\t\t\t\t.es-btn-fw,
\t\t\t\t.es-btn-fw-brdr,
\t\t\t\t.es-left,
\t\t\t\t.es-right {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t\t.es-content table,
\t\t\t\t.es-header table,
\t\t\t\t.es-footer table,
\t\t\t\t.es-content,
\t\t\t\t.es-footer,
\t\t\t\t.es-header {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t\tmax-width: 600px !important;
\t\t\t\t}
\t\t\t\t.es-adapt-td {
\t\t\t\t\tdisplay: block !important;
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t\t.adapt-img {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t\theight: auto !important;
\t\t\t\t}
\t\t\t\t.es-m-p0 {
\t\t\t\t\tpadding: 0px !important;
\t\t\t\t}
\t\t\t\t.es-m-p0r {
\t\t\t\t\tpadding-right: 0px !important;
\t\t\t\t}
\t\t\t\t.es-m-p0l {
\t\t\t\t\tpadding-left: 0px !important;
\t\t\t\t}
\t\t\t\t.es-m-p0t {
\t\t\t\t\tpadding-top: 0px !important;
\t\t\t\t}
\t\t\t\t.es-m-p0b {
\t\t\t\t\tpadding-bottom: 0 !important;
\t\t\t\t}
\t\t\t\t.es-m-p20b {
\t\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\t}
\t\t\t\t.es-mobile-hidden,
\t\t\t\t.es-hidden {
\t\t\t\t\tdisplay: none !important;
\t\t\t\t}
\t\t\t\ttr.es-desk-hidden,
\t\t\t\ttd.es-desk-hidden,
\t\t\t\ttable.es-desk-hidden {
\t\t\t\t\twidth: auto !important;
\t\t\t\t\toverflow: visible !important;
\t\t\t\t\tfloat: none !important;
\t\t\t\t\tmax-height: inherit !important;
\t\t\t\t\tline-height: inherit !important;
\t\t\t\t}
\t\t\t\ttr.es-desk-hidden {
\t\t\t\t\tdisplay: table-row !important;
\t\t\t\t}
\t\t\t\ttable.es-desk-hidden {
\t\t\t\t\tdisplay: table !important;
\t\t\t\t}
\t\t\t\ttd.es-desk-menu-hidden {
\t\t\t\t\tdisplay: table-cell !important;
\t\t\t\t}
\t\t\t\t.es-menu td {
\t\t\t\t\twidth: 1% !important;
\t\t\t\t}
\t\t\t\ttable.es-table-not-adapt,
\t\t\t\t.esd-block-html table {
\t\t\t\t\twidth: auto !important;
\t\t\t\t}
\t\t\t\ttable.es-social {
\t\t\t\t\tdisplay: inline-block !important;
\t\t\t\t}
\t\t\t\ttable.es-social td {
\t\t\t\t\tdisplay: inline-block !important;
\t\t\t\t}
\t\t\t\ta.es-button,
\t\t\t\tbutton.es-button {
\t\t\t\t\tfont-size: 20px !important;
\t\t\t\t\tdisplay: block !important;
\t\t\t\t\tborder-width: 10px 0px 10px 0px !important;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"es-wrapper-color\" style=\"background-color: #f6f6f6\">
\t\t\t<!--[if gte mso 9]>
\t\t\t\t<v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
\t\t\t\t\t<v:fill type=\"tile\" color=\"#f6f6f6\"></v:fill>
\t\t\t\t</v:background>
\t\t\t<![endif]-->
\t\t\t<table
\t\t\t\tcellpadding=\"0\"
\t\t\t\tcellspacing=\"0\"
\t\t\t\tclass=\"es-wrapper\"
\t\t\t\tstyle=\"
\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\tpadding: 0;
\t\t\t\t\tmargin: 0;
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tbackground-repeat: repeat;
\t\t\t\t\tbackground-position: center top;
\t\t\t\t\"
\t\t\t\twidth=\"100%\"
\t\t\t>
\t\t\t\t<tbody>
\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t<td style=\"padding: 0; margin: 0\" valign=\"top\">
\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-m-p0r\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://d1yynrqd2fp86j.cloudfront.net/EmailTemplates/Common/images/netflix-logo.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\toutline: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-interpolation-mode: bicubic;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 37.5px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 60px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>
                                                                                                    Confirma tu correo electrónico
                                                                                                </strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]><table style=\"width:560px\" cellpadding=\"0\" 
                        cellspacing=\"0\"><tr><td style=\"width:270px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-m-p20b\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 270px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 30px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHola {{ user }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:270px\" valign=\"top\"><![endif]-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfloat: right;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 270px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 21px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #333333;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 30px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tConfirma tu dirección de correo eléctronico haciendo clic en el siguiente botón:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button-border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-style: solid;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-color: #2cb543;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground: #e50914;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-width: 0px 0px 2px 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-bottom-width: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"{{ url('app_verify_email', { token: token }) }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-style-priority: 100 !important;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-style: solid;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-color: #e50914;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-width: 10px 20px 10px
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground: #e50914;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-weight: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-style: normal;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 22px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Confirma tu correo</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t></span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 27px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNecesitas verificar tu correo electrónico para poder disfrutar de Netflix. Si no confirmas tu dirección de correo electrónico, no podrás acceder a tu cuenta.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 27px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #333333;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t– Tus amigos de Netflix
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 21px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #333333;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\tclass=\"es-content\"
\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\ttable-layout: fixed !important;
\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding: 0; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #ffffff;
\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 600px;
\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#221F1F\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-top: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-left: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color: #221f1f;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 560px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-lspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-table-rspace: 0pt;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder-spacing: 0px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse: collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding: 0; margin: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue', helvetica,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tline-height: 21px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t¿Alguna pregunta? Visita el centro de ayuda&nbsp;<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Help Centre</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>‪<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNetflix Productions
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br /><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Communication<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>&nbsp;|&nbsp;<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Terms of Use</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>&nbsp;|&nbsp;<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Privacy</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>&nbsp;|&nbsp;<a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"javascript:;window.parent.\$('#webModal').modal('show');\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-webkit-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-ms-text-size-adjust: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmso-line-height-rule: exactly;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-family: arial,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'helvetica neue',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thelvetica, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: #cccccc;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>Help Centre</a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEste mensaje ha sido enviado a {{ email }} por
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNetflix.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<style>
\t\t\ta {
\t\t\t\tcursor: pointer;
\t\t\t}
\t\t</style>
\t</body>
</html>
", "registration/confirmation_email.html.twig", "/home/utxra/projects/netflix/templates/registration/confirmation_email.html.twig");
    }
}
