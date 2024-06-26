<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/solution.twig */
class __TwigTemplate_5f24eac28060920e41e7a5fbf1f2f1f6e403885425f9aac05bc07619c8d530b4 extends \Twig\Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "

<style>
\t.tabs {
\t\tmargin: 20px auto;
\t\twidth: 100%;
\t\tjustify-content: center;
\t}

\t.tab-buttons {
\t\tdisplay: flex;
\t\tborder-bottom: 2px solid #ccc;
\t}

\t.tab-button {
\t\tpadding: 20px;
\t\tcursor: pointer;
\t\tbackground: #fff;
\t\tborder: none;
\t\toutline: none;
\t\ttransition: background 0.3s;
\t}

\t.tab-button:hover {
\t\tbackground: #ddd;
\t}

\t.tab-button.active {
\t\tbackground: #c1ace8;
\t\tborder-bottom: 2px solid #692BD8;
\t\tcolor: #007BFF;
\t}

\t.tab-content {
\t\tborder: 1px solid #ccc;
\t\tborder-top: none;
\t\tpadding: 0 20px;
\t\tbackground: #fff;
\t}

\t.tab-pane {
\t\tdisplay: none;
\t}

\t.tab-pane.active {
\t\tdisplay: block;
\t}

\t.accordion {
\t\tmargin: 20px auto;
\t\toverflow: hidden;
\t}

\t.accordion-item {
\t\tbox-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 7px 11px 0 rgba(0, 0, 0, 0.19);
\t\tmargin-top: 30px;
\t\tpadding: 30px;
\t\tborder: 1px solid #ccc;
\t\tborder-radius: 10px;
\t}

\t.accordion-header {
\t\twidth: 100%;
\t\tpadding: 0 0 15px;
\t\tcursor: pointer;
\t\tbackground: #fff;
\t\tborder: none;
\t\toutline: none;
\t\ttext-align: left;
\t\tfont-size: 16px;
\t\ttransition: background 0.3s;
\t}

\t.accordion-header h3 {
\t\tletter-spacing: normal;
\t\ttext-transform: uppercase;
\t}


\t.accordion-header.active {
\t\tbackground: #fff;
\t\tcolor: black;
\t}

\t.accordion-item .fa-chevron-up {
\t\ttransform: rotate(1deg);
\t}

\t.accordion-header i {
\t\tpadding: 5px;
\t\tborder-radius: 50%;
\t\tbackground: darkgray;
\t\tcolor: #fff;
\t}

\t.accordion-content {
\t\tdisplay: none;
\t\tpadding: 0 15px 15px;
\t\tbackground: #fff;
\t}
\t@media(max-width: 768px) {

\t\t.cus_ff {
\t\t\tfont-size: 22px !important;
\t\t}
\t\t.cus_p {
\t\t\tmax-width: 90% !important;
\t\t}
\t}
</style>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
<div class=\"slider-area pb-3\">

\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12 desktop-banner\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 118
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 118);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 119);
            echo "\" alt class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"slider_banner col-12 mobile-banner\">
\t\t\t<div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 127
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 127);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 128);
            echo "\" alt class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<section class=\"container\">

\t<h1 class=\"cus_ff bold text-center\" style=\"font-size: 44px;color:#000;font-weight: 700;\">Services for
\t\t\t\t\t\t\t\t      Individuals
\t</h1>
\t<h5 class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">we offer
\t\t\t\t\t\t\t\t      a range
\t\t\t\t\t\t\t\t      of personal financial services designed to secure your and your family’s
\t\t\t\t\t\t\t\t      financial future:</h5>
\t<div class=\"mt-4\">
\t\t<div class=\"tabs row\">
\t\t\t<div class=\"tab-buttons col-md-2 row\">
\t\t\t\t<button class=\"col-12 tab-button active\" data-tab=\"tab1\">
\t\t\t\t\t<img src=\"image/wm.png\" alt=\"img\" width=\"30\">
\t\t\t\t\t<p class=\"mt-3\" style=\"color:#212124;\">Wealth Management</p>
\t\t\t\t</button>
\t\t\t\t<button class=\"col-12 tab-button\" data-tab=\"tab2\">
\t\t\t\t\t<img src=\"image/tp.png\" alt=\"img\" width=\"30\">
\t\t\t\t\t<p class=\"mt-3\" style=\"color:#212124;\">Retirement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  Planning</p>
\t\t\t\t</button>
\t\t\t\t<button class=\"col-12 tab-button\" data-tab=\"tab3\">
\t\t\t\t\t<img src=\"image/tp.png\" alt=\"img\" width=\"30\">
\t\t\t\t\t<p class=\"mt-3\" style=\"color:#212124;\">Tax Planning and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  Preparation</p>
\t\t\t\t</button>
\t\t\t\t<button class=\"col-12 tab-button\" data-tab=\"tab4\">
\t\t\t\t\t<img src=\"image/ep.png\" alt=\"img\" width=\"30\">
\t\t\t\t\t<p class=\"mt-3\" style=\"color:#212124;\">Estate Planning</p>
\t\t\t\t</button>
\t\t\t\t<button class=\"col-12 tab-button\" data-tab=\"tab5\">
\t\t\t\t\t<img src=\"image/ip.png\" alt=\"img\" width=\"30\">
\t\t\t\t\t<p class=\"mt-3\" style=\"color:#212124;\">
\t\t\t\t\t\tInsurance Planning</p>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"tab-content col-md-10\">
\t\t\t\t<div class=\"tab-pane active\" id=\"tab1\">
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<h3 class=\"mt-0\" style=\"color:#000;\">Wealth Management</h3>
\t\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Investment Management:
\t\t\t\t\t\t\t\t\t\t</span>Want your money to grow while you sleep? We recommend 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tinvestment strategies tailored to maximize your returns and align with your financial goals. 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCall us, and let's make your money work as hard as you do.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">
\t\t\t\t\t\t\t\t\t\t\tSavings Plans:
\t\t\t\t\t\t\t\t\t\t</span>Planning for the future? We help you create savings plans that fit your lifestyle 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tand ensure you’re prepared for whatever comes next.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Portfolio Management:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t: We make sure your investments are as diverse and resilient as you 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tare. Our expert team balances your portfolio to match your risk tolerance and future 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taspirations.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-md-0 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv1.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv2.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv3.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane \" id=\"tab2\">
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<h3 class=\"mt-0\" style=\"color:#000;\">Retirement Planning</h3>
\t\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Retirement Savings Plans:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tWant to retire without financial stress? We help you build a nest 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tegg that will let you enjoy your golden years.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">
\t\t\t\t\t\t\t\t\t\t\tPension Planning:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tNavigating pension options can be tricky.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              We guide you through the best choices to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              ensure a steady income stream in retirement.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Post-Retirement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Income
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Planning:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tStay financially secure even
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              after you stop working. We design plans
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              that keep the money flowing long after
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              retirement.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-md-0 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv1.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv2.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv3.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane \" id=\"tab3\">
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<h3 class=\"mt-0\" style=\"color:#000;\">Tax Planning and Preparation</h3>
\t\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Income Tax Planning:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tThink of us as your tax champions. We wrestle those baffling 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tregulations into submission so you can keep more of your hard-earned money.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">
\t\t\t\t\t\t\t\t\t\t\tTax Filing Assistance:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tTax time doesn’t have to be stressful. We handle the paperwork and 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfiling so you don’t have to.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Tax Advisory Services:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tStay compliant and optimize your tax savings with ongoing advice 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfrom our tax experts.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-md-0 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv1.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv2.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv3.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane \" id=\"tab4\">
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<h3 class=\"mt-0\" style=\"color:#000;\">
\t\t\t\t\t\t\t\tEstate Planning</h3>
\t\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Wills and Trusts:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tEnsure your legacy is protected. We help you set up wills and trusts that 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treflect your wishes and safeguard your assets.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">
\t\t\t\t\t\t\t\t\t\t\tAsset Protection:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tShield your wealth from creditors and legal challenges with our robust 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tasset protection strategies.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Succession Planning:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tPlan for the future of your estate. Our succession planning ensures a 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsmooth transfer of your assets to the next generation.

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-md-0 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv1.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv2.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv3.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane \" id=\"tab5\">
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<h3 class=\"mt-0\" style=\"color:#000;\">
\t\t\t\t\t\t\t\tInsurance Planning</h3>
\t\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Health Insurance:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tHealth expenses can be unpredictable. We find the best health insurance 
\t\t\t\t\t\t\t\t\t\tplans to cover you and your family.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">
\t\t\t\t\t\t\t\t\t\t\tLife Insurance:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tProtect your loved ones with life insurance policies that provide financial 
\t\t\t\t\t\t\t\t\t\tsecurity when it’s needed most.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\" alt width=\"25\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-11\">
\t\t\t\t\t\t\t\t\t<p style=\"font-size: 16px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 700;color:#000;\">Vehicle Insurance:
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tDrive with confidence. We recommend comprehensive vehicle insurance 
\t\t\t\t\t\t\t\t\t\tto keep you covered on the road.


\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-md-0 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv1.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv2.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5 mt-3\">
\t\t\t\t\t\t\t<img src=\"image/serv3.png\" alt width=\"100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

</section>
<section class=\"container\">

\t<h1 class=\"cus_ff bold text-center\" style=\"font-size: 44px;color:#000;font-weight: 700;\">Solutions for
\t\t\t\t\t\t\t\t      Businesses
\t</h1>
\t<h5 class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">We
\t\t\t\t\t\t\t\t      provide a suite of financial services to help your business thrive in a
\t\t\t\t\t\t\t\t      competitive environment:</h5>
\t<div class=\"mt-4\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\"><img src=\"image/solu_bus.png\" alt width=\"100%\"></div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t<div class=\"accordion-item\" style=\"position: relative;\">
\t\t\t\t\t\t<button class=\"accordion-header\" data-target=\"content1\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-10 align-content-center\">
\t\t\t\t\t\t\t\t\t<h3 style=\"color:#000;font-weight:500;\">Creative
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              design</h3>
\t\t\t\t\t\t\t\t\t<p class=\"mt-3\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Financial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Management:</span>
\t\t\t\t\t\t\t\t\t\tFrom day-to-day operations to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              long-term planning, our financial management
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              services keep your business on track.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"accordion-content\" id=\"content1\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-2 \"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-10 pl-0\">
\t\t\t\t\t\t\t\t\t<p class=\"mt-0\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Mergers and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Acquisitions:</span>
\t\t\t\t\t\t\t\t\t\tThinking of expanding? We provide strategic advice
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              and support to navigate M&A activities
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              smoothly.</p>
\t\t\t\t\t\t\t\t\t<p class=\"mt-3\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Risk Management:</span>
\t\t\t\t\t\t\t\t\t\tIdentify and mitigate financial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              risks with our expert guidance, ensuring your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              business stays resilient.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\" style=\"position: relative;\">
\t\t\t\t\t\t<button class=\"accordion-header\" data-target=\"content2\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-10 align-content-center\">
\t\t\t\t\t\t\t\t\t<h3 style=\"color:#000;font-weight:500;\">Business Planning and Strategy</h3>
\t\t\t\t\t\t\t\t\t<p class=\"mt-3\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Business Plan
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Development:</span>
\t\t\t\t\t\t\t\t\t\tTurn your vision into a solid plan. We help you craft detailed and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              actionable business plans.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"accordion-content\" id=\"content2\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-10 pl-0\">
\t\t\t\t\t\t\t\t\t<p class=\"mt-0\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Mergers and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Acquisitions:</span>
\t\t\t\t\t\t\t\t\t\tThinking of expanding? We provide strategic advice
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              and support to navigate M&A activities
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              smoothly.</p>
\t\t\t\t\t\t\t\t\t<p class=\"mt-3\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Risk Management:</span>
\t\t\t\t\t\t\t\t\t\tIdentify and mitigate financial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              risks with our expert guidance, ensuring your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              business stays resilient.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\" style=\"position: relative;\">
\t\t\t\t\t\t<button class=\"accordion-header\" data-target=\"content3\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-10 align-content-center\">
\t\t\t\t\t\t\t\t\t<h3 style=\"color:#000;font-weight:500;\">Tax Compliance and Strategy</h3>
\t\t\t\t\t\t\t\t\t<p class=\"mt-3\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Corporate Tax
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Planning:</span>
\t\t\t\t\t\t\t\t\t\tMaximize your business’s tax efficiency. Our corporate tax strategies
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              help you minimize liabilities and save money.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"accordion-content\" id=\"content3\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-10 pl-0\">
\t\t\t\t\t\t\t\t\t<p class=\"mt-0\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Mergers and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Acquisitions:</span>
\t\t\t\t\t\t\t\t\t\tThinking of expanding? We provide strategic advice
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              and support to navigate M&A activities
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              smoothly.</p>
\t\t\t\t\t\t\t\t\t<p class=\"mt-3\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Risk Management:</span>
\t\t\t\t\t\t\t\t\t\tIdentify and mitigate financial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              risks with our expert guidance, ensuring your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              business stays resilient.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\" style=\"position: relative;\">
\t\t\t\t\t\t<button class=\"accordion-header\" data-target=\"content4\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-10 align-content-center\">
\t\t\t\t\t\t\t\t\t<h3 style=\"color:#000;font-weight:500;\">Employee Benefits Planning</h3>
\t\t\t\t\t\t\t\t\t<p class=\"mt-3\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Health and Wellness
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Programs:</span>
\t\t\t\t\t\t\t\t\t\tCreate a healthier workplace. Our health and wellness programs keep
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              your employees happy and productive.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"accordion-content\" id=\"content4\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-11 col-10 pl-0\">
\t\t\t\t\t\t\t\t\t<p class=\"mt-0\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Mergers and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Acquisitions:</span>
\t\t\t\t\t\t\t\t\t\tThinking of expanding? We provide strategic advice
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              and support to navigate M&A activities
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              smoothly.</p>
\t\t\t\t\t\t\t\t\t<p class=\"mt-3\" style=\"color:#6C6C72;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">• Risk Management:</span>
\t\t\t\t\t\t\t\t\t\tIdentify and mitigate financial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              risks with our expert guidance, ensuring your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              business stays resilient.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

</section>
<br>
<img src=\"image/ab4.png\" alt=\"\" width=\"100%\">
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>

\t\$(document).ready(function () {
\$('.accordion-header').click(function () {
const target = \$(this).data('target');

// Toggle the clicked accordion section
\$('#' + target).slideToggle();

// Toggle the active class on the clicked header and rotate the icon
\$(this).toggleClass('active').find('i').toggleClass('fa-chevron-down fa-chevron-up');

// Hide other accordion sections and reset their icons
\$('.accordion-content').not('#' + target).slideUp();
\$('.accordion-header').not(this).removeClass('active').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
});
});

\$(document).ready(function () {
\$('.tab-button').click(function () { // Remove active class from all buttons and panes
\$('.tab-button').removeClass('active');
\$('.tab-pane').removeClass('active');

// Add active class to the clicked button and corresponding pane
\$(this).addClass('active');
\$('#' + \$(this).data('tab')).addClass('active');
});
});
</script>
";
        // line 646
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/solution.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 646,  198 => 131,  189 => 128,  184 => 127,  180 => 126,  174 => 122,  165 => 119,  160 => 118,  156 => 117,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/solution.twig", "");
    }
}
