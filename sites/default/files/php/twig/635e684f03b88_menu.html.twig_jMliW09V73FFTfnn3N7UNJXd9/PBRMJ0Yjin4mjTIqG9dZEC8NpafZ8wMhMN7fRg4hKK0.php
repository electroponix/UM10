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

/* themes/contrib/d8w3css/templates/navigation/menu.html.twig */
class __TwigTemplate_a82d33a8601dfbe3590bf90dadc736a2 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 26, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 27
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 28
            echo "  ";
            $macros["menus"] = $this;
            // line 29
            echo "  ";
            // line 30
            $context["menu_classes"] = [0 => ("ul-parent ul-parent-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 31
($context["menu_name"] ?? null), 31, $this->source)))];
            // line 34
            echo "  ";
            // line 35
            $context["submenu_classes"] = [0 => ("ul-child ul-child-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 36
($context["menu_name"] ?? null), 36, $this->source)))];
            // line 39
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 40
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 41
                    echo "<ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo " role=\"menu\">
  ";
                } else {
                    // line 43
                    echo "  <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 43), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo " role=\"menu\">
    ";
                }
                // line 45
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "      ";
                    // line 47
                    $context["item_classes"] = [0 => ("li-item li-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 48
($context["menu_name"] ?? null), 48, $this->source))), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "is_expanded", [], "any", false, false, true, 49)) ? ("li-expanded") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "is_expanded", [], "any", false, false, true, 50) && (($context["menu_level"] ?? null) == 0))) ? ("li-parent") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "in_active_trail", [], "any", false, false, true, 51)) ? ("active") : (""))];
                    // line 54
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 54))) {
                        // line 55
                        echo "      <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 55), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 56
                        if (((is_string($__internal_compile_0 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 56))) && is_string($__internal_compile_1 = "/") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))) || (is_string($__internal_compile_2 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 56))) && is_string($__internal_compile_3 = "http") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3))))) {
                            // line 57
                            echo "          <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "\" class=\"w3-button link-enabled clickable-dropdown-menu-link toggle-parent\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "</a>
          <span class=\"dropdown-arrow w3-hover-over clickable-dropdown-menu-fa-down\">
              ";
                            // line 60
                            echo "              <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\"><path d=\"M6 9l6 6 6-6\"/></svg>
          </span>
        ";
                        } else {
                            // line 63
                            echo "          <a href=\"#\" class=\"w3-button link-disabled tMenu toggle-parent\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                            echo "
            <span class=\"dropdown-arrow\">
              ";
                            // line 66
                            echo "              <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\"><path d=\"M6 9l6 6 6-6\"/></svg>
            </span>
          </a>
        ";
                        }
                        // line 70
                        echo "      ";
                    } elseif (((($context["menu_level"] ?? null) != 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 70))) {
                        // line 71
                        echo "      <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 71), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 72
                        if (((is_string($__internal_compile_4 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72))) && is_string($__internal_compile_5 = "/") && ('' === $__internal_compile_5 || 0 === strpos($__internal_compile_4, $__internal_compile_5))) || (is_string($__internal_compile_6 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72))) && is_string($__internal_compile_7 = "http") && ('' === $__internal_compile_7 || 0 === strpos($__internal_compile_6, $__internal_compile_7))))) {
                            // line 73
                            echo "          <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                            echo "\" class=\"w3-button link-enabled clickable-dropdown-menu-link toggle-child\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                            echo "</a>
          <span class=\"right-arrow w3-hover-over clickable-dropdown-menu-fa-right\">
            ";
                            // line 76
                            echo "            <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 18l6-6-6-6\"/></svg>
          </span>
          <span class=\"dropdown-arrow w3-hover-over clickable-dropdown-menu-fa-down\">
            ";
                            // line 80
                            echo "            <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\"><path d=\"M6 9l6 6 6-6\"/></svg>
          </span>
        ";
                        } else {
                            // line 83
                            echo "          <a href=\"#\" class=\"w3-button link-disabled tMenu toggle-child\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                            echo "
            <span class=\"right-arrow w3-hover-over\">
              ";
                            // line 86
                            echo "              <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 18l6-6-6-6\"/></svg>
            </span>
            <span class=\"dropdown-arrow w3-hover-over\">
              ";
                            // line 90
                            echo "              <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\"><path d=\"M6 9l6 6 6-6\"/></svg>
            </span>
          </a>
        ";
                        }
                        // line 94
                        echo "      ";
                    } else {
                        // line 95
                        echo "        ";
                        // line 96
                        $context["link_classes"] = [0 => ("w3-button li-link li-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                        // line 97
($context["menu_name"] ?? null), 97, $this->source)))];
                        // line 100
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 100), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 100), 100, $this->source), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 101
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 103
$context["item"], "title", [], "any", false, false, true, 103), 103, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 104
$context["item"], "url", [], "any", false, false, true, 104), 104, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 105
$context["item"], "attributes", [], "any", false, false, true, 105), "removeClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 105), "addClass", [0 => ($context["link_classes"] ?? null)], "method", false, false, true, 105), 105, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 106
$context["item"], "attributes", [], "any", false, false, true, 106), "setAttribute", [0 => "role", 1 => "menuitem"], "method", false, false, true, 106), 106, $this->source)), "html", null, true);
                        // line 108
                        echo "
      ";
                    }
                    // line 110
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 110)) {
                        // line 111
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 111), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 111, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 113
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "  </ul>
  ";
            }
            // line 117
            echo "  ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 117,  226 => 115,  219 => 113,  213 => 111,  210 => 110,  206 => 108,  204 => 106,  203 => 105,  202 => 104,  201 => 103,  200 => 101,  195 => 100,  193 => 97,  192 => 96,  190 => 95,  187 => 94,  181 => 90,  176 => 86,  170 => 83,  165 => 80,  160 => 76,  152 => 73,  150 => 72,  145 => 71,  142 => 70,  136 => 66,  130 => 63,  125 => 60,  117 => 57,  115 => 56,  110 => 55,  107 => 54,  105 => 51,  104 => 50,  103 => 49,  102 => 48,  101 => 47,  99 => 46,  94 => 45,  88 => 43,  82 => 41,  79 => 40,  76 => 39,  74 => 36,  73 => 35,  71 => 34,  69 => 31,  68 => 30,  66 => 29,  63 => 28,  47 => 27,  41 => 26,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/navigation/menu.html.twig", "/app/themes/contrib/d8w3css/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 27, "set" => 30, "if" => 39, "for" => 45);
        static $filters = array("clean_class" => 31, "escape" => 41, "render" => 56);
        static $functions = array("link" => 102);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape', 'render'],
                ['link']
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
