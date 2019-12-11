<?php

/* layout_page.twig */
class __TwigTemplate_7998b64348350cb1bb7d64242139bcc6dcf6268752b47fb235b8eeb27feb2740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "layout_page.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("navigation.twig", "layout_page.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"container\">
        <div class=\"header row\">
            <div class=\"col-sm-12\">
            \t<div class=\"tab-border nav-tabs\">
                    ";
        // line 10
        if (twig_in_filter(($context["page"] ?? null), array(0 => "commits", 1 => "searchcommits"))) {
            // line 11
            echo "                    <form class=\"pull-right\" autocomplete=\"off\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "/commits/";
            echo twig_escape_filter($this->env, ($context["branch"] ?? null), "html", null, true);
            echo "/search\" method=\"POST\">
                        <input type=\"search\" name=\"query\" class=\"form-control input-sm\" placeholder=\"Search commits...\">
                    </form>
                    ";
        } else {
            // line 15
            echo "                    <form class=\"pull-right\" autocomplete=\"off\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "/tree/";
            echo twig_escape_filter($this->env, ($context["branch"] ?? null), "html", null, true);
            echo "/search\" method=\"POST\">
                        <input type=\"search\" name=\"query\" class=\"form-control input-sm\" placeholder=\"Search tree...\">
                    </form>
                    ";
        }
        // line 19
        echo "
                    ";
        // line 20
        if (array_key_exists("branches", $context)) {
            // line 21
            echo "                        ";
            $this->loadTemplate("branch_menu.twig", "layout_page.twig", 21)->display($context);
            // line 22
            echo "                    ";
        }
        // line 23
        echo "
                    ";
        // line 24
        $this->loadTemplate("menu.twig", "layout_page.twig", 24)->display($context);
        // line 25
        echo "                </div>
            </div>
        </div>

        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->loadTemplate("footer.twig", "layout_page.twig", 31)->display($context);
        // line 32
        echo "    </div>
";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  97 => 32,  95 => 31,  92 => 30,  90 => 29,  84 => 25,  82 => 24,  79 => 23,  76 => 22,  73 => 21,  71 => 20,  68 => 19,  56 => 15,  44 => 11,  42 => 10,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout_page.twig", "C:\\xampp\\htdocs\\glpi94\\plugins\\gitlist\\gitlist\\themes\\bootstrap3\\twig\\layout_page.twig");
    }
}
