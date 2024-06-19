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
class __TwigTemplate_b7523b06509cea8246e570979d2db39b54d95110d44aea966e85b58602449bf3 extends \Twig\Template
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
   .tabs {

      margin: 20px auto;
   }

   .tab-buttons {
      display: flex;
      border-bottom: 2px solid #ccc;
   }

   .tab-button {

      padding: 30px;
      cursor: pointer;
      background: #fff;
      border: none;
      outline: none;
      transition: background 0.3s;
   }

   .tab-button:hover {
      background: #ddd;
   }

   .tab-button.active {
      background: #c1ace8;
      border-bottom: 2px solid #692BD8;
      color: #007BFF;
   }

   .tab-content {
      border: 1px solid #ccc;
      border-top: none;
      padding: 20px;
      background: #fff;
   }

   .tab-pane {
      display: none;
   }

   .tab-pane.active {
      display: block;
   }



   .accordion {
     
      margin: 20px auto;
      
      overflow: hidden;
  }
  
  .accordion-item {
   box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 7px 11px 0 rgba(0, 0, 0, 0.19);
   margin-top:30px;
      border: 1px solid #ccc;
  }
  

  
  .accordion-header {
      width: 100%;
      padding: 15px;
      cursor: pointer;
      background: #f1f1f1;
      border: none;
      outline: none;
      text-align: left;
      font-size: 16px;
      transition: background 0.3s;
  }
  
  .accordion-header:hover {
      background: #eeeded;
  }
  
  .accordion-header.active {
      background: #fff;
      color: black;
  }
  
  .accordion-content {
      display: none;
      padding: 15px;
      background: #fff;
  }
</style>

<div class=\"slider-area pb-3\">

   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 100
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 100);
            echo "\">
               <img src=\"";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 101);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 109
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 109);
            echo "\">
               <img src=\"";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 110);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "         </div>
      </div>
   </div>
</div>
<section class=\"container\">

   <h1 class=\"cus_ff bold text-center\" style=\"font-size: 44px;color:#000;font-weight: 700;\">Services for
      Individuals
   </h1>
   <h5 class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">we offer
      a range
      of personal financial services designed to secure your and your family’s
      financial future:</h5>
   <div class=\"mt-4\">
      <div class=\"tabs row\">
         <div class=\"tab-buttons col-md-2 row\">
            <button class=\"col-12 tab-button active\" data-tab=\"tab1\">
               <img src=\"image/wm.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\">Wealth Management</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab2\"><img src=\"image/tp.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\">Retirement
                  Planning</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab3\">
               <img src=\"image/tp.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\">Tax Planning and
                  Preparation</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab4\">
               <img src=\"image/ep.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\">Estate Planning</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab5\">
               <img src=\"image/ip.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\"> Insurance Planning</p>
            </button>
         </div>
         <div class=\"tab-content col-md-10\">
            <div class=\"tab-pane active\" id=\"tab1\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-4\" style=\"color:#000;\">Wealth Management</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Retirement
                                 Savings Plans: </span> Want to retire without
                              financial stress? We help you build a nest egg
                              that will let you enjoy your golden years.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\"> Pension Planning:
                              </span> Navigating pension options can be tricky. We guide you through the best choices to
                              ensure a steady income stream in retirement.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Post-Retirement Income
                                 Planning: </span> Stay financially secure even after you stop working. We design plans
                              that keep the money flowing long after retirement.</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5\">
                     <img src=\"image/serv1.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-7 mt-3\">
                     <img src=\"image/serv2.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-5 mt-3\">
                     <img src=\"image/serv3.png\" alt=\"\" width=\"100%\">
                  </div>
               </div>
            </div>
            <div class=\"tab-pane\" id=\"tab2\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-4\" style=\"color:#000;\">A passion for putting you first.</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Retirement
                                 Savings Plans: </span> Want to retire without
                              financial stress? We help you build a nest egg
                              that will let you enjoy your golden years.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 pr-0 text-center  justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\"> Pension Planning:
                              </span> Navigating pension options can be tricky. We guide you through the best choices to
                              ensure a steady income stream in retirement.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 pr-0 text-center  justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Post-Retirement Income
                                 Planning: </span> Stay financially secure even after you stop working. We design plans
                              that keep the money flowing long after retirement.</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5\">
                     <img src=\"image/serv1.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-7 mt-3\">
                     <img src=\"image/serv2.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-5 mt-3\">
                     <img src=\"image/serv3.png\" alt=\"\" width=\"100%\">
                  </div>
               </div>
            </div>
            <div class=\"tab-pane\" id=\"tab3\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-4\" style=\"color:#000;\">Tax Planning and
                        Preparation</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Retirement
                                 Savings Plans: </span> Want to retire without
                              financial stress? We help you build a nest egg
                              that will let you enjoy your golden years.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\"> Pension Planning:
                              </span> Navigating pension options can be tricky. We guide you through the best choices to
                              ensure a steady income stream in retirement.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Post-Retirement Income
                                 Planning: </span> Stay financially secure even after you stop working. We design plans
                              that keep the money flowing long after retirement.</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5\">
                     <img src=\"image/serv1.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-7 mt-3\">
                     <img src=\"image/serv2.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-5 mt-3\">
                     <img src=\"image/serv3.png\" alt=\"\" width=\"100%\">
                  </div>
               </div>
            </div>
            <div class=\"tab-pane\" id=\"tab4\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-4\" style=\"color:#000;\">Estate Planning</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Retirement
                                 Savings Plans: </span> Want to retire without
                              financial stress? We help you build a nest egg
                              that will let you enjoy your golden years.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\"> Pension Planning:
                              </span> Navigating pension options can be tricky. We guide you through the best choices to
                              ensure a steady income stream in retirement.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Post-Retirement Income
                                 Planning: </span> Stay financially secure even after you stop working. We design plans
                              that keep the money flowing long after retirement.</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5\">
                     <img src=\"image/serv1.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-7 mt-3\">
                     <img src=\"image/serv2.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-5 mt-3\">
                     <img src=\"image/serv3.png\" alt=\"\" width=\"100%\">
                  </div>
               </div>
            </div>
            <div class=\"tab-pane\" id=\"tab5\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-4\" style=\"color:#000;\"> Insurance Planning</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1  pr-0 text-center  justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Retirement
                                 Savings Plans: </span> Want to retire without
                              financial stress? We help you build a nest egg
                              that will let you enjoy your golden years.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\"> Pension Planning:
                              </span> Navigating pension options can be tricky. We guide you through the best choices to
                              ensure a steady income stream in retirement.</p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1  pr-0 text-center justify-content-center pt-2\"><img src=\"image/round.png\"
                              alt width=\"25\"></div>
                        <div class=\"col-md-11\">
                           <p style=\"font-size: 18px;\"><span style=\"font-weight: 700;color:#000;\">Post-Retirement Income
                                 Planning: </span> Stay financially secure even after you stop working. We design plans
                              that keep the money flowing long after retirement.</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5\">
                     <img src=\"image/serv1.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-7 mt-3\">
                     <img src=\"image/serv2.png\" alt=\"\" width=\"100%\">
                  </div>
                  <div class=\"col-md-5 mt-3\">
                     <img src=\"image/serv3.png\" alt=\"\" width=\"100%\">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>
<section class=\"container\">

   <h1 class=\"cus_ff bold text-center\" style=\"font-size: 44px;color:#000;font-weight: 700;\">Solutions for Businesses
   </h1>
   <h5 class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">We provide a suite of financial services to help your business thrive in a competitive environment:</h5>
   <div class=\"mt-4\">
     <div class=\"row\">
      <div class=\"col-md-4\"><img src=\"image/solu_bus.png\" alt=\"\" width=\"100%\"></div>
      <div class=\"col-md-8\">
         <div class=\"accordion\">
            <div class=\"accordion-item\">
                <button class=\"accordion-header\" data-target=\"content1\">
                  <div class=\"row\">
                     <div class=\"col-md-1\"><img src=\"image/snicon.png\" alt=\"\"></div>
                     <div class=\"col-md-11 align-content-center\"><h3 style=\"color:#000;font-weight:500;\">Creative design</h3>
                     <p class=\"mt-3\" style=\"color:#6C6C72;\">• Financial Management: From day-to-day operations to long-term planning, our financial management services keep your business on track.
                        </p></div>
                  </div></button>
                <div class=\"accordion-content\" id=\"content1\">
                    <p>• Mergers and Acquisitions: Thinking of expanding? We provide strategic advice and support to navigate M&A activities smoothly.</p>
                    <p>
                     • Risk Management: Identify and mitigate financial risks with our expert guidance, ensuring your business stays resilient.</p>
                </div>
            </div>
            <div class=\"accordion-item\">
                <button class=\"accordion-header\" data-target=\"content2\">Section 2</button>
                <div class=\"accordion-content\" id=\"content2\">
                    <p>Content for Section 2</p>
                </div>
            </div>
            <div class=\"accordion-item\">
                <button class=\"accordion-header\" data-target=\"content3\">Section 3</button>
                <div class=\"accordion-content\" id=\"content3\">
                    <p>Content for Section 3</p>
                </div>
            </div>
        </div>

      </div>
     </div>
   </div>

</section>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>

   \$(document).ready(function() {
      \$('.accordion-header').click(function() {
          const target = \$(this).data('target');
  
          // Toggle the clicked accordion section
          \$('#' + target).slideToggle();
  
          // Toggle the active class on the clicked header
          \$(this).toggleClass('active');
  
          // Hide other accordion sections
          \$('.accordion-content').not('#' + target).slideUp();
          \$('.accordion-header').not(this).removeClass('active');
      });
  });

   \$(document).ready(function () {
      \$('.tab-button').click(function () {
         // Remove active class from all buttons and panes
         \$('.tab-button').removeClass('active');
         \$('.tab-pane').removeClass('active');

         // Add active class to the clicked button and corresponding pane
         \$(this).addClass('active');
         \$('#' + \$(this).data('tab')).addClass('active');
      });
   });
</script>
";
        // line 454
        echo ($context["footer"] ?? null);
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
        return array (  523 => 454,  180 => 113,  171 => 110,  166 => 109,  162 => 108,  156 => 104,  147 => 101,  142 => 100,  138 => 99,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/solution.twig", "");
    }
}
