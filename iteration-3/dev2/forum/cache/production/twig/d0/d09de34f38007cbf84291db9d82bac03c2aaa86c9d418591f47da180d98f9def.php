<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* notification_dropdown.html */
class __TwigTemplate_72812734e1e2119f82c113ca9638052af782b3fdaf82e4e5f4d615ea43ad22b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"notification_list\" class=\"dropdown dropdown-extended notification_list\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<div class=\"dropdown-contents\">
\t\t<div class=\"header\">

\t\t\t\t<a href=\"";
        // line 6
        echo (isset($context["U_NOTIFICATION_SETTINGS"]) ? $context["U_NOTIFICATION_SETTINGS"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</a>
\t\t\t\t";
        // line 7
        if ((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
            // line 8
            echo "\t\t\t\t\t<span id=\"mark_all_notifications\"> &bull; <a href=\"";
            echo (isset($context["U_MARK_ALL_NOTIFICATIONS"]) ? $context["U_MARK_ALL_NOTIFICATIONS"] : null);
            echo "\" data-ajax=\"notification.mark_all_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL_READ");
            echo "</a></span>
\t\t\t\t";
        }
        // line 10
        echo "
\t\t</div>

\t\t<ul>
\t\t\t";
        // line 14
        if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", []))) {
            // line 15
            echo "\t\t\t\t<li class=\"no_notifications\">
\t\t\t\t\t";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        // line 19
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", []));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 20
            echo "\t\t\t\t<li class=\"";
            if ($this->getAttribute($context["notifications"], "UNREAD", [])) {
                echo " bg2";
            }
            if ($this->getAttribute($context["notifications"], "STYLING", [])) {
                echo " ";
                echo $this->getAttribute($context["notifications"], "STYLING", []);
            }
            if ( !$this->getAttribute($context["notifications"], "URL", [])) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t";
            // line 21
            if ($this->getAttribute($context["notifications"], "URL", [])) {
                // line 22
                echo "\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if ($this->getAttribute($context["notifications"], "UNREAD", [])) {
                    echo $this->getAttribute($context["notifications"], "U_MARK_READ", []);
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute($context["notifications"], "URL", []);
                } else {
                    echo $this->getAttribute($context["notifications"], "URL", []);
                }
                echo "\">
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "AVATAR", [])) {
                echo $this->getAttribute($context["notifications"], "AVATAR", []);
            } else {
                echo "<i class=\"icon fa-fw fa-user\"></i>";
            }
            // line 25
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 26
            echo $this->getAttribute($context["notifications"], "FORMATTED_TITLE", []);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 27
            if ($this->getAttribute($context["notifications"], "REFERENCE", [])) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute($context["notifications"], "REFERENCE", []);
                echo "</p>";
            }
            // line 28
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "FORUM", [])) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute($context["notifications"], "FORUM", []);
                echo "</p>";
            }
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "REASON", [])) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute($context["notifications"], "REASON", []);
                echo "</p>";
            }
            // line 30
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo $this->getAttribute($context["notifications"], "TIME", []);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 32
            if ($this->getAttribute($context["notifications"], "URL", [])) {
                echo "</a>";
            }
            // line 33
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "UNREAD", [])) {
                // line 34
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["notifications"], "U_MARK_READ", []);
                echo "\" class=\"mark_read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "\">
\t\t\t\t\t\t\t <i class=\"icon fa-check-circle icon-xl fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 35
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t</ul>

\t\t<div class=\"footer\">
\t\t\t<a href=\"";
        // line 43
        echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
        echo "\"><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEE_ALL");
        echo "</span></a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 43,  170 => 40,  163 => 38,  157 => 35,  150 => 34,  147 => 33,  143 => 32,  137 => 30,  130 => 29,  123 => 28,  117 => 27,  113 => 26,  110 => 25,  103 => 24,  91 => 22,  89 => 21,  75 => 20,  70 => 19,  64 => 16,  61 => 15,  59 => 14,  53 => 10,  45 => 8,  43 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "notification_dropdown.html", "");
    }
}
