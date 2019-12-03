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

/* navbar_header.html */
class __TwigTemplate_864ef9bce35fb3b1521355aa78561c1aec134ab0f2fae7e20f6ba1cb2509a399 extends \Twig\Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 5
        $value = " itemtype=\"http://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        $context['definition']->set('MICRODATA', $value);
        // line 6
        echo "\t\t";
        $context["navlink_position"] = 1;
        // line 7
        echo "\t\t";
        // line 8
        echo "\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t";
        // line 9
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 10
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", []);
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo (isset($context["navlink_position"]) ? $context["navlink_position"] : null);
            $context["navlink_position"] = ((isset($context["navlink_position"]) ? $context["navlink_position"] : null) + 1);
            echo "\" /></span>
\t\t\t";
        }
        // line 12
        echo "\t\t\t";
        // line 13
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", []);
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !(isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo (isset($context["navlink_position"]) ? $context["navlink_position"] : null);
        $context["navlink_position"] = ((isset($context["navlink_position"]) ? $context["navlink_position"] : null) + 1);
        echo "\" /></span>

\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", []));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 16
            echo "\t\t\t\t";
            // line 17
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", []);
            if ($this->getAttribute($context["navlinks"], "MICRODATA", [])) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", []);
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", []);
            echo "\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\"><span itemprop=\"name\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", []);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo (isset($context["navlink_position"]) ? $context["navlink_position"] : null);
            $context["navlink_position"] = ((isset($context["navlink_position"]) ? $context["navlink_position"] : null) + 1);
            echo "\" /></span>
\t\t\t\t";
            // line 18
            // line 19
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t";
        // line 21
        echo "\t\t</li>
\t\t";
        // line 22
        // line 23
        echo "
\t\t";
        // line 24
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 25
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 26
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 27
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 31
        echo "
\t\t";
        // line 32
        if ((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null)) {
            // line 33
            echo "\t\t\t";
            if ((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null)) {
                // line 34
                echo "\t\t\t\t<li class=\"rightside mark-read\">
\t\t\t\t\t<a href=\"";
                // line 35
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\"  accesskey=\"m\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
                echo "\" data-ajax=\"mark_forums_read\">
\t\t\t\t\t\t<i class=\"icon fp-forum-read fa-fw\"></i><span>";
                // line 36
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 40
            echo "\t\t";
        } elseif ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
            // line 41
            echo "\t\t\t";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                // line 42
                echo "\t\t\t\t<li class=\"rightside mark-read\">
\t\t\t\t\t<a href=\"";
                // line 43
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "\" data-ajax=\"mark_forums_read\">
\t\t\t\t\t\t<i class=\"icon fp-forum-read fa-fw\"></i><span>";
                // line 44
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 48
            echo "\t\t";
        }
        // line 49
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 49,  183 => 48,  176 => 44,  170 => 43,  167 => 42,  164 => 41,  161 => 40,  154 => 36,  148 => 35,  145 => 34,  142 => 33,  140 => 32,  137 => 31,  130 => 27,  124 => 26,  121 => 25,  119 => 24,  116 => 23,  115 => 22,  112 => 21,  110 => 20,  104 => 19,  103 => 18,  87 => 17,  85 => 16,  81 => 15,  64 => 13,  62 => 12,  49 => 10,  47 => 9,  44 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
