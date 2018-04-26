<?php

/* partials/layout.html.twig */
class __TwigTemplate_939a0a7053f5728b2d1a7bf9b1c5aa63fd015655d70346f22fd0e032f3b75f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-9 col-md-12") : ("col-12"));
        // line 2
        $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-3 col-md-12") : ("col-12"));
        // line 3
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 5
        echo ($context["item_col"] ?? null);
        echo " extra-spacing\">
        ";
        // line 6
        $this->displayBlock('item', $context, $blocks);
        // line 7
        echo "    </div>
    ";
        // line 8
        if (($context["show_sidebar"] ?? null)) {
            // line 9
            echo "    <div id=\"sidebar\" class=\"column ";
            echo ($context["sidebar_col"] ?? null);
            echo "\">
        ";
            // line 10
            $this->displayBlock('sidebar', $context, $blocks);
            // line 11
            echo "    </div>
    ";
        }
        // line 13
        echo "</div>

";
    }

    // line 6
    public function block_item($context, array $blocks = array())
    {
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  57 => 6,  51 => 13,  47 => 11,  45 => 10,  40 => 9,  38 => 8,  35 => 7,  33 => 6,  29 => 5,  25 => 3,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
{% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ item_col }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
    {% if show_sidebar %}
    <div id=\"sidebar\" class=\"column {{ sidebar_col }}\">
        {% block sidebar %}{% endblock %}
    </div>
    {% endif %}
</div>

", "partials/layout.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/quark/templates/partials/layout.html.twig");
    }
}
