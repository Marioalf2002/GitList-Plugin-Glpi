<?php

/* branch_menu.twig */
class __TwigTemplate_4ce399277d35347039b8c8a14368ea123436820ec7f345292a5cd9e200608528 extends Twig_Template
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
        echo "<div class=\"btn-group pull-left space-right\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">browsing: <strong>";
        // line 2
        echo twig_escape_filter($this->env, ($context["branch"] ?? null), "html", null, true);
        echo "</strong> <span class=\"caret\"></span></button>
    <ul class=\"dropdown-menu\">
        <li class=\"dropdown-header\">Branches</li>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["branches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("branch", array("repo" => ($context["repo"] ?? null), "branch" => $context["item"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 9
            echo "        <li class=\"dropdown-header\">Tags</li>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("branch", array("repo" => ($context["repo"] ?? null), "branch" => $context["item"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "branch_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  64 => 13,  53 => 11,  49 => 10,  46 => 9,  43 => 8,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "branch_menu.twig", "C:\\xampp\\htdocs\\glpi94\\plugins\\gitlist\\gitlist\\themes\\bootstrap3\\twig\\branch_menu.twig");
    }
}
