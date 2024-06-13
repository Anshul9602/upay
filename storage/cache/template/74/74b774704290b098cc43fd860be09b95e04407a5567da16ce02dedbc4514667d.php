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

/* default/template/common/diamonds.twig */
class __TwigTemplate_2d4b3f7056b9ba5e9f8114ca6d56cbc493a307a81620b53eee7db0f9d448de04 extends \Twig\Template
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
    .banner-text2 {
        color: #423c9e;
        font-size: 22px;
    }

    @media screen and (max-width:650px) {
        .banner-text2 {
            color: #423c9e;
            font-size: 14px !important;
        }
    }

    .leaf {
        width: 160px;
        position: absolute;
        z-index: 9999;
        right: -50px;
        top: -50px;
        transform: rotate(20deg);
    }

    .demo-msg {
        display: none !important;
    }
</style>
<div class=\"banner-statistics-area ptb-30\">
    <div class=\"container ptb-30\">

        <div class=\"row\">

            <div class=\"col-sm-12\">

                <div class=\"row row-20 mtn-20\">


                    <div class=\"col-sm-6\">
                        <figure class=\"banner-statistics mt-20\">
                            <a href=\"index.php?route=common/g3\">
                                <img src=\"assets/img/banner/imgb2.JPG\" alt=\"product banner\">
                            </a>
                            <div class=\"banner-content text-center\">
                                <h2 class=\"banner-text2\">Metal <br><span>Education</span></h2>
                                <a href=\"index.php?route=common/g3\" class=\"btn btn-text\">Learn More</a>
                            </div>
                        </figure>
                    </div>
                    <div class=\"col-sm-6\">
                        <figure class=\"banner-statistics mt-20\">
                            <a href=\"index.php?route=common/g5\">
                                <img src=\"assets/img/banner/imgb1.jpg\" alt=\"product banner\">
                            </a>
                            <div class=\"banner-content text-center\">

                                <h2 class=\"banner-text2\">Conflict Free <br><span>Diamonds</span></h2>
                                <a href=\"index.php?route=common/g1\" class=\"btn btn-text\">Learn more</a>
                            </div>
                        </figure>
                    </div>




                    <div class=\"col-sm-6\">
                        <figure class=\"banner-statistics mt-20\">
                            <a href=\"index.php?route=common/g4\">
                                <img src=\"assets/img/banner/imgb3.JPG\" alt=\"product banner\">
                            </a>
                            <div class=\"banner-content text-center\">
                                <h2 class=\"banner-text2\">Gemstone<br><span>Education</span></h2>
                                <a href=\"index.php?route=common/g4\" class=\"btn btn-text\">Learn More</a>
                            </div>
                        </figure>
                    </div>


                    <div class=\"col-sm-6\">
                        <figure class=\"banner-statistics mt-20\">
                            <a href=\"index.php?route=common/g2\">
                                <img src=\"assets/img/banner/imgb4.jpg\" alt=\"product banner\">
                            </a>
                            <div class=\"banner-content text-center\">

                                <h2 class=\"banner-text2\">Diamond <br><span>Education</span></h2>
                                <a href=\"index.php?route=common/g2\" class=\"btn btn-text\">Learn more</a>
                            </div>
                        </figure>


                    </div>

                </div>



            </div><br>

        </div>


    </div>


</div>
";
        // line 106
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/diamonds.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 106,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/diamonds.twig", "");
    }
}
