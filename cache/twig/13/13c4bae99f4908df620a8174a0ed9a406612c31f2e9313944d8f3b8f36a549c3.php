<?php

/* case.html.twig */
class __TwigTemplate_751eba075bccd58edef44ce95ebc0d63eb8711d56fb486433968a770e81c7ea8 extends Twig_Template
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
        $this->loadTemplate("case.html.twig", "case.html.twig", 1, "1556373919")->display($context);
    }

    public function getTemplateName()
    {
        return "case.html.twig";
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
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

  {% block content %}

    <div class=\"blog_post\">
      <h1 class=\"blog_post_title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
      <div class=\"blog_post_date\">Post on <span>{{ page.date|date(\"d M\") }}</span></div>
      <div class=\"blog_post_content\">
        {{ page.content }}
      </div>
    </div>

    <p>

      {% if not page.isLast %}
              <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-angle-left\"></i> {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
      {% endif %}
  
      {% if not page.isFirst %}
          <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
      {% endif %}
  </p>
    {% endblock %}

{% endembed %}
", "case.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/my-theme/templates/case.html.twig");
    }
}


/* case.html.twig */
class __TwigTemplate_751eba075bccd58edef44ce95ebc0d63eb8711d56fb486433968a770e81c7ea8_1556373919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "case.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"blog_post\">
      <h1 class=\"blog_post_title\"><a href=\"";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</a></h1>
      <div class=\"blog_post_date\">Post on <span>";
        // line 7
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d M");
        echo "</span></div>
      <div class=\"blog_post_content\">
        ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
      </div>
    </div>

    <p>

      ";
        // line 15
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
            // line 16
            echo "              <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
            echo "\"><i class=\"fa fa-angle-left\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
            echo "</a>
      ";
        }
        // line 18
        echo "  
      ";
        // line 19
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
            // line 20
            echo "          <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
            echo " <i class=\"fa fa-angle-right\"></i></a>
      ";
        }
        // line 22
        echo "  </p>
    ";
    }

    public function getTemplateName()
    {
        return "case.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 22,  138 => 20,  136 => 19,  133 => 18,  125 => 16,  123 => 15,  114 => 9,  109 => 7,  103 => 6,  99 => 4,  96 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

  {% block content %}

    <div class=\"blog_post\">
      <h1 class=\"blog_post_title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
      <div class=\"blog_post_date\">Post on <span>{{ page.date|date(\"d M\") }}</span></div>
      <div class=\"blog_post_content\">
        {{ page.content }}
      </div>
    </div>

    <p>

      {% if not page.isLast %}
              <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-angle-left\"></i> {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
      {% endif %}
  
      {% if not page.isFirst %}
          <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
      {% endif %}
  </p>
    {% endblock %}

{% endembed %}
", "case.html.twig", "/Users/taizocooper/Dropbox/UX-MD/ux-dev/user/themes/my-theme/templates/case.html.twig");
    }
}
