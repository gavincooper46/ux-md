<?php

/* partials/blog-item.html.twig */
class __TwigTemplate_b3e5752ad2a75fdc68aad4dded9a3a932017a296917517a0e8e41060faea6943 extends Twig_Template
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
        echo "<div class=\"content-item h-entry\">

";
        // line 3
        if ( !($context["hero_image_name"] ?? null)) {
            // line 4
            echo "    <div class=\"content-title text-center\">
        ";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 5)->display(array_merge($context, array("title_level" => "h2")));
            // line 6
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array())) {
                // line 7
                echo "        <h3 >";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array());
                echo "</h3>
        ";
            }
            // line 9
            echo "        ";
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 9)->display($context);
            // line 10
            echo "        ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 10)->display($context);
            // line 11
            echo "    </div>
";
        }
        // line 13
        echo "
    <div class=\"e-content\">
        ";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>

    ";
        // line 18
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array()))) {
            // line 19
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 19)->display($context);
            // line 20
            echo "    ";
        }
        // line 21
        echo "

</div>

<p class=\"prev-next text-center\">


    ";
        // line 28
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
            // line 29
            echo "            <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
            echo "\"><i class=\"fa fa-angle-left\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
            echo "</a>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
            // line 33
            echo "        <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
            echo " <i class=\"fa fa-angle-right\"></i></a>
    ";
        }
        // line 35
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  91 => 33,  89 => 32,  86 => 31,  78 => 29,  76 => 28,  67 => 21,  64 => 20,  61 => 19,  59 => 18,  53 => 15,  49 => 13,  45 => 11,  42 => 10,  39 => 9,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-item h-entry\">

{% if not hero_image_name %}
    <div class=\"content-title text-center\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
        {% if page.header.subtitle %}
        <h3 >{{ page.header.subtitle }}</h3>
        {% endif %}
        {% include 'partials/blog/date.html.twig' %}
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
{% endif %}

    <div class=\"e-content\">
        {{ page.content }}
    </div>

    {% if page.header.continue_link is sameas(true) and config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}


</div>

<p class=\"prev-next text-center\">


    {% if not page.isLast %}
            <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-angle-left\"></i> {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
    {% endif %}

    {% if not page.isFirst %}
        <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
    {% endif %}
</p>
", "partials/blog-item.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/quark/templates/partials/blog-item.html.twig");
    }
}
