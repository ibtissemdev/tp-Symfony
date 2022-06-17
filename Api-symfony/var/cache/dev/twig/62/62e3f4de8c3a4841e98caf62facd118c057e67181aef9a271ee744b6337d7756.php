<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* team/organigramme.html.twig */
class __TwigTemplate_c62f1a1965f83f08257dd7f6e7f58df6ebf4ce50f02bd7aeaf5bd7c1825fd089 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Accueil' => [$this, 'block_Accueil'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/organigramme.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/organigramme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Accueil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Accueil"));

        echo "Organigramme
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">

\t\t";
        // line 23
        echo "\t\t<p>

\t\t\t";
        // line 28
        echo "\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t\t";
        // line 33
        echo "\t\t\t\t\t\t";
        // line 47
        echo "\t\t</p>

\t\t<h2>Organigramme de l'équipe ordonnée</h2>

\t\t<p>

\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
            // line 54
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 55
                echo "
\t\t\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 56, $this->source); })()));
                foreach ($context['_seq'] as $context["keys"] => $context["value"]) {
                    // line 57
                    echo "
\t\t\t\t\t\t";
                    // line 58
                    if ((0 === twig_compare($context["resultat"], $context["keys"]))) {
                        // line 59
                        echo "
\t\t\t\t\t\t\t";
                        // line 60
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "key", [], "any", false, false, false, 60), $context["resultat"]))) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, $context["value"]));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 62
                                echo "\t\t\t\t\t\t\t\t\t&nbsp;\t&nbsp;
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 64
                            echo "\t\t\t\t<img src=\"/images/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 64), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 64), "html", null, true);
                            echo "\" width=\"50px\">\t\t\t<a href=\"/team/membreTeam/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["resultat"], "html", null, true);
                            echo "</a> (";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 64), "html", null, true);
                            echo ") 
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t";
                        }
                        // line 69
                        echo "\t\t\t\t\t\t";
                    }
                    // line 70
                    echo "
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keys'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t</p>
\t</p>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/organigramme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 74,  182 => 73,  176 => 72,  169 => 70,  166 => 69,  149 => 64,  142 => 62,  137 => 61,  135 => 60,  132 => 59,  130 => 58,  127 => 57,  123 => 56,  120 => 55,  115 => 54,  111 => 53,  103 => 47,  101 => 33,  99 => 32,  97 => 29,  95 => 28,  91 => 23,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block Accueil %}Organigramme
{% endblock %}

{% block body %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">

\t\t{# <h1>Organigramme de l'équipe</h1> #}
\t\t<p>

\t\t\t{# {% for user in users  %}

\t\t\t\t{% for place in hierarchie %} #}
\t\t\t\t\t{# On compte le nombre de supérieur hiérarchique avec loop.index dans la boucle en cours #}
\t\t\t\t\t{# {% set i = loop.index %}

\t\t\t\t\t{% if user.supHierarchique ==   place %} #}
\t\t\t\t\t\t{# On fait une boucle for i pour auto incrémenter les &nbsp;  #}
\t\t\t\t\t\t{# {% for j in 1.. i %}
\t\t\t\t\t\t\t&nbsp;\t&nbsp;
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{{user.id}}
\t\t\t\t\t\t{{user.firstname}}
\t\t\t\t\t\t{{user.lastname}}
\t\t\t\t\t\t({{user.label}})
\t\t\t\t\t\t<br>

\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}

\t\t\t{% endfor %} #}
\t\t</p>

\t\t<h2>Organigramme de l'équipe ordonnée</h2>

\t\t<p>

\t\t\t{% for resultat in result %}
\t\t\t\t{% for user in users %}

\t\t\t\t\t{% for keys,value in level %}

\t\t\t\t\t\t{% if resultat == keys %}

\t\t\t\t\t\t\t{% if user.key == resultat %}
\t\t\t\t\t\t\t\t{% for i in 0.. value %}
\t\t\t\t\t\t\t\t\t&nbsp;\t&nbsp;
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t<img src=\"/images/{{user.photo}}\" alt=\"{{user.photo}}\" width=\"50px\">\t\t\t<a href=\"/team/membreTeam/{{user.id}}\">{{resultat}}</a> ({{user.label}}) 
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t{% endfor %}
\t\t</p>
\t</p>
</div>{% endblock %}
", "team/organigramme.html.twig", "C:\\laragon\\www\\tp-Symfony\\Api-symfony\\templates\\team\\organigramme.html.twig");
    }
}
