<?php

/* footer.twig */
class __TwigTemplate_f9febb8b8ac2b762cf2f97a46149f0854cfdc82d630fe65dfa2940dc80a5366e extends Twig_Template
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
        echo "<footer>
    <p>Powered by <a href=\"https://github.com/klaussilveira/gitlist\">GitList 1.0.2</a></p>
</footer>
";
    }

    public function getTemplateName()
    {
        return "footer.twig";
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
        return new Twig_Source("", "footer.twig", "C:\\xampp\\htdocs\\glpi94\\plugins\\gitlist\\gitlist\\themes\\default\\twig\\footer.twig");
    }
}
