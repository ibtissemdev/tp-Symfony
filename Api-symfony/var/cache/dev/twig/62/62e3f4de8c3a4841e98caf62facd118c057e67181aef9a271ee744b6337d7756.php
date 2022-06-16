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

\t\t<h1>Organigramme de l'équipe</h1>
\t\t<p>

\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "
\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hierarchie"]) || array_key_exists("hierarchie", $context) ? $context["hierarchie"] : (function () { throw new RuntimeError('Variable "hierarchie" does not exist.', 27, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                // line 28
                echo "\t\t\t\t\t";
                // line 29
                echo "\t\t\t\t\t";
                $context["i"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29);
                // line 30
                echo "
\t\t\t\t\t";
                // line 31
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 31), $context["place"]))) {
                    // line 32
                    echo "\t\t\t\t\t\t";
                    // line 33
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 33, $this->source); })())));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 34
                        echo "\t\t\t\t\t\t\t&nbsp;\t&nbsp;
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "
\t\t\t\t\t\t";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 38), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 39), "html", null, true);
                    echo "
\t\t\t\t\t\t(";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 40), "html", null, true);
                    echo ")
\t\t\t\t\t\t<br>

\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t</p>

\t\t<h2>Organigramme de l'équipe ordonnée</h2>

\t\t<p>
\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
            // line 53
            echo "
\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["keys"] => $context["value"]) {
                // line 55
                echo "
\t\t\t\t\t";
                // line 56
                if ((0 === twig_compare($context["resultat"], $context["keys"]))) {
                    // line 57
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, $context["value"]));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 58
                        echo "\t\t\t\t\t\t\t&nbsp;\t&nbsp;
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $context["resultat"], "html", null, true);
                    echo "<br>

\t\t\t\t\t";
                }
                // line 63
                echo "

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keys'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t</p>


\t</div>
";
        
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
        return array (  241 => 67,  235 => 66,  227 => 63,  220 => 60,  213 => 58,  208 => 57,  206 => 56,  203 => 55,  199 => 54,  196 => 53,  192 => 52,  185 => 47,  178 => 45,  164 => 44,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  142 => 36,  135 => 34,  130 => 33,  128 => 32,  126 => 31,  123 => 30,  120 => 29,  118 => 28,  101 => 27,  98 => 26,  94 => 25,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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

\t\t<h1>Organigramme de l'équipe</h1>
\t\t<p>

\t\t\t{% for user in users  %}

\t\t\t\t{% for place in hierarchie %}
\t\t\t\t\t{# On compte le nombre de supérieur hiérarchique avec loop.index dans la boucle en cours #}
\t\t\t\t\t{% set i = loop.index %}

\t\t\t\t\t{% if user.supHierarchique ==   place %}
\t\t\t\t\t\t{# On fait une boucle for i pour auto incrémenter les &nbsp;  #}
\t\t\t\t\t\t{% for j in 1.. i %}
\t\t\t\t\t\t\t&nbsp;\t&nbsp;
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{{user.id}}
\t\t\t\t\t\t{{user.firstname}}
\t\t\t\t\t\t{{user.lastname}}
\t\t\t\t\t\t({{user.label}})
\t\t\t\t\t\t<br>

\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}

\t\t\t{% endfor %}
\t\t</p>

\t\t<h2>Organigramme de l'équipe ordonnée</h2>

\t\t<p>
\t\t\t{% for resultat in result %}

\t\t\t\t{% for keys,value in level %}

\t\t\t\t\t{% if resultat == keys %}
\t\t\t\t\t\t{% for i in 0.. value %}
\t\t\t\t\t\t\t&nbsp;\t&nbsp;
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{{resultat}}<br>

\t\t\t\t\t{% endif %}


\t\t\t\t{% endfor %}
\t\t\t{% endfor %}
\t\t</p>


\t</div>
{% endblock %}
", "team/organigramme.html.twig", "C:\\laragon\\www\\tp-Symfony\\Api-symfony\\templates\\team\\organigramme.html.twig");
    }
}
