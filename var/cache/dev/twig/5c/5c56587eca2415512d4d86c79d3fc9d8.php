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

/* quizz/new.html.twig */
class __TwigTemplate_bc16087e46ecae03fa0fc886bd9a9e33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizz/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    <h1 class=\"text-3xl font-bold m-5 mb-10 text-center\">Create a new quizz</h1>
    ";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
    <div class=\"space-y-4\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 7
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7) != "_token")) {
                // line 8
                yield "                <div class=\"p-4 border-2 border-blue-600 rounded-lg bg-gray-200 justify-center mr-20 ml-20\">
                    ";
                // line 9
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "block text-lg font-medium text-gray-700 mb-2"]]);
                yield "
                    ";
                // line 10
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 10), "expanded", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 10), "expanded", [], "any", false, false, false, 10), [])) : ([]))) {
                    // line 11
                    yield "                        <div class=\"flex flex-col space-y-2\">
                            ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                        // line 13
                        yield "                                <div class=\"border-2 border-blue-600 rounded-md mb-4\">
                                    <div class=\"flex items-center space-x-2 p-4\">
                                        ";
                        // line 15
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "mr-2"]]);
                        yield "
                                        ";
                        // line 16
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'label', ["label_attr" => ["class" => "ml-2"]]);
                        yield "
                                    </div>
                                </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    yield "                        </div>
                    ";
                } else {
                    // line 22
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "mt-1 block w-full p-2 border-gray-300 rounded-md border-2 border-blue-600 p-5 mb-4"]]);
                    yield "
                    ";
                }
                // line 24
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors', ["attr" => ["class" => "text-red-500 text-sm"]]);
                yield "
                </div>
            ";
            }
            // line 27
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    </div>
    <div class=\"flex justify-center mt-6 pb-10\">
        <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-10 rounded\">Create</button>
    </div>
    ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        yield "
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
        return "quizz/new.html.twig";
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
        return array (  147 => 32,  141 => 28,  135 => 27,  128 => 24,  122 => 22,  118 => 20,  108 => 16,  104 => 15,  100 => 13,  96 => 12,  93 => 11,  91 => 10,  87 => 9,  84 => 8,  81 => 7,  77 => 6,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <h1 class=\"text-3xl font-bold m-5 mb-10 text-center\">Create a new quizz</h1>
    {{ form_start(form, {'attr': {'class': 'space-y-6'}}) }}
    <div class=\"space-y-4\">
        {% for field in form %}
            {% if field.vars.name != '_token' %}
                <div class=\"p-4 border-2 border-blue-600 rounded-lg bg-gray-200 justify-center mr-20 ml-20\">
                    {{ form_label(field, null, {'label_attr': {'class': 'block text-lg font-medium text-gray-700 mb-2'}}) }}
                    {% if field.vars.expanded|default([]) %}
                        <div class=\"flex flex-col space-y-2\">
                            {% for choice in field %}
                                <div class=\"border-2 border-blue-600 rounded-md mb-4\">
                                    <div class=\"flex items-center space-x-2 p-4\">
                                        {{ form_widget(choice, {'attr': {'class': 'mr-2'}}) }}
                                        {{ form_label(choice, null, {'label_attr': {'class': 'ml-2'}}) }}
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        {{ form_widget(field, {'attr': {'class': 'mt-1 block w-full p-2 border-gray-300 rounded-md border-2 border-blue-600 p-5 mb-4'}}) }}
                    {% endif %}
                    {{ form_errors(field, {'attr': {'class': 'text-red-500 text-sm'}}) }}
                </div>
            {% endif %}
        {% endfor %}
    </div>
    <div class=\"flex justify-center mt-6 pb-10\">
        <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-10 rounded\">Create</button>
    </div>
    {{ form_end(form) }}
{% endblock %}", "quizz/new.html.twig", "/home/antoine/work/BrainMaster/BrainMaster/templates/quizz/new.html.twig");
    }
}
