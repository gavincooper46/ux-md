<?php

/* partials/blog/date.html.twig */
class __TwigTemplate_70a914b96678e006021483122168b79a2ea9f62548fe2d684c7d432cfda6cc71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<span class=\"blog-date\">
    <time class=\"dt-published\" datetime=\"";
        // line 2
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "c");
        echo "\">
        <i class=\"fa fa-calendar\"></i> ";
        // line 3
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", array()), "dateformat", array()), "short", array()));
        echo "
    </time>
</span>
";
    }

    public function getTemplateName()
    {
        return "partials/blog/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"blog-date\">
    <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
        <i class=\"fa fa-calendar\"></i> {{ page.date|date(system.pages.dateformat.short) }}
    </time>
</span>
", "partials/blog/date.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/quark/templates/partials/blog/date.html.twig");
    }
}
