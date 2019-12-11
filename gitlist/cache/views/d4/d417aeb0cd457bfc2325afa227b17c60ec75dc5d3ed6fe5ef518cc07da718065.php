<?php

/* layout.twig */
class __TwigTemplate_00195c8e6f12dd9b5d48fca6183febd461635772599d5e572136ca7ac6547eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/css/style.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/css/fontawesome.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/css/gitgraph.css\">
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/img/favicon.png\" />
        <!--[if lt IE 9]>
        <script type=\"application/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/html5.js\"></script>
        <![endif]-->
    </head>

    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "        <script type=\"application/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/jquery.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/raphael.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/bootstrap.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/codemirror.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/showdown.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/table.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/main.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/networkGraph.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/gitgraph.js\"></script>
        <script type=\"application/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "/js/draw.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 28,  142 => 27,  136 => 26,  130 => 25,  124 => 24,  118 => 23,  112 => 22,  106 => 21,  100 => 20,  93 => 19,  90 => 18,  85 => 17,  79 => 5,  73 => 30,  70 => 18,  68 => 17,  58 => 12,  51 => 10,  45 => 9,  39 => 8,  33 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.twig", "C:\\xampp\\htdocs\\glpi94\\plugins\\gitlist\\gitlist\\themes\\bootstrap3\\twig\\layout.twig");
    }
}
