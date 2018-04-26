<?php

/* item.html.twig */
class __TwigTemplate_1d18734c13937c1542a4ce992628908c48316246e039ec5f040fb3f782e88102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", array(0 => _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"), "/blog")), "method");
        // line 3
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_breadcrumbs", array(0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)));
        // line 4
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar", array(0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)));
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", array(0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)));
        // line 6
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_hero($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if (($context["hero_image_name"] ?? null)) {
            // line 10
            echo "        ";
            $context["hero_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), ($context["hero_image_name"] ?? null), array(), "array");
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</h1>
            <h2>";
            // line 13
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array());
            echo "</h2>
            ";
            // line 14
            $this->loadTemplate("partials/blog/date.html.twig", "item.html.twig", 14)->display($context);
            // line 15
            echo "            ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "item.html.twig", 15)->display($context);
            // line 16
            echo "        ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            $this->loadTemplate("partials/hero.html.twig", "item.html.twig", 17)->display(array_merge($context, array("id" => "blog-hero")));
            // line 18
            echo "
    ";
        }
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container ";
        // line 24
        echo ($context["grid_size"] ?? null);
        echo "\">

        ";
        // line 26
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 27
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 27)->display($context);
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        ";
        // line 30
        $this->loadTemplate("item.html.twig", "item.html.twig", 30, "10390149")->display($context);
        // line 38
        echo "
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  89 => 26,  84 => 24,  81 => 23,  78 => 22,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  61 => 14,  57 => 13,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
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
{% set blog = page.find(theme_var('blog-page')|default('/blog')) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog]) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])  %}
{% set show_pagination = header_var('show_pagination', [page, blog]) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/date.html.twig' %}
            {% include 'partials/blog/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item.html.twig' %}
            {% endblock %}
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>
{% endblock %}

", "item.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/quark/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_1d18734c13937c1542a4ce992628908c48316246e039ec5f040fb3f782e88102_10390149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "item.html.twig", 30);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_item($context, array $blocks = array())
    {
        // line 32
        echo "                ";
        $this->loadTemplate("partials/blog-item.html.twig", "item.html.twig", 32)->display($context);
        // line 33
        echo "            ";
    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        // line 35
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 35)->display($context);
        // line 36
        echo "            ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 36,  219 => 35,  216 => 34,  212 => 33,  209 => 32,  206 => 31,  188 => 30,  102 => 38,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  89 => 26,  84 => 24,  81 => 23,  78 => 22,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  61 => 14,  57 => 13,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
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
{% set blog = page.find(theme_var('blog-page')|default('/blog')) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog]) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])  %}
{% set show_pagination = header_var('show_pagination', [page, blog]) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/date.html.twig' %}
            {% include 'partials/blog/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item.html.twig' %}
            {% endblock %}
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>
{% endblock %}

", "item.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/quark/templates/item.html.twig");
    }
}
