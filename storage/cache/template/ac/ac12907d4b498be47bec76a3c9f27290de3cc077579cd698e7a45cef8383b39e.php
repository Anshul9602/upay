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

/* default/template/common/upaay_d.twig */
class __TwigTemplate_3e2ca061ea75e477ecdd0208dfcda712c490baede5d3bf1a59f9d6300530722b extends \Twig\Template
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
 
   @media (max-width: 768px) {
   
   .cus_ff{
   font-size: 22px !important;
   }
   .cus_p{
   max-width: 90% !important;
   }
   }
</style>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
<div class=\"slider-area pb-3\">

   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 22
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 22);
            echo "\">
               <img src=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 23);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 31
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 31);
            echo "\">
               <img src=\"";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 32);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "         </div>
      </div>
   </div>
</div>
<section class=\"container\">

   <h6 class=\"cus_f1 bold text-center\" style=\"font-size: 24px;color:#4D5053;font-weight: 700;\">Expertise That Works for You   </h6>
   <h1 class=\"cus_ff bold text-center mt-3\" style=\"font-size: 32px;color:#000;font-weight: 700;\">A Great Place to Invest   </h1>
   <p class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">Our team is more than just technically adept; we're street-smart professionals who thrive on challenges. With us, you receive the best strategies and plans—cost-effective and completely transparent. Focus on what you do best, while we make your money work as hard as you do. Let us handle the intricacies of finance, so you can enjoy the peace of mind that comes with knowing your finances are in expert hands.</p>
   <div class=\"mt-4\">
      <img src=\"image/up1.png\" alt=\"\" width=\"100%\">
   </div>

</section>
<section class=\"container\">

   <h1 class=\"cus_ff bold text-center\" style=\"font-size: 44px;color:#000;font-weight: 700;\">Solutions for
      Businesses
   </h1>
   <h5 class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">We
      provide a suite of financial services to help your business thrive in a
      competitive environment:</h5>
   <div class=\"mt-4\">
      <div class=\"row\">
         <div class=\"col-md-4\"><img src=\"image/solu_bus.png\" alt width=\"100%\"></div>
         <div class=\"col-md-8\">
            <div class=\"accordion\">
               <div class=\"accordion-item\" style=\"position: relative;\">
                  <button class=\"accordion-header\" data-target=\"content1\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
                        <div class=\"col-md-11 col-10 align-content-center\">
                           <h3 style=\"color:#000;font-weight:500;\">Creative
                              design</h3>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\"><span style=\"font-weight: 600;\">• Financial
                                 Management:</span> From day-to-day operations to
                              long-term planning, our financial management
                              services keep your business on track.
                           </p>
                        </div>
                        <div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\"><i
                              class=\"fas fa-chevron-down\"></i></div>
                     </div>
                  </button>
                  <div class=\"accordion-content\" id=\"content1\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2 \"></div>
                        <div class=\"col-md-11 col-10 pl-0\">
                           <p class=\"mt-0\" style=\"color:#6C6C72;\"><span style=\"font-weight: 600;\">• Mergers and
                                 Acquisitions:</span>
                              Thinking of expanding? We provide strategic advice
                              and support to navigate M&A activities
                              smoothly.</p>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Risk Management:</span> Identify and mitigate financial
                              risks with our expert guidance, ensuring your
                              business stays resilient.
                           </p>
                        </div>
                     </div>

                  </div>

               </div>
               <div class=\"accordion-item\" style=\"position: relative;\">
                  <button class=\"accordion-header\" data-target=\"content2\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
                        <div class=\"col-md-11 col-10 align-content-center\">
                           <h3 style=\"color:#000;font-weight:500;\">Business Planning and Strategy</h3>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\"><span style=\"font-weight: 600;\">• Business Plan
                                 Development:</span> Turn your vision into a solid plan. We help you craft detailed and
                              actionable business plans.
                           </p>
                        </div>
                        <div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\"><i
                              class=\"fas fa-chevron-down\"></i></div>
                     </div>
                  </button>
                  <div class=\"accordion-content\" id=\"content2\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"></div>
                        <div class=\"col-md-11 col-10 pl-0\">
                           <p class=\"mt-0\" style=\"color:#6C6C72;\"><span style=\"font-weight: 600;\">• Mergers and
                                 Acquisitions:</span>
                              Thinking of expanding? We provide strategic advice
                              and support to navigate M&A activities
                              smoothly.</p>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Risk Management:</span> Identify and mitigate financial
                              risks with our expert guidance, ensuring your
                              business stays resilient.
                           </p>
                        </div>
                     </div>

                  </div>

               </div>
               <div class=\"accordion-item\" style=\"position: relative;\">
                  <button class=\"accordion-header\" data-target=\"content3\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
                        <div class=\"col-md-11 col-10 align-content-center\">
                           <h3 style=\"color:#000;font-weight:500;\">Tax Compliance and Strategy</h3>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\"><span style=\"font-weight: 600;\">• Corporate Tax
                                 Planning:</span> Maximize your business’s tax efficiency. Our corporate tax strategies
                              help you minimize liabilities and save money.
                           </p>
                        </div>
                        <div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\"><i
                              class=\"fas fa-chevron-down\"></i></div>
                     </div>
                  </button>
                  <div class=\"accordion-content\" id=\"content3\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"></div>
                        <div class=\"col-md-11 col-10 pl-0\">
                           <p class=\"mt-0\" style=\"color:#6C6C72;\"><span style=\"font-weight: 600;\">• Mergers and
                                 Acquisitions:</span>
                              Thinking of expanding? We provide strategic advice
                              and support to navigate M&A activities
                              smoothly.</p>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Risk Management:</span> Identify and mitigate financial
                              risks with our expert guidance, ensuring your
                              business stays resilient.
                           </p>
                        </div>
                     </div>

                  </div>

               </div>
               <div class=\"accordion-item\" style=\"position: relative;\">
                  <button class=\"accordion-header\" data-target=\"content4\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
                        <div class=\"col-md-11 col-10 align-content-center\">
                           <h3 style=\"color:#000;font-weight:500;\">Employee Benefits Planning</h3>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\"><span style=\"font-weight: 600;\">• Health and Wellness
                                 Programs:</span> Create a healthier workplace. Our health and wellness programs keep
                              your employees happy and productive.
                           </p>
                        </div>
                        <div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\"><i
                              class=\"fas fa-chevron-down\"></i></div>
                     </div>
                  </button>
                  <div class=\"accordion-content\" id=\"content4\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"></div>
                        <div class=\"col-md-11 col-10 pl-0\">
                           <p class=\"mt-0\" style=\"color:#6C6C72;\"><span style=\"font-weight: 600;\">• Mergers and
                                 Acquisitions:</span>
                              Thinking of expanding? We provide strategic advice
                              and support to navigate M&A activities
                              smoothly.</p>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Risk Management:</span> Identify and mitigate financial
                              risks with our expert guidance, ensuring your
                              business stays resilient.
                           </p>
                        </div>
                     </div>

                  </div>

               </div>


            </div>

         </div>
      </div>
   </div>

</section>
<br>
<img src=\"image/ab4.png\" alt=\"\" width=\"100%\">
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>

   \$(document).ready(function () {
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
        // line 247
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/upaay_d.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 247,  102 => 35,  93 => 32,  88 => 31,  84 => 30,  78 => 26,  69 => 23,  64 => 22,  60 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/upaay_d.twig", "");
    }
}
