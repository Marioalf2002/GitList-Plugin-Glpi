<?php

/* navigation.twig */
class __TwigTemplate_e8fc47f4f53f8c922d8fced8034c3ca1134aa8dacc11b239eea8eb74b6466556 extends Twig_Template
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
        echo "<div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"http://gitlist.org/\">About</a></li>
                <li><a href=\"../../../index.php\">GLPI</a></li>
                <li><a href=\"https://github.com/klaussilveira/gitlist/issues/new\">Report bug</a></li>
                <li><a href=\"https://github.com/klaussilveira/gitlist/wiki\">Help</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navigation.twig", "C:\\xampp\\htdocs\\glpi94\\plugins\\gitlist\\gitlist\\themes\\bootstrap3\\twig\\navigation.twig");
    }
}
