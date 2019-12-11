<?php

/* tree.twig */
class __TwigTemplate_3bb344e0316faa0e40e0905752fe572f470cea44c3d4642c80aa11a77672eba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout_page.twig", "tree.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'extra2' => array($this, 'block_extra2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page"] = "files";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "GitList | ";
        echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("tree.twig", "tree.twig", 8, "1597233677")->display(array_merge($context, array("breadcrumbs" => ($context["breadcrumbs"] ?? null))));
        // line 45
        echo "
";
        // line 47
        echo "    ";
        $this->displayBlock('extra2', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        if ( !twig_test_empty(($context["files"] ?? null))) {
            // line 66
            echo "    <div class=\"table-border\">
    <table class=\"table tree\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mode</th>
                <th>Size</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 76
            if ( !(null === ($context["parent"] ?? null))) {
                // line 77
                echo "            <tr>
                <td>
                    ";
                // line 79
                if ( !($context["parent"] ?? null)) {
                    // line 80
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("branch", array("repo" => ($context["repo"] ?? null), "branch" => ($context["branch"] ?? null))), "html", null, true);
                    echo "\">..</a>
                    ";
                } else {
                    // line 82
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tree", array("repo" => ($context["repo"] ?? null), "commitishPath" => ((($context["branch"] ?? null) . "/") . ($context["parent"] ?? null)))), "html", null, true);
                    echo "\">..</a>
                    ";
                }
                // line 84
                echo "                </td>
                <td></td>
                <td></td>
            </tr>
            ";
            }
            // line 89
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 90
                echo "            <tr>
                <td><span class=\"fa ";
                // line 91
                echo (((($this->getAttribute($context["file"], "type", array()) == "folder") || ($this->getAttribute($context["file"], "type", array()) == "symlink"))) ? ("fa-folder-open") : ("fa-file-text-o"));
                echo "\"></span> <a href=\"";
                // line 92
                if ((($this->getAttribute($context["file"], "type", array()) == "folder") || ($this->getAttribute($context["file"], "type", array()) == "symlink"))) {
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tree", array("repo" => ($context["repo"] ?? null), "commitishPath" => (((($context["branch"] ?? null) . "/") . ($context["path"] ?? null)) . ((($this->getAttribute($context["file"], "type", array()) == "symlink")) ? ($this->getAttribute($context["file"], "path", array())) : ($this->getAttribute($context["file"], "name", array())))))), "html", null, true);
                } else {
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blob", array("repo" => ($context["repo"] ?? null), "commitishPath" => (((($context["branch"] ?? null) . "/") . ($context["path"] ?? null)) . ((($this->getAttribute($context["file"], "type", array()) == "symlink")) ? ($this->getAttribute($context["file"], "path", array())) : ($this->getAttribute($context["file"], "name", array())))))), "html", null, true);
                }
                // line 97
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "mode", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 99
                if ($this->getAttribute($context["file"], "size", array())) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["file"], "size", array()) / 1024)), "html", null, true);
                    echo " kb";
                }
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "        </tbody>
    </table>
    </div>
    ";
        } else {
            // line 106
            echo "        <p>This repository is empty.</p>
    ";
        }
        // line 108
        echo "    ";
        if ((array_key_exists("readme", $context) &&  !twig_test_empty(($context["readme"] ?? null)))) {
            // line 109
            echo "        <div class=\"readme-view\">
            <div class=\"md-header\">
                <span class=\"meta\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute(($context["readme"] ?? null), "filename", array()), "html", null, true);
            echo "</span>
            </div>
            <div id=\"md-content\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute(($context["readme"] ?? null), "content", array()), "html", null, true);
            echo "</div>
        </div>
    ";
        }
        // line 116
        echo "
    <hr />
";
    }

    // line 47
    public function block_extra2($context, array $blocks = array())
    {
        // line 48
        echo "    <hr>
    <div id=\"enviar\">
        <form action=\"../Conexion/enviar.php\" method=\"post\" autocomplete=\"off\">
            <p>
                Este campo es para enlazar el Repositorio que esta en vista con un Ticket.
            </p>
            <p>Enlazar ha Ticket:
                <input type=\"hidden\" name=\"repo\" id=\"repo\" value=";
        // line 55
        echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
        echo " />
                <input type=\"text\" name=\"idticket\" id=\"idticket\" require pattern=\"[0-9]{1,15}\" placeholder=\"ID Ticket\" />
                <input type=\"submit\" value=\"Enviar\" class=\"btn-success\"/>
            </p>
        </form>
    </div>
    <hr>
    ";
    }

    public function getTemplateName()
    {
        return "tree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 55,  173 => 48,  170 => 47,  164 => 116,  158 => 113,  153 => 111,  149 => 109,  146 => 108,  142 => 106,  136 => 102,  124 => 99,  120 => 98,  115 => 97,  112 => 95,  109 => 93,  107 => 92,  104 => 91,  101 => 90,  96 => 89,  89 => 84,  83 => 82,  77 => 80,  75 => 79,  71 => 77,  69 => 76,  57 => 66,  55 => 65,  52 => 64,  49 => 47,  46 => 45,  43 => 8,  40 => 7,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tree.twig", "C:\\xampp\\htdocs\\glpi94\\plugins\\gitlist\\gitlist\\themes\\bootstrap3\\twig\\tree.twig");
    }
}


/* tree.twig */
class __TwigTemplate_3bb344e0316faa0e40e0905752fe572f470cea44c3d4642c80aa11a77672eba2_1597233677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("breadcrumb.twig", "tree.twig", 8);
        $this->blocks = array(
            'extra' => array($this, 'block_extra'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "breadcrumb.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_extra($context, array $blocks = array())
    {
        // line 10
        echo "            <div class=\"pull-right\">
                <div class=\"btn-group download-buttons\">
                    ";
        // line 12
        if ((($context["show_http_remote"] ?? null) || ($context["show_ssh_remote"] ?? null))) {
            // line 13
            echo "                    <a type=\"button\" href=\"#\" class=\"btn btn-default btn-xs\" title=\"Show remotes to clone this repository.\" id=\"clone-button-show\">Clone</a>
                    ";
        }
        // line 15
        echo "                    <a type=\"button\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archive", array("repo" => ($context["repo"] ?? null), "branch" => ($context["branch"] ?? null), "format" => "zip")), "html", null, true);
        echo "\" class=\"btn btn-default btn-xs\" title=\"Download '";
        echo twig_escape_filter($this->env, ($context["branch"] ?? null), "html", null, true);
        echo "' as a ZIP archive\">ZIP</a>
                    <a type=\"button\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archive", array("repo" => ($context["repo"] ?? null), "branch" => ($context["branch"] ?? null), "format" => "tar")), "html", null, true);
        echo "\" class=\"btn btn-default btn-xs\" title=\"Download '";
        echo twig_escape_filter($this->env, ($context["branch"] ?? null), "html", null, true);
        echo "' as a TAR archive\">TAR</a>
                </div>
\t\t        <div class=\"download-buttons rss-button\">
\t\t            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rss", array("repo" => ($context["repo"] ?? null), "branch" => ($context["branch"] ?? null))), "html", null, true);
        echo "\"><span class=\"fa fa-rss rss-icon\"></span></a>
\t\t        </div>
            </div>
            ";
        // line 22
        if ((($context["show_http_remote"] ?? null) || ($context["show_ssh_remote"] ?? null))) {
            // line 23
            echo "            <div id=\"clone-popup\">
                <div id=\"clone-popup-inner-wrapper\">
                    <a class=\"close\" href=\"#\" id=\"clone-button-hide\">&times;</a>
                    <div class=\"btn-group\">
                        ";
            // line 27
            if (($context["show_ssh_remote"] ?? null)) {
                // line 28
                echo "                        <button type=\"button\" class=\"btn btn-default";
                echo (((($context["show_ssh_remote"] ?? null) && ($context["show_http_remote"] ?? null))) ? (" active") : (""));
                echo "\" id=\"clone-button-ssh\">SSH</button>
                        ";
            }
            // line 30
            echo "                        ";
            if (($context["show_http_remote"] ?? null)) {
                // line 31
                echo "                        <button type=\"button\" class=\"btn btn-default\" id=\"clone-button-http\">HTTP";
                echo ((($context["use_https"] ?? null)) ? ("S") : (""));
                echo "</button>
                        ";
            }
            // line 33
            echo "                    </div><br />
                    ";
            // line 34
            if (($context["show_ssh_remote"] ?? null)) {
                // line 35
                echo "                    <input type=\"text\" class=\"form-control";
                echo ((($context["show_ssh_remote"] ?? null)) ? (" visible") : (""));
                echo "\" id=\"clone-input-ssh\" value=\"git clone ";
                echo ((($context["ssh_port"] ?? null)) ? ("ssh://") : (""));
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["ssh_user"] ?? null)), "html", null, true);
                echo ((($context["ssh_user"] ?? null)) ? ("@") : (""));
                echo twig_escape_filter($this->env, ((($context["ssh_host"] ?? null)) ? (($context["ssh_host"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "host", array()))), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, ((($context["ssh_port"] ?? null)) ? ((($context["ssh_port"] ?? null) . "/")) : ("")), "html", null, true);
                echo twig_escape_filter($this->env, ($context["ssh_url_subdir"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
                echo "\">
                    ";
            }
            // line 37
            echo "                    ";
            if (($context["show_http_remote"] ?? null)) {
                // line 38
                echo "                    <input type=\"text\" class=\"form-control";
                echo (((twig_test_empty(($context["show_ssh_remote"] ?? null)) && ($context["show_http_remote"] ?? null))) ? (" visible") : (""));
                echo "\" id=\"clone-input-http\" value=\"git clone http";
                echo ((($context["use_https"] ?? null)) ? ("s") : (""));
                echo "://";
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["http_user"] ?? null)), "html", null, true);
                echo ((($context["http_user"] ?? null)) ? ("@") : (""));
                echo twig_escape_filter($this->env, ((($context["http_host"] ?? null)) ? (($context["http_host"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "host", array()))), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($context["http_url_subdir"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
                echo "\">
                    ";
            }
            // line 40
            echo "                </div>
            </div>
            ";
        }
        // line 43
        echo "        ";
    }

    public function getTemplateName()
    {
        return "tree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 43,  345 => 40,  330 => 38,  327 => 37,  312 => 35,  310 => 34,  307 => 33,  301 => 31,  298 => 30,  292 => 28,  290 => 27,  284 => 23,  282 => 22,  276 => 19,  268 => 16,  261 => 15,  257 => 13,  255 => 12,  251 => 10,  248 => 9,  231 => 8,  182 => 55,  173 => 48,  170 => 47,  164 => 116,  158 => 113,  153 => 111,  149 => 109,  146 => 108,  142 => 106,  136 => 102,  124 => 99,  120 => 98,  115 => 97,  112 => 95,  109 => 93,  107 => 92,  104 => 91,  101 => 90,  96 => 89,  89 => 84,  83 => 82,  77 => 80,  75 => 79,  71 => 77,  69 => 76,  57 => 66,  55 => 65,  52 => 64,  49 => 47,  46 => 45,  43 => 8,  40 => 7,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tree.twig", "C:\\xampp\\htdocs\\glpi94\\plugins\\gitlist\\gitlist\\themes\\bootstrap3\\twig\\tree.twig");
    }
}
