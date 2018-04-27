<?php

/* modular/hero.html.twig */
class __TwigTemplate_f67e7c8634734b2b3b7d711b4fe2e6d8488ab1023bba51b9e9b47076d301604e extends Twig_Template
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
        echo ($context["content"] ?? null);
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{content}}", "modular/hero.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/my-theme/templates/modular/hero.html.twig");
    }
}
