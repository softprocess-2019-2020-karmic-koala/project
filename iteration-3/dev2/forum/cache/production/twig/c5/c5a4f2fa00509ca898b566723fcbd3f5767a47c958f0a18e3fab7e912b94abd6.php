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

/* ucp_agreement.html */
class __TwigTemplate_90693748799dc55abe7fa7aad113bc4ad6c4f875743602a17b8c7ea5f6e8640d extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null))) {
            // line 4
            echo "
";
            // line 5
            if ((isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null)) {
                // line 6
                echo "<script>
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
                // line 12
                echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
                echo "_lang=' + lang_iso + '; path=";
                echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
                echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit();
\t}
</script>

\t<form method=\"post\" action=\"";
                // line 18
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\" id=\"register\">
\t\t<p class=\"rightside\">
\t\t\t<label for=\"lang\">";
                // line 20
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
                echo "\">";
                echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
                echo "</select>
\t\t\t";
                // line 21
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t</p>
\t</form>

\t<div class=\"clear\"></div>

";
            }
            // line 28
            echo "
\t<form method=\"post\" action=\"";
            // line 29
            echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
            echo "\" id=\"agreement\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 34
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION");
            echo "</h2>
\t\t\t";
            // line 35
            // line 36
            echo "\t\t\t<p>";
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t";
            // line 37
            // line 38
            echo "\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 45
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                // line 46
                echo "\t\t\t<strong><a href=\"";
                echo (isset($context["U_COPPA_NO"]) ? $context["U_COPPA_NO"] : null);
                echo "\" class=\"button1\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_NO");
                echo "</a></strong>&nbsp; <a href=\"";
                echo (isset($context["U_COPPA_YES"]) ? $context["U_COPPA_YES"] : null);
                echo "\" class=\"button2\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_YES");
                echo "</a>
\t\t\t";
            } else {
                // line 48
                echo "\t\t\t<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AGREE");
                echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"not_agreed\" value=\"";
                // line 49
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_AGREE");
                echo "\" class=\"button2\" />
\t\t\t";
            }
            // line 51
            echo "\t\t\t";
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t";
            // line 52
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</fieldset>
\t\t</div>
\t</div>
\t</form>

";
        } elseif (        // line 58
(isset($context["S_AGREEMENT"]) ? $context["S_AGREEMENT"] : null)) {
            // line 59
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 63
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
            echo (isset($context["AGREEMENT_TITLE"]) ? $context["AGREEMENT_TITLE"] : null);
            echo "</h2>
\t\t\t<p>";
            // line 64
            echo (isset($context["AGREEMENT_TEXT"]) ? $context["AGREEMENT_TEXT"] : null);
            echo "</p>
\t\t</div>
\t\t</div>
\t</div>

";
        }
        // line 70
        echo "
";
        // line 71
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 71)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 71,  193 => 70,  184 => 64,  178 => 63,  172 => 59,  170 => 58,  161 => 52,  156 => 51,  151 => 49,  146 => 48,  134 => 46,  132 => 45,  123 => 38,  122 => 37,  113 => 36,  112 => 35,  106 => 34,  98 => 29,  95 => 28,  85 => 21,  76 => 20,  71 => 18,  60 => 12,  52 => 6,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_agreement.html", "");
    }
}
