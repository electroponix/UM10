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

/* themes/contrib/d8w3css/templates/layout/page.html.twig */
class __TwigTemplate_854a52a4f10b97f8611e86741c937f5d extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 57)) {
            // line 58
            echo "  <!-- Start: Main Navigation - Vertical -->
<div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-theme ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 59, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\">
  <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
    <div id=\"close-nav\" class=\"close-nav w3-button w3-bar-block w3-large w3-theme ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 61, $this->source), "html", null, true);
            echo "\">
      ";
            // line 63
            echo "      <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
        <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
        <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
      </svg>
    </div>
    ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
  </div>
</div>
<!-- End: Main Navigation - Vertical -->
";
        }
        // line 73
        echo "<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-col w3-clear w3-animate-opacity w3-text-theme ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_wrapper"] ?? null), 74, $this->source), "html", null, true);
        echo "\">

  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-col w3-clear w3-theme-l4 ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sitename_animation"] ?? null), 77, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_header"] ?? null), 77, $this->source), "html", null, true);
        echo "\" role=\"banner\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
    <div id=\"header-inner\" class=\"w3-container header-inner ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 78, $this->source), "html", null, true);
        echo "\">
      ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 79)) {
            // line 80
            echo "      <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left w3-button w3-left-align w3-large w3-theme ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 80, $this->source), "html", null, true);
            echo "\">
        ";
            // line 82
            echo "        <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
          <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
          <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
          <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
        </svg>
      </div>
      ";
        }
        // line 89
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 89)) {
            // line 90
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 92
        echo "    </div>
  </header>
  <!-- End: Header -->

  ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96)) {
            // line 97
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"w3-col w3-clear main-navigation-wrapper w3-theme ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 98, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-h\" class=\"w3-row main-navigation-inner-h ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 99, $this->source), "html", null, true);
            echo "\">
      <div class=\"mobile-nav w3-hide-large w3-button w3-block w3-right-align w3-large w3-theme ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 100, $this->source), "html", null, true);
            echo "\">
        ";
            // line 102
            echo "        <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
          <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
          <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
          <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
        </svg>
      </div>
      ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 113
        echo "
  ";
        // line 114
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 114))) {
            // line 115
            echo "  <!-- Start: Welcome Text -->
  <div id=\"welcome-text\" class=\"w3-col w3-clear w3-theme-l5 ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_welcome_text"] ?? null), 116, $this->source), "html", null, true);
            echo "\">
    <div id=\"welcome-text-inner\" class=\"w3-row welcome-text-inner ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 117, $this->source), "html", null, true);
            echo "\">
      ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Welcome Text -->
  ";
        }
        // line 123
        echo "
  ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 124)) {
            // line 125
            echo "  <!-- Start: Highlighted -->
  <div id=\"highlighted\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_highlighted"] ?? null), 126, $this->source), "html", null, true);
            echo "\">
    <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 127, $this->source), "html", null, true);
            echo "\">
      ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Highlighted -->
  ";
        }
        // line 133
        echo "
  ";
        // line 134
        if (($context["is_front"] ?? null)) {
            // line 135
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 135) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 135)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 135))) {
                // line 136
                echo "  <!-- Start: Top Container -->
  <div id=\"top-container\" class=\"w3-col w3-clear w3-theme-l4 ";
                // line 137
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_container"] ?? null), 137, $this->source), "html", null, true);
                echo "\">
    <div id=\"top-container-inner\" class=\"w3-row-padding top-container-inner ";
                // line 138
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 138, $this->source), "html", null, true);
                echo "\">
      ";
                // line 139
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 139)) {
                    // line 140
                    echo "      <!-- Start: Top container first region -->
      <div class=\"";
                    // line 141
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 141, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " first-top\">
        <div class=\"d8-fade w3-mobile ";
                    // line 142
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_first"] ?? null), 142, $this->source), "html", null, true);
                    echo "\">
         ";
                    // line 143
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container First -->
      ";
                }
                // line 148
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 148)) {
                    // line 149
                    echo "      <!-- Start: Top Container Second  -->
      <div class=\"";
                    // line 150
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 150, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " second-top\">
        <div class=\"d8-fade w3-mobile ";
                    // line 151
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_second"] ?? null), 151, $this->source), "html", null, true);
                    echo "\">
         ";
                    // line 152
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container Second -->
      ";
                }
                // line 157
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 157)) {
                    // line 158
                    echo "      <!-- Start: Top Container Third -->
      <div class=\"";
                    // line 159
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 159, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " third-top\">
        <div class=\"d8-fade w3-mobile ";
                    // line 160
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_third"] ?? null), 160, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 161
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container Third -->
      ";
                }
                // line 166
                echo "    </div>
  </div>
  <!-- End: Top container -->
    ";
            }
            // line 170
            echo "  ";
        }
        // line 171
        echo "
  ";
        // line 172
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 172) &&  !($context["is_front"] ?? null))) {
            // line 173
            echo "  <!-- Start: Page Title -->
  <div id=\"page-title\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagetitle_animation"] ?? null), 174, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_title"] ?? null), 174, $this->source), "html", null, true);
            echo "\">
    <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 175, $this->source), "html", null, true);
            echo "\">
      ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Page Title -->
  ";
        }
        // line 181
        echo "
  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-col w3-clear w3-theme-l5 ";
        // line 183
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_main"] ?? null), 183, $this->source), "html", null, true);
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-row main-container-inner ";
        // line 184
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 184, $this->source), "html", null, true);
        echo "\">
      ";
        // line 185
        if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 185))))) {
            // line 186
            echo "      <!-- Breadcrumb -->
      <div class=\"w3-row w3-breadcrumb ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_breadcrumb"] ?? null), 187, $this->source), "html", null, true);
            echo "\">
        ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
      </div>
      <!-- End: Breadcrumb -->
      ";
        }
        // line 192
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-col w3-clear w3-row-padding\">
        ";
        // line 194
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 194)) {
            // line 195
            echo "        <!-- Start Left SideBar -->
        <div class =\"";
            // line 196
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 196, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " first-sidebar\" role=\"complementary\">
          <div class=\"d8-fade w3-sidebar-first w3-mobile ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_first"] ?? null), 197, $this->source), "html", null, true);
            echo "\">
            ";
            // line 198
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Left SideBar -->
        ";
        }
        // line 203
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 203)) {
            // line 204
            echo "        <!-- Start: Main Content -->
        <div class=\"";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_w3css"] ?? null), 205, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " w3css-content\" role=\"main\">
          <div class=\"d8-fade w3-mobile ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_content"] ?? null), 206, $this->source), "html", null, true);
            echo "\">
            ";
            // line 207
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Main Content -->
        ";
        }
        // line 212
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 212)) {
            // line 213
            echo "        <!-- Start: Right SideBar -->
        <div class=\"";
            // line 214
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 214, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " second-sidebar\" role=\"complementary\">
          <div class=\"d8-fade w3-sidebar-second w3-mobile ";
            // line 215
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_second"] ?? null), 215, $this->source), "html", null, true);
            echo "\">
            ";
            // line 216
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Right SideBar -->
        ";
        }
        // line 221
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->

  ";
        // line 227
        if (($context["is_front"] ?? null)) {
            // line 228
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 228) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 228)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 228)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 228))) {
                // line 229
                echo "      <!-- Start: Bottom -->
  <div id=\"bottom-container\" class=\"w3-col w3-clear w3-theme-l2 ";
                // line 230
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_container"] ?? null), 230, $this->source), "html", null, true);
                echo "\">
    <div id=\"bottom-container-inner\" class=\"w3-row-padding bottom-container-inner ";
                // line 231
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 231, $this->source), "html", null, true);
                echo "\">
      ";
                // line 232
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 232)) {
                    // line 233
                    echo "      <!-- Start: Bottom First -->
      <div class=\"";
                    // line 234
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 234, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " first-bottom\">
        <div class=\"d8-fade w3-mobile ";
                    // line 235
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_first"] ?? null), 235, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 236
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom First -->
      ";
                }
                // line 241
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 241)) {
                    // line 242
                    echo "      <!-- Start: Bottom Second -->
      <div class=\"";
                    // line 243
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 243, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " second-bottom\">
        <div class=\"d8-fade w3-mobile ";
                    // line 244
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_second"] ?? null), 244, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 245
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Second -->
      ";
                }
                // line 250
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 250)) {
                    // line 251
                    echo "      <!-- Start: Bottom Third  -->
      <div class=\"";
                    // line 252
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 252, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " third-bottom\">
        <div class=\"d8-fade w3-mobile ";
                    // line 253
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_third"] ?? null), 253, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 254
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Third -->
      ";
                }
                // line 259
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 259)) {
                    // line 260
                    echo "      <!-- Start: Bottom Forth  -->
      <div class =\"";
                    // line 261
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 261, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " forth-bottom\">
        <div class=\"d8-fade w3-mobile ";
                    // line 262
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_forth"] ?? null), 262, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 263
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Forth -->
      ";
                }
                // line 268
                echo "    </div>
  </div>
  <!-- End: Bottom -->
    ";
            }
            // line 272
            echo "  ";
        }
        // line 273
        echo "
  ";
        // line 274
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 274) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 274)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 274))) {
            // line 275
            echo "  <!-- start: Footer -->
  <div id=\"footer-container\" class=\"w3-col w3-clear w3-theme-d3 ";
            // line 276
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_container"] ?? null), 276, $this->source), "html", null, true);
            echo "\">
    <div id=\"footer-container-inner\" class=\"w3-row-padding footer-container-inner ";
            // line 277
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 277, $this->source), "html", null, true);
            echo "\">

      ";
            // line 279
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 279)) {
                // line 280
                echo "      <!-- Start: Footer First  -->
      <div class=\"";
                // line 281
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 281, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " first-footer\">
        <div class=\"d8-fade w3-mobile ";
                // line 282
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l4 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_first"] ?? null), 282, $this->source), "html", null, true);
                echo "\">
          ";
                // line 283
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
                echo "
        </div>
      </div>
      <!-- End: Footer First -->
      ";
            }
            // line 288
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 288)) {
                // line 289
                echo "      <!-- Start: Footer Second Region -->
      <div class=\"";
                // line 290
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 290, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " second-footer\">
        <div class=\"d8-fade w3-mobile ";
                // line 291
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l5 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_second"] ?? null), 291, $this->source), "html", null, true);
                echo "\">
          ";
                // line 292
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    <!-- End: Footer Second -->
      ";
            }
            // line 297
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 297)) {
                // line 298
                echo "      <!-- Start: Footer Third -->
      <div class=\"";
                // line 299
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 299, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " third-footer\">
        <div class=\"d8-fade w3-mobile ";
                // line 300
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l4 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_third"] ?? null), 300, $this->source), "html", null, true);
                echo "\">
          ";
                // line 301
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "
        </div>
      </div>
      <!-- End: Footer Third -->
      ";
            }
            // line 306
            echo "    </div>
  </div>
  <!-- End: Footer -->
  ";
        }
        // line 310
        echo "
  ";
        // line 311
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 311) || ($context["show_social_icon"] ?? null))) {
            // line 312
            echo "    <!-- Start: Footer Menu -->
  <div id=\"footer-menu\" class=\"w3-col w3-clear w3-theme-d4 ";
            // line 313
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_menu"] ?? null), 313, $this->source), "html", null, true);
            echo "\">
    <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 314
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 314, $this->source), "html", null, true);
            echo "\">
      ";
            // line 315
            if (($context["show_social_icon"] ?? null)) {
                // line 316
                echo "        <!-- Start: Social Media -->
      <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
        ";
                // line 318
                if (($context["facebook_url"] ?? null)) {
                    // line 319
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 319, $this->source), "html", null, true);
                    echo "\" title=\"Facebook\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-facebook\"></i></a>
        ";
                }
                // line 321
                echo "        ";
                if (($context["twitter_url"] ?? null)) {
                    // line 322
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 322, $this->source), "html", null, true);
                    echo "\" title=\"Twitter\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-twitter\"></i></a>
        ";
                }
                // line 324
                echo "        ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 325
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 325, $this->source), "html", null, true);
                    echo "\" title=\"Pinterest\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-pinterest\"></i></a>
        ";
                }
                // line 327
                echo "        ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 328
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 328, $this->source), "html", null, true);
                    echo "\" title=\"Google\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-google-plus\"></i></a>
        ";
                }
                // line 330
                echo "        ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 331
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 331, $this->source), "html", null, true);
                    echo "\" title=\"Linkedin\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-linkedin\"></i></a>
        ";
                }
                // line 333
                echo "        ";
                if (($context["instagram_url"] ?? null)) {
                    // line 334
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 334, $this->source), "html", null, true);
                    echo "\" title=\"Instagram\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-instagram\"></i></a>
        ";
                }
                // line 336
                echo "        ";
                if (($context["youtube_url"] ?? null)) {
                    // line 337
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 337, $this->source), "html", null, true);
                    echo "\" title=\"Youtube\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-youtube\"></i></a>
        ";
                }
                // line 339
                echo "        ";
                if (($context["drupal_url"] ?? null)) {
                    // line 340
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["drupal_url"] ?? null), 340, $this->source), "html", null, true);
                    echo "\" title=\"Drupal\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"w3-social-icon fa-drupal\"></i></a>
        ";
                }
                // line 342
                echo "        ";
                if (($context["rss_url"] ?? null)) {
                    // line 343
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 343, $this->source), "html", null, true);
                    echo "\" title=\"RSS Feed\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-orange w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"w3-social-icon fa-rss\"></i></a>
        ";
                }
                // line 345
                echo "      </div>
      <!-- End: Social Media -->
      ";
            }
            // line 348
            echo "      <!-- Start: Bottom Menu -->
      ";
            // line 349
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 349)) {
                // line 350
                echo "      <div class=\"d8-fade w3-container w3-center w3-mobile\">
        ";
                // line 351
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 351), 351, $this->source), "html", null, true);
                echo "
      </div>
      <!-- End: Bottom Menu -->
      ";
            }
            // line 355
            echo "    </div>
  </div>
  <!-- End: Footer Menu -->
  ";
        }
        // line 359
        echo "
  ";
        // line 360
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 361
            echo "  <!-- Start: Copyright -->
  <div id=\"copyright\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 362
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_copyright"] ?? null), 362, $this->source), "html", null, true);
            echo "\">
    <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 363
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 363, $this->source), "html", null, true);
            echo "\">
      ";
            // line 364
            if (($context["copyright_text"] ?? null)) {
                // line 365
                echo "      <!-- Start: Copyright -->
      <div class=\"w3-half w3-container w3-mobile\">
        <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">";
                // line 367
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 367, $this->source), "html", null, true);
                echo "</p>
      </div>
      <!-- End: Copyright -->
      ";
            }
            // line 371
            echo "      ";
            if (($context["show_credit_link"] ?? null)) {
                // line 372
                echo "      <!-- Start: Credit Link -->
      <div class=\"w3-half w3-container w3-mobile\">
        <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Developed &#38; Designed by <a href=\"https://www.alaahaddad.com\" title=\"Alaa Haddad\" target=\"_blank\">Alaa Haddad</a></p>
      </div>
      <!-- End: Credit Link -->
      ";
            }
            // line 378
            echo "    </div>
  </div>
  <!-- End: Copyright -->
  ";
        }
        // line 382
        echo "</div>
<!-- End: Page Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  850 => 382,  844 => 378,  836 => 372,  833 => 371,  826 => 367,  822 => 365,  820 => 364,  816 => 363,  812 => 362,  809 => 361,  807 => 360,  804 => 359,  798 => 355,  791 => 351,  788 => 350,  786 => 349,  783 => 348,  778 => 345,  772 => 343,  769 => 342,  763 => 340,  760 => 339,  754 => 337,  751 => 336,  745 => 334,  742 => 333,  736 => 331,  733 => 330,  727 => 328,  724 => 327,  718 => 325,  715 => 324,  709 => 322,  706 => 321,  700 => 319,  698 => 318,  694 => 316,  692 => 315,  688 => 314,  684 => 313,  681 => 312,  679 => 311,  676 => 310,  670 => 306,  662 => 301,  656 => 300,  650 => 299,  647 => 298,  644 => 297,  636 => 292,  630 => 291,  624 => 290,  621 => 289,  618 => 288,  610 => 283,  604 => 282,  598 => 281,  595 => 280,  593 => 279,  588 => 277,  584 => 276,  581 => 275,  579 => 274,  576 => 273,  573 => 272,  567 => 268,  559 => 263,  553 => 262,  547 => 261,  544 => 260,  541 => 259,  533 => 254,  527 => 253,  521 => 252,  518 => 251,  515 => 250,  507 => 245,  501 => 244,  495 => 243,  492 => 242,  489 => 241,  481 => 236,  475 => 235,  469 => 234,  466 => 233,  464 => 232,  460 => 231,  456 => 230,  453 => 229,  450 => 228,  448 => 227,  440 => 221,  432 => 216,  428 => 215,  422 => 214,  419 => 213,  416 => 212,  408 => 207,  404 => 206,  398 => 205,  395 => 204,  392 => 203,  384 => 198,  380 => 197,  374 => 196,  371 => 195,  369 => 194,  365 => 192,  358 => 188,  354 => 187,  351 => 186,  349 => 185,  345 => 184,  341 => 183,  337 => 181,  329 => 176,  325 => 175,  319 => 174,  316 => 173,  314 => 172,  311 => 171,  308 => 170,  302 => 166,  294 => 161,  288 => 160,  282 => 159,  279 => 158,  276 => 157,  268 => 152,  262 => 151,  256 => 150,  253 => 149,  250 => 148,  242 => 143,  236 => 142,  230 => 141,  227 => 140,  225 => 139,  221 => 138,  217 => 137,  214 => 136,  211 => 135,  209 => 134,  206 => 133,  198 => 128,  194 => 127,  190 => 126,  187 => 125,  185 => 124,  182 => 123,  174 => 118,  170 => 117,  166 => 116,  163 => 115,  161 => 114,  158 => 113,  150 => 108,  142 => 102,  138 => 100,  134 => 99,  128 => 98,  125 => 97,  123 => 96,  117 => 92,  111 => 90,  108 => 89,  99 => 82,  94 => 80,  92 => 79,  88 => 78,  80 => 77,  74 => 74,  71 => 73,  63 => 68,  56 => 63,  52 => 61,  45 => 59,  42 => 58,  39 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/layout/page.html.twig", "/app/themes/contrib/d8w3css/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 57);
        static $filters = array("escape" => 59, "t" => 59, "trim" => 185, "striptags" => 185, "render" => 185);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'trim', 'striptags', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
