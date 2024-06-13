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
class __TwigTemplate_8a8fde5b54799a58f0a5ee81181d21ba6ae759703addcf418709f00aaaca5f22 extends \Twig\Template
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
\t\t\t\t<img src=\"";
        // line 5
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" class=\"logo\" style=\"max-width:180px\">
\t\t\t\t<p class=\"mt-3\" style=\"font-size: 11px;\">@2024 Upaaye Consulting. All rights reserved.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-6 d-flex justify-content-center p-0 mt-4\">
\t\t\t\t<div class=\"widget-item text-start mt-2\">
\t\t\t\t\t<h6 class=\"widget-title \">Contact Us</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-12\" style=\"text-align: start;color:#000;\">
\t\t\t\t\t\t\t\t\t\t<p>Email</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-12\" style=\"text-align: start;color:#692BD8;\">
\t\t\t\t\t\t\t\t\t\t<p>sample@gmail.com\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-12\" style=\"text-align: start;color:#000;\">
\t\t\t\t\t\t\t\t\t\t<p>Phone</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-12\" style=\"text-align: start;color:#692BD8;\">
\t\t\t\t\t\t\t\t\t\t<p>1234567890\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<br/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-6 d-flex justify-content-center mt-4\">
\t\t\t\t<div class=\"widget-item text-start\">
\t\t\t\t\t<h6 class=\"widget-title\">Quick links</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: inline;\" class=\"info-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/about\">
\t\t\t\t\t\t\t\t\tHome</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/about\">
\t\t\t\t\t\t\t\t\tAbout</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t\t\tContact Us</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=7\">
\t\t\t\t\t\t\t\t\tDonate</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=7\">
\t\t\t\t\t\t\t\t\tBoard members</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-6 d-flex justify-content-center mt-4\">
\t\t\t\t<div class=\"widget-item text-start\">
\t\t\t\t\t<h6 class=\"widget-title\">Follow Us</h6>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<ul style=\"display: flex;\" class=\"info-list\">
\t\t\t\t\t\t\t<li class=\"mr-3\"><a href><img
                                                    src=\"image/ins.png\" alt
                                                    width=\"20\"></a></li>
                                        <li class=\"mr-3\"><a href><img
                                                    src=\"image/link.png\" alt
                                                    width=\"20\"></a></li>
                                        <li class=\"mr-3\"><a href><img
                                                    src=\"image/fb.png\" alt
                                                    width=\"20\"></a></li></ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 col-12 d-flex justify-content-center mt-4\">
\t\t\t\t<div class=\"widget-item text-center\">

\t\t\t\t\t<div class=\"widget-body\">

\t\t\t\t\t\t<a href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary \" style=\"padding: 5px 24px;font-size:12px;\">Book An Appointment</button>
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
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 109
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 109);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 109);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 109);
            echo "\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 110
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
        return array (  168 => 110,  153 => 109,  149 => 108,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
