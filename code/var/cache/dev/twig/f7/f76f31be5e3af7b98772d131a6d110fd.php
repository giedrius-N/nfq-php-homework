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

/* pages/edit.html.twig */
class __TwigTemplate_55284c7ccf541db2503409beda63125e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "\t<main>
\t<div class=\"container\">
\t\t<div class=\"py-5 text-center\">
\t\t\t<h1 class=\"fw-bold\">Edit ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo " article</h1>
\t\t\t<p class=\"text-muted\"> X minutes </p>
\t\t</div>
\t\t
\t\t<div class=\"lead mb-4 py-5\">

\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 14, $this->source); })()), 'widget');
        echo "
\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Submit</button>
\t\t\t</div>
\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
\t</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  77 => 14,  73 => 13,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
\t<main>
\t<div class=\"container\">
\t\t<div class=\"py-5 text-center\">
\t\t\t<h1 class=\"fw-bold\">Edit {{ article.title }} article</h1>
\t\t\t<p class=\"text-muted\"> X minutes </p>
\t\t</div>
\t\t
\t\t<div class=\"lead mb-4 py-5\">

\t\t{{ form_start(articleForm) }}
\t\t\t{{ form_widget(articleForm) }}
\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Submit</button>
\t\t\t</div>
\t\t{{ form_end(articleForm) }}
\t\t</div>
\t</div>
\t</main>

{% endblock %}
", "pages/edit.html.twig", "/code/templates/pages/edit.html.twig");
    }
}
