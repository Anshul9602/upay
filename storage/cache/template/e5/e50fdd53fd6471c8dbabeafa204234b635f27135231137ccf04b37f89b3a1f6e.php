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

/* default/template/common/upaay_s.twig */
class __TwigTemplate_b12708fc8f0a19cca4278203da30fd1ec08c3a21eadaf09a9302a4806597b94b extends \Twig\Template
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
      .gradient-border::after {
         display: none;
     }
      .cus_ff {
         font-size: 22px !important;
      }
      .cus_f1 {
         font-size: 18px !important;
      }

      .cus_pp p{
       
         max-width: 100% !important;
      }
      .cus_pp1 p{
       
         max-width: 100% !important;
      }
      .cus_pp img{
       
         margin-top: 10px !important;
      }
   }
   .gradient-border {
      position: relative;
      padding-right: 20px; /* To avoid overlapping of the content with the pseudo-element */
  }

  .gradient-border::after {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      width: 2px; /* Width of the border */
      background: linear-gradient(to bottom, #CBB9ED 0%, #9143CE 50%, #57007B 100%);
  }
</style>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
<div class=\"slider-area pb-3\">

   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 50
            echo "               <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 50);
            echo "\" style=\"position: relative;\">
                  <img src=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 51);
            echo "\" alt class=\"img-response slider-img\">
                  
               </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "   
         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 61
            echo "               <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 61);
            echo "\">
                  <img src=\"";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 62);
            echo "\" alt class=\"img-response slider-img\">
               </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "         </div>
      </div>
   </div>
</div>
<section class=\"container mt-4\">

   <div class=\"container\" style=\"background-color: #F4EEFF;    border-radius: 70px;\">
      <div class=\"row cus_pp\" style=\"padding: 10%;    justify-content: space-around;    align-items: center;\">
         <div class=\"col-md-5 mt-3 order-md-1 order-1\">
            <img src=\"image/scc1.png\" alt=\"\" width=\"100%\">
         </div>
         <div class=\"col-md-6 mt-3 order-md-2 order-2\">
            <img src=\"image/01.png\" alt=\"\">   <br><br>
            <h2 class=\"mt-3 \" style=\"font-weight: 700;color:#292F36;\">Getting To Know You</h2>
            <p class=\"mt-2\" style=\"max-width: 70%;\">The journey to financial clarity starts with a conversation. In our initial consultation, we don't just talk; we listen—to understand your financial narrative, your worries, your aspirations. This is not just a chat; it’s the groundwork for a strategy that fits you like a glove.</p>
         </div>
       
         <div class=\"col-md-6 mt-md-3 mt-5 order-md-3 order-3\">
            <img src=\"image/02.png\" alt=\"\">   <br><br>
            <h2 class=\"mt-3 \" style=\"font-weight: 700;color:#292F36;\">Deep Dive Assessment</h2>
            <p class=\"mt-2\" style=\"max-width: 70%;\">Once we know you, we dive deeper. We assess every policy, investment, and financial decision you've made
               so far. Think of this as a comprehensive health check-up for your finances, identifying what's healthy and what needs a change.</p>
         </div>
         <div class=\"col-md-5 mt-3 order-md-4 order-4\">
            <img src=\"image/scc2.png\" alt=\"\" width=\"100%\">
         </div>
       
         <div class=\"col-md-5 mt-md-3 mt-5 order-md-5 order-6\">
            <img src=\"image/scc3.png\" alt=\"\" width=\"100%\">
         </div>
         <div class=\"col-md-6 mt-3 order-md-6 order-5\">
            <img src=\"image/03.png\" alt=\"\">   <br><br>
            <h2 class=\"mt-3 \" style=\"font-weight: 700;color:#292F36;\">Strategic Adjustment</h2>
            <p class=\"mt-2\" style=\"max-width: 70%;\">Now comes the part where we fine-tune your financial engine. We keep what’s working efficiently and overhaul what isn’t. This step is about optimizing your financial portfolio to ensure it’s as robust as possible trimming the fat and focusing on muscle.</p>
         </div>
       
         <div class=\"col-md-6 mt-md-3 mt-5 order-md-7 order-7\">
            <img src=\"image/04.png\" alt=\"\">   <br><br>
            <h2 class=\"mt-3 \" style=\"font-weight: 700;color:#292F36;\">Dedicated Relationship Manager</h2>
            <p class=\"mt-2\" style=\"max-width: 70%;\">You wouldn’t entrust your health to just anyone, and the same goes for your finances. We assign you a dedicated Relationship Manager—your personal financial guide, always just a call, message, or email away. They maintain all your records, ensuring you have clarity and control without the hassle.</p>
         </div>
         <div class=\"col-md-5 mt-3 order-md-8 order-8\">
            <img src=\"image/scc4.png\" alt=\"\" width=\"100%\">
         </div>
        
         <div class=\"col-md-5 mt-md-3 mt-5 order-md-9 order-10\">
            <img src=\"image/scc5.png\" alt=\"\" width=\"100%\">
         </div>
         <div class=\"col-md-6 mt-3 order-md-10 order-9\">
            <img src=\"image/05.png\" alt=\"\">
            <br><br>
            <h2 class=\"mt-3 \" style=\"font-weight: 700;color:#292F36;\">Growing Your Wealth</h2>
            <p class=\"mt-2\" style=\"max-width: 70%;\">With a solid strategy in place and a dedicated guide by your side, it’s time to grow your wealth. Tailored to your risk tolerance and goals, we manage your investments to not just preserve but enhance your wealth.</p>
         </div>

         
         <div class=\"col-md-6 mt-md-3 mt-5 order-md-11 order-11\">
            <img src=\"image/06.png\" alt=\"\">
            <br><br>
            <h2 class=\"mt-3 \" style=\"font-weight: 700;color:#292F36;\">Regular Updates & Trends</h2>
            <p class=\"mt-2\" style=\"max-width: 70%;\">Transparency is key in our relationship. We send you monthly reports detailing how your investments are performing, along with insights on trends that might affect your financial landscape. It's about keeping you informed and ahead of the curve.</p>
         </div>
         <div class=\"col-md-5 mt-3 order-md-12 order-12\">
            <img src=\"image/scc6.png\" alt=\"\" width=\"100%\">
         </div>
      </div>
   </div>
</section>

<section class=\"container\">
   <div class=\"row justify-content-between cus_pp1\" style=\"padding:0 8%;\">
      <div class=\"col-md-6 gradient-border\" >
         
         <h3 class=\"mt-3 \" style=\"font-weight: 700;color:#292F36;\">Support Through <br>Unplanned Events</h3>
         <p class=\"pt-3\" style=\"max-width: 80%;font-size:22px;color:#4D5053;font-weight: 400;  line-height: 1.1;\">Life is unpredictable, and when unexpected financial needs or emergencies arise, consider us your first call. Whether it's handling health policy claims, advising on a major purchase, or navigating financial crises, we’re here for you—like your cool financial doctors who’ve got your back, no matter what.</p>
      </div>
      <div class=\"col-md-6 mt-md-0 mt-5\" style=\"padding-left: 1%;\">
         <h3 class=\"mt-3 \" style=\"font-weight: 700;color:#292F36;\">Simplifying Finance,<br> Maximising Potential</h3>
         <p class=\"cus_p1 text-start pt-3\"
            style=\"max-width: 80%;font-size:22px;color:#4D5053;font-weight: 400;  line-height: 1.1;\">At Upaaye Consulting, we do more than manage your money—we ensure it works for you. While you focus on your career and life, we make sure your finances are not just in order but thriving. That’s how we simplify complexities and empower you to seize control of your financial destiny.</p>

      </div>
     
   </div>
</section>

<br>
<img src=\"image/ab4.png\" alt=\"\" width=\"100%\">
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>


";
        // line 156
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/upaay_s.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 156,  132 => 65,  123 => 62,  118 => 61,  114 => 60,  107 => 55,  97 => 51,  92 => 50,  88 => 49,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/upaay_s.twig", "");
    }
}
