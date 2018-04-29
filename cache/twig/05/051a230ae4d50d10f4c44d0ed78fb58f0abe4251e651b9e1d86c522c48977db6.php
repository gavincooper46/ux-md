<?php

/* modular/features.html.twig */
class __TwigTemplate_c07d18b9d336b90272b4b5634a9a01964b8506cdba2c914cac2b4a54ab8bcf22 extends Twig_Template
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
        echo "<div class=\"standard_width\">
    <div class=\"features\">
      ";
        // line 3
        echo ($context["content"] ?? null);
        echo "
      <div class=\"features_list clearfix\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 6
            echo "        <div class=\"feature\">
          <i class=\"fa fa-fw fa-";
            // line 7
            echo $this->getAttribute($context["feature"], "icon", array());
            echo "\"></i>
          <h4>";
            // line 8
            echo $this->getAttribute($context["feature"], "header", array());
            echo "</h4>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </div>
    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  39 => 8,  35 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"standard_width\">
    <div class=\"features\">
      {{ content }}
      <div class=\"features_list clearfix\">
        {% for feature in page.header.features %}
        <div class=\"feature\">
          <i class=\"fa fa-fw fa-{{ feature.icon }}\"></i>
          <h4>{{ feature.header }}</h4>
        </div>
        {% endfor %}
      </div>
    </div>
  </div>
  ", "modular/features.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/my-theme/templates/modular/features.html.twig");
    }
}
