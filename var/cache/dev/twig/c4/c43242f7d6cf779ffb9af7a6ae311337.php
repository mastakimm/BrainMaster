<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* categorie/show.html.twig */
class __TwigTemplate_4e18ab3a1b3ab76048a28cd51b5a8e5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Categorie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
    </style>
<div class=\"flex justify-center items-center min-h-screen bg-gray-100 overflow-hidden\">
    <div class=\"bg-white p-32 rounded-lg shadow-lg\">
        <h4 class=\"font-bold text-2xl mb-20 text-center\">
            ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "
        </h4>

        <div class=\"mb-6\">
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-2.5 px-4 rounded block text-center\">
                Back
            </a>
        </div>

        <div class=\"space-y-4\">
            <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizz", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2.5 px-4 rounded block text-center\">
                Start
            </a>
            ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 29
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2.5 px-4 rounded block text-center\">
                    Edit
                </a>

                ";
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "categorie/_delete_form.html.twig", ["class" => "bg-red-500 hover:bg-red-700 text-white font-bold py-2.5 px-4 rounded block text-center"]);
            yield "
            ";
        }
        // line 35
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "categorie/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  139 => 35,  134 => 33,  126 => 29,  124 => 28,  118 => 25,  109 => 19,  102 => 15,  90 => 5,  80 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Categorie{% endblock %}

{% block body %}
    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
    </style>
<div class=\"flex justify-center items-center min-h-screen bg-gray-100 overflow-hidden\">
    <div class=\"bg-white p-32 rounded-lg shadow-lg\">
        <h4 class=\"font-bold text-2xl mb-20 text-center\">
            {{ categorie.name }}
        </h4>

        <div class=\"mb-6\">
            <a href=\"{{ path('app_categorie_index') }}\" class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-2.5 px-4 rounded block text-center\">
                Back
            </a>
        </div>

        <div class=\"space-y-4\">
            <a href=\"{{ path('app_quizz', {'id': categorie.id}) }}\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2.5 px-4 rounded block text-center\">
                Start
            </a>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('app_quizz_edit', {'id': categorie.id}) }}\" class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2.5 px-4 rounded block text-center\">
                    Edit
                </a>

                {{ include('categorie/_delete_form.html.twig', { 'class': 'bg-red-500 hover:bg-red-700 text-white font-bold py-2.5 px-4 rounded block text-center' }) }}
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "categorie/show.html.twig", "/home/antoine/work/BrainMaster/BrainMaster/templates/categorie/show.html.twig");
    }
}
