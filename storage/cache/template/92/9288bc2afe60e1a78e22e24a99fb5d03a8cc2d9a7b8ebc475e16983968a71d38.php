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
class __TwigTemplate_d02f5769facb488b0910069949dffc3596ad2ada0cce1be8acb43a9682780870 extends \Twig\Template
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
      width: 100%;
      justify-content: center;
   }

   .tab-buttons {
      display: flex;
      border-bottom: 2px solid #ccc;
   }

   .tab-button {
      padding: 20px;
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
      padding: 0 20px;
      background: #fff;
   }

   .tab-pane {
      display: none;
   }

   .tab-pane.active {
      display: block;
   }

   .accordion {
      margin: 0px auto ;
      overflow: hidden;
   }

   .accordion-item {
      box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 7px 11px 0 rgba(0, 0, 0, 0.19);
      margin-top: 20px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
   }

   .accordion-header {
      width: 100%;
      padding: 0 0 15px;
      cursor: pointer;
      background: #fff;
      border: none;
      outline: none;
      text-align: left;
      font-size: 16px;
      transition: background 0.3s;
   }

   .accordion-header h4 {
      letter-spacing: normal;
      text-transform: uppercase;
   }


   .accordion-header.active {
      background: #fff;
      color: black;
   }

   .accordion-item .fa-chevron-up {
      transform: rotate(1deg);
   }

   .accordion-header i {
      padding: 5px;
      border-radius: 50%;
      background: darkgray;
      color: #fff;
   }

   .accordion-content {
      display: none;
      padding: 0 15px 15px;
      background: #fff;
   }

   @media(max-width: 768px) {

      .cus_ff {
         font-size: 22px !important;
      }

      .cus_p {
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
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 120
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 120);
            echo "\">
               <img src=\"";
            // line 121
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 121);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 129
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 129);
            echo "\">
               <img src=\"";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 130);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
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
               <img src=\"image/wm.png\" alt=\"img\" width=\"30\">
               <p class=\"mt-3\" style=\"color:#212124;\">Wealth Management</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab2\">
               <img src=\"image/tp.png\" alt=\"img\" width=\"30\">
               <p class=\"mt-3\" style=\"color:#212124;\">Retirement
                  Planning</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab3\">
               <img src=\"image/tp.png\" alt=\"img\" width=\"30\">
               <p class=\"mt-3\" style=\"color:#212124;\">Tax Planning and
                  Preparation</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab4\">
               <img src=\"image/ep.png\" alt=\"img\" width=\"30\">
               <p class=\"mt-3\" style=\"color:#212124;\">Estate Planning</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab5\">
               <img src=\"image/ip.png\" alt=\"img\" width=\"30\">
               <p class=\"mt-3\" style=\"color:#212124;\">
                  Insurance Planning</p>
            </button>
         </div>
         <div class=\"tab-content col-md-10\">
            <div class=\"tab-pane active\" id=\"tab1\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-0\" style=\"color:#000;\">Wealth Management</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Investment Management:
                              </span>Want your money to grow while you sleep? We recommend
                              investment strategies tailored to maximize your returns and align with your financial
                              goals.
                              Call us, and let's make your money work as hard as you do.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">
                                 Savings Plans:
                              </span>Planning for the future? We help you create savings plans that fit your lifestyle
                              and ensure you’re prepared for whatever comes next.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Portfolio Management:
                              </span>
                              : We make sure your investments are as diverse and resilient as you
                              are. Our expert team balances your portfolio to match your risk tolerance and future
                              aspirations.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5 mt-md-0 mt-3\" style=\" align-items: end; display: flex;\">
                     <img src=\"image/sos11.png\" alt width=\"100%\">
                  </div>
                  <div class=\"col-md-12 mt-3\">
                     <img src=\"image/sos12.png\" alt width=\"100%\">
                  </div>
                  
               </div>
            </div>
            <div class=\"tab-pane \" id=\"tab2\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-0\" style=\"color:#000;\">Retirement Planning</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Retirement Savings Plans:
                              </span>
                              Want to retire without financial stress? We help you build a nest
                              egg that will let you enjoy your golden years.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">
                                 Pension Planning:
                              </span>
                              Navigating pension options can be tricky.
                              We guide you through the best choices to
                              ensure a steady income stream in retirement.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Post-Retirement
                                 Income
                                 Planning:
                              </span>
                              Stay financially secure even
                              after you stop working. We design plans
                              that keep the money flowing long after
                              retirement.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5 mt-md-0 mt-3\">
                     <img src=\"image/serv1.png\" alt width=\"100%\">
                  </div>
                  <div class=\"col-md-12 mt-3\">
                     <img src=\"image/serv2.png\" alt width=\"100%\">
                  </div>
                  
               </div>
            </div>
            <div class=\"tab-pane \" id=\"tab3\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-0\" style=\"color:#000;\">Tax Planning and Preparation</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Income Tax Planning:
                              </span>
                              Think of us as your tax champions. We wrestle those baffling
                              regulations into submission so you can keep more of your hard-earned money.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">
                                 Tax Filing Assistance:
                              </span>
                              Tax time doesn’t have to be stressful. We handle the paperwork and
                              filing so you don’t have to.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Tax Advisory Services:
                              </span>
                              Stay compliant and optimize your tax savings with ongoing advice
                              from our tax experts.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5 mt-md-0 mt-3\">
                     <img src=\"image/sos21.png\" alt width=\"100%\">
                  </div>
                  <div class=\"col-md-12 mt-3\">
                     <img src=\"image/sos22.png\" alt width=\"100%\">
                  </div>
                 
               </div>
            </div>
            <div class=\"tab-pane \" id=\"tab4\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-0\" style=\"color:#000;\">
                        Estate Planning</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Wills and Trusts:
                              </span>
                              Ensure your legacy is protected. We help you set up wills and trusts that
                              reflect your wishes and safeguard your assets.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">
                                 Asset Protection:
                              </span>
                              Shield your wealth from creditors and legal challenges with our robust
                              asset protection strategies.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Succession Planning:
                              </span>
                              Plan for the future of your estate. Our succession planning ensures a
                              smooth transfer of your assets to the next generation.

                           </p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5 mt-md-0 mt-3\">
                     <img src=\"image/sos31.png\" alt width=\"100%\">
                  </div>
                  <div class=\"col-md-12 mt-3\">
                     <img src=\"image/sos32.png\" alt width=\"100%\">
                  </div>
                  
               </div>
            </div>
            <div class=\"tab-pane \" id=\"tab5\">
               <div class=\"row \">
                  <div class=\"col-md-7\">
                     <h3 class=\"mt-0\" style=\"color:#000;\">
                        Insurance Planning</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Health Insurance:
                              </span>
                              Health expenses can be unpredictable. We find the best health insurance
                              plans to cover you and your family.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">
                                 Life Insurance:
                              </span>
                              Protect your loved ones with life insurance policies that provide financial
                              security when it’s needed most.
                           </p>
                        </div>
                     </div>
                     <div class=\"row mt-3\">
                        <div class=\"col-md-1 col-1 pr-0 text-center justify-content-center pt-2\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-11 col-11\">
                           <p style=\"font-size: 16px;\">
                              <span style=\"font-weight: 700;color:#000;\">Vehicle Insurance:
                              </span>
                              Drive with confidence. We recommend comprehensive vehicle insurance
                              to keep you covered on the road.


                           </p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-5 mt-md-0 mt-3\">
                     <img src=\"image/sos41.png\" alt width=\"100%\">
                  </div>
                  <div class=\"col-md-12 mt-3\">
                     <img src=\"image/sos42.png\" alt width=\"100%\">
                  </div>
                  
               </div>
            </div>

         </div>
      </div>
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
               <div class=\"accordion-item mt-0\" style=\"position: relative;\">
                  <button class=\"accordion-header\" data-target=\"content1\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"><img src=\"image/snicon.png\" alt></div>
                        <div class=\"col-md-11 col-10 align-content-center\">
                           <h4 style=\"color:#000;font-weight:500;\">Creative
                              design</h4>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Financial
                                 Management:</span>
                              From day-to-day operations to
                              long-term planning, our financial management
                              services keep your business on track.
                           </p>
                        </div>
                        <div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\">
                           <i class=\"fas fa-chevron-down\"></i>
                        </div>
                     </div>
                  </button>
                  <div class=\"accordion-content\" id=\"content1\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2 \"></div>
                        <div class=\"col-md-11 col-10 pl-0\">
                           <p class=\"mt-0\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Mergers and
                                 Acquisitions:</span>
                              Thinking of expanding? We provide strategic advice
                              and support to navigate M&A activities
                              smoothly.
                           </p>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Risk Management:</span>
                              Identify and mitigate financial
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
                           <h4 style=\"color:#000;font-weight:500;\">Business Planning and Strategy</h4>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Business Plan
                                 Development:</span>
                              Turn your vision into a solid plan. We help you craft detailed and
                              actionable business plans.
                           </p>
                        </div>
                        <div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\">
                           <i class=\"fas fa-chevron-down\"></i>
                        </div>
                     </div>
                  </button>
                  <div class=\"accordion-content\" id=\"content2\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"></div>
                        <div class=\"col-md-11 col-10 pl-0\">
                           <p class=\"mt-0\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Mergers and
                                 Acquisitions:</span>
                              Thinking of expanding? We provide strategic advice
                              and support to navigate M&A activities
                              smoothly.
                           </p>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Risk Management:</span>
                              Identify and mitigate financial
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
                           <h4 style=\"color:#000;font-weight:500;\">Tax Compliance and Strategy</h4>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Corporate Tax
                                 Planning:</span>
                              Maximize your business’s tax efficiency. Our corporate tax strategies
                              help you minimize liabilities and save money.
                           </p>
                        </div>
                        <div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\">
                           <i class=\"fas fa-chevron-down\"></i>
                        </div>
                     </div>
                  </button>
                  <div class=\"accordion-content\" id=\"content3\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"></div>
                        <div class=\"col-md-11 col-10 pl-0\">
                           <p class=\"mt-0\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Mergers and
                                 Acquisitions:</span>
                              Thinking of expanding? We provide strategic advice
                              and support to navigate M&A activities
                              smoothly.
                           </p>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Risk Management:</span>
                              Identify and mitigate financial
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
                           <h4 style=\"color:#000;font-weight:500;\">Employee Benefits Planning</h4>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Health and Wellness
                                 Programs:</span>
                              Create a healthier workplace. Our health and wellness programs keep
                              your employees happy and productive.
                           </p>
                        </div>
                        <div class=\"\" style=\"    position: absolute; bottom: 10px; right: 30px;\">
                           <i class=\"fas fa-chevron-down\"></i>
                        </div>
                     </div>
                  </button>
                  <div class=\"accordion-content\" id=\"content4\">
                     <div class=\"row\">
                        <div class=\"col-md-1 col-2\"></div>
                        <div class=\"col-md-11 col-10 pl-0\">
                           <p class=\"mt-0\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Mergers and
                                 Acquisitions:</span>
                              Thinking of expanding? We provide strategic advice
                              and support to navigate M&A activities
                              smoothly.
                           </p>
                           <p class=\"mt-3\" style=\"color:#6C6C72;\">
                              <span style=\"font-weight: 600;\">• Risk Management:</span>
                              Identify and mitigate financial
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
        // line 667
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
        return array (  736 => 667,  200 => 133,  191 => 130,  186 => 129,  182 => 128,  176 => 124,  167 => 121,  162 => 120,  158 => 119,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/solution.twig", "");
    }
}
