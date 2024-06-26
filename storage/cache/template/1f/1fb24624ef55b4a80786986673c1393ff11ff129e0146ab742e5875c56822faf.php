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

/* default/template/common/footer.twig */
class __TwigTemplate_59b39992b1446204b505f9ab4c4db42b20033ff2d097bfb7ac8b782a7bc8eb02 extends \Twig\Template
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
        echo "<footer style=\"border:thin solid #f1f1f1\">
\t<div class=\"container pbt-50\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 mt-4\" style=\"align-items:center\">
\t\t\t\t<h6 class=\"widget-title text-center\" style=\"font-size:12px;    letter-spacing: 0px;\">Also Find Us On
\t\t\t\t</h6>
\t\t\t\t<div class=\"mt-2 mb-3 text-center\">
\t\t\t\t\t<div class=\"row mt-4 d-flex justify-content-center\" style='max-width:200px; margin:auto'>
\t\t\t\t\t\t<div class=\"col-md-4 text-center\" style=\"width:auto;\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/profile.php?id=100063970603485&mibextid=LQQJ4d\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/fb.png\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 text-center\" style=\"width:auto;\">
\t\t\t\t\t\t\t<a href=\"https://instagram.com/solitairefinejewelry?igshid=YmMyMTA2M2Y=\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/in.png\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-12 d-flex justify-content-center p-0 mt-4\">
\t\t\t\t<div class=\"widget-item text-center mt-2\">
\t\t\t\t\t<h6 class=\"widget-title \">Contact Us</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-3\" style=\"text-align: end;color:#003B31;\">
\t\t\t\t\t\t\t\t\t\t<p>Address :</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-8\" style=\"text-align: start;color:#003B31;\">
\t\t\t\t\t\t\t\t\t\t<p>Flat 1301B , 13/F, Hart House, 12-14 Hart Avenue,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                 Tsim Sha Tsui, Kowloon, Hong Kong
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-3\" style=\"text-align: end;color:#003B31;\">
\t\t\t\t\t\t\t\t\t\t<p>Email :</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-8\" style=\"text-align: start;color:#003B31;\">
\t\t\t\t\t\t\t\t\t\t<p>info@solitairejew.com
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-3\" style=\"text-align: end;color:#003B31;\">
\t\t\t\t\t\t\t\t\t\t<p>Phone :</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-8\" style=\"text-align: start;color:#003B31;\">
\t\t\t\t\t\t\t\t\t\t<p>+852 2316 7662
\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-3\" style=\"text-align: end;color:#003B31;\">
\t\t\t\t\t\t\t\t\t\t<p>Fax :</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-8\" style=\"text-align: start;color:#003B31;\">
\t\t\t\t\t\t\t\t\t\t<p>+852 2316 7611
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<br/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-6 d-flex justify-content-center mt-4\">
\t\t\t\t<div class=\"widget-item text-center\">
\t\t\t\t\t<h6 class=\"widget-title\">Customer Service</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=6\">
\t\t\t\t\t\t\t\t\tTrack your order</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=account/account\">
\t\t\t\t\t\t\t\t\tMy Account</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=7\">
\t\t\t\t\t\t\t\t\tReturns & Replacements</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-6 d-flex justify-content-center mt-4\">
\t\t\t\t<div class=\"widget-item text-center\">
\t\t\t\t\t<h6 class=\"widget-title\">Important Links</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/home\">
\t\t\t\t\t\t\t\t\tHome</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/about\">
\t\t\t\t\t\t\t\t\tAbout Us</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/jewelry\">
\t\t\t\t\t\t\t\t\tJewelry</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 121
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 col-12 d-flex justify-content-center mt-4\">
\t\t\t\t<div class=\"widget-item text-center\">

\t\t\t\t\t<div class=\"widget-body\">

\t\t\t\t\t\t<a href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-gold\" style=\"padding: 5px 24px;font-size:12px;\">Book An Appointment</button>
\t\t\t\t\t\t</a>


\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<div class=\"col-12\" style=\"padding:12.5px 0px; background: #C29958;\">
\t<p style=\"text-align: center; font-size:12px; color: #003B31;\">
\t\tCopyright © 2023 SJ, All rights reserved.
\t</p>
</div></footer>";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 147
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 147);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 147);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 147);
            echo "\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 148
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<!-- Modernizer JS --><script src=\"assets/js/vendor/modernizr-3.6.0.min.js\"></script><!-- Popper JS --><script src=\"assets/js/vendor/popper.min.js\"></script><!-- Bootstrap JS --><script src=\"assets/js/vendor/bootstrap.min.js\"></script><!-- Countdown JS --><script src=\"assets/js/plugins/countdown.min.js\"></script><!-- Nice Select JS --><script src=\"assets/js/plugins/nice-select.min.js\"></script><!-- jquery UI JS --><script src=\"assets/js/plugins/jqueryui.min.js\"></script><!-- Image zoom JS --><script src=\"assets/js/plugins/image-zoom.min.js\"></script><!-- Imagesloaded JS --><script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script><!-- Instagram feed JS --><script src=\"assets/js/plugins/instagramfeed.min.js\"></script><!-- mailchimp active js --><script src=\"assets/js/plugins/ajaxchimp.js\"></script><!-- contact form dynamic js --><script src=\"assets/js/plugins/ajax-mail.js\"></script><!-- google map api --><script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8\"></script><!-- google map active js --><script src=\"assets/js/plugins/google-map.js\"></script><!-- Main JS --><script src=\"assets/js/main.js\"></script></body></html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 148,  186 => 147,  182 => 146,  155 => 121,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
