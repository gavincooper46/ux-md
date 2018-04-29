<?php

/* partials/base.html.twig */
class __TwigTemplate_34b251b5087aaeee366e867a58986a0165654c9a526b565f5d74ed5882d5ca80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
\t
\t<!-- Mobile Specific Metas-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" > 
\t
\t<title>";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
\t
\t<!-- CSS -->
\t";
        // line 13
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 14
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 15
        echo "\t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

</head>
<body>

";
        // line 20
        $this->displayBlock('top', $context, $blocks);
        // line 46
        $this->displayBlock('main', $context, $blocks);
        // line 50
        echo "</body>
</html>";
    }

    // line 20
    public function block_top($context, array $blocks = array())
    {
        // line 21
        echo "
<header class=\"doc_header clearfix\">
\t<div class=\"standard_width\">
\t\t<div class=\"page_title\">
\t\t\t<a href=\"";
        // line 25
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "</a>
\t\t</div>

<input type=\"checkbox\" id=\"open_menu\" class=\"open_menu\">
<label for=\"open_menu\" class=\"burger\"><i class=fa fa-bars\"></i>Open Menu</label>

<div class=\"page_menu\">
\t<ul>
\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 34
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 35
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
\t\t\t\t";
            // line 36
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
\t\t\t</a>
\t\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t \t</ul>

\t</div>
</header>
";
    }

    // line 46
    public function block_main($context, array $blocks = array())
    {
        // line 47
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "\t";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 48,  123 => 47,  120 => 46,  111 => 40,  101 => 36,  97 => 35,  94 => 34,  90 => 33,  77 => 25,  71 => 21,  68 => 20,  63 => 50,  61 => 46,  59 => 20,  50 => 15,  47 => 14,  45 => 13,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
\t
\t<!-- Mobile Specific Metas-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" > 
\t
\t<title>{% if header.title %} {{header.title|e ('html')}} | {% endif %} {{site.title|e ('html')}}</title>
\t
\t<!-- CSS -->
\t{% do assets.addCss ('theme://css/font-awesome.min.css')%}
\t{% do assets.addCss ('theme://css/custom.css')%}
\t{{ assets.css() }}

</head>
<body>

{% block top %}

<header class=\"doc_header clearfix\">
\t<div class=\"standard_width\">
\t\t<div class=\"page_title\">
\t\t\t<a href=\"{{ base_url == '' ? '/' : base_url }}\">{{config.site.title}}</a>
\t\t</div>

<input type=\"checkbox\" id=\"open_menu\" class=\"open_menu\">
<label for=\"open_menu\" class=\"burger\"><i class=fa fa-bars\"></i>Open Menu</label>

<div class=\"page_menu\">
\t<ul>
\t\t{% for page in pages.children.visible  %}
\t\t<li>
\t\t\t<a href=\"{{ page.url }}\">
\t\t\t\t{{ page.menu }}
\t\t\t</a>
\t\t</li>
{% endfor %}

\t \t</ul>

\t</div>
</header>
{% endblock %}
{% block main %}
\t{% block content %}
\t{% endblock %}
{% endblock %}
</body>
</html>", "partials/base.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/my-theme/templates/partials/base.html.twig");
    }
}
