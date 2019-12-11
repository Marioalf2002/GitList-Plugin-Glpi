<?php

/* index.twig */
class __TwigTemplate_4a0e8eb37affae41d4355ee259780577d904a6ebc95c403d186560e1ec9222b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "GitList";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("navigation.twig", "index.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"container\">

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["repositories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["repository"]) {
            // line 10
            echo "    <div class=\"repository\">
        <div class=\"repository-header\">
            <span class=\"fa fa-folder-open\"></span>  <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("repository", array("repo" => $this->getAttribute($context["repository"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repository"], "name", array()), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rss", array("repo" => $this->getAttribute($context["repository"], "name", array()), "branch" => "master")), "html", null, true);
            echo "\"><span class=\"fa fa-rss rss-icon pull-right\"></span></a>
        </div>
        <div class=\"repository-body\">
            ";
            // line 16
            if ($this->getAttribute($context["repository"], "description", array())) {
                // line 17
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repository"], "description", array()), "html", null, true);
                echo "</p>
            ";
            } else {
                // line 19
                echo "            <p>There is no repository description file. Please, create one to remove this message.</p>
            ";
            }
            // line 21
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repository'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    <hr />

    ";
        // line 27
        $this->loadTemplate("footer.twig", "index.twig", 27)->display($context);
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  90 => 27,  85 => 24,  77 => 21,  73 => 19,  67 => 17,  65 => 16,  59 => 13,  53 => 12,  49 => 10,  45 => 9,  40 => 6,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "C:\\xampp\\htdocs\\glpi94\\plugins\\gitlist\\gitlist\\themes\\bootstrap3\\twig\\index.twig");
    }
}
