<?php

/* modular.html.twig */
class __TwigTemplate_910b769de1ec4d8dd57fbcb8d58ee5a5f5ae943ddb099df7d301a4ee6c4681f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_top($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $context["hero"] = twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "collection", array()));
        // line 6
        echo "
";
        // line 7
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["hero"] ?? null), "media", array()), "images", array()));
        // line 8
        echo "
<div class=\"top_wrap\" style=\"background-image: url(";
        // line 9
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
        echo ");\">

  ";
        // line 11
        $this->displayParentBlock("top", $context, $blocks);
        echo "

  ";
        // line 13
        echo $this->getAttribute(($context["hero"] ?? null), "content", array());
        echo "

</div>

";
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        // line 20
        echo "  <main>
    ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["name"] => $context["module"]) {
            // line 23
            echo "      ";
            if (($context["name"] != "_hero")) {
                // line 24
                echo "        ";
                echo $this->getAttribute($context["module"], "content", array());
                echo "
      ";
            }
            // line 26
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </main>
";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  87 => 26,  81 => 24,  78 => 23,  74 => 22,  70 => 21,  67 => 20,  64 => 19,  55 => 13,  50 => 11,  45 => 9,  42 => 8,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block top %}

{% set hero = page.collection|first %}

{% set hero_image = hero.media.images|first %}

<div class=\"top_wrap\" style=\"background-image: url({{ hero_image.url }});\">

  {{ parent() }}

  {{hero.content}}

</div>

{% endblock %}

{% block main %}
  <main>
    {{ page.content }}
    {% for name, module in page.collection() %}
      {% if name != '_hero' %}
        {{ module.content }}
      {% endif %}
    {% endfor %}
  </main>
{% endblock %}
", "modular.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/my-theme/templates/modular.html.twig");
    }
}
