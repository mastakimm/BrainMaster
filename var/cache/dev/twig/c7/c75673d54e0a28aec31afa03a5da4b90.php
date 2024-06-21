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

/* quizz/index.html.twig */
class __TwigTemplate_3881b2aab33614184a36198b03feddce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizz/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <h1 class=\"text-3xl font-bold m-5 mb-10 text-center\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "</h1>
    ";
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["answerQuizzForm"]) || array_key_exists("answerQuizzForm", $context) ? $context["answerQuizzForm"] : (function () { throw new RuntimeError('Variable "answerQuizzForm" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
    <div class=\"space-y-4\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["answerQuizzForm"]) || array_key_exists("answerQuizzForm", $context) ? $context["answerQuizzForm"] : (function () { throw new RuntimeError('Variable "answerQuizzForm" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 8
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8) != "_token")) {
                // line 9
                yield "                <div class=\"p-4 border-2 border-blue-600 rounded-lg bg-gray-200 justify-center mr-20 ml-20\">
                    ";
                // line 10
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "block text-lg font-medium text-gray-700"]]);
                yield "
                    ";
                // line 11
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 11), "expanded", [], "any", false, false, false, 11)) {
                    // line 12
                    yield "                        <div class=\"flex flex-col space-y-2\">
                            ";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                        // line 14
                        yield "                                <div class=\"flex items-center space-x-2\">
                                    ";
                        // line 15
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget');
                        yield "
                                    ";
                        // line 16
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'label');
                        yield "
                                </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    yield "                        </div>
                    ";
                } else {
                    // line 21
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "mt-1 block w-full p-2 border-gray-300 rounded-md"]]);
                    yield "
                    ";
                }
                // line 23
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors', ["attr" => ["class" => "text-red-500 text-sm"]]);
                yield "
                </div>
            ";
            }
            // line 26
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </div>
    <div class=\"flex justify-center mt-6 pb-10\">
        <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-10 rounded\">Submit</button>
    </div>
    ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["answerQuizzForm"]) || array_key_exists("answerQuizzForm", $context) ? $context["answerQuizzForm"] : (function () { throw new RuntimeError('Variable "answerQuizzForm" does not exist.', 31, $this->source); })()), 'form_end');
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
        return "quizz/index.html.twig";
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
        return array (  147 => 31,  141 => 27,  135 => 26,  128 => 23,  122 => 21,  118 => 19,  109 => 16,  105 => 15,  102 => 14,  98 => 13,  95 => 12,  93 => 11,  89 => 10,  86 => 9,  83 => 8,  79 => 7,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"text-3xl font-bold m-5 mb-10 text-center\">{{ categorie.name }}</h1>
    {{ form_start(answerQuizzForm, {'attr': {'class': 'space-y-6'}}) }}
    <div class=\"space-y-4\">
        {% for field in answerQuizzForm %}
            {% if field.vars.name != '_token' %}
                <div class=\"p-4 border-2 border-blue-600 rounded-lg bg-gray-200 justify-center mr-20 ml-20\">
                    {{ form_label(field, null, {'label_attr': {'class': 'block text-lg font-medium text-gray-700'}}) }}
                    {% if field.vars.expanded %}
                        <div class=\"flex flex-col space-y-2\">
                            {% for choice in field %}
                                <div class=\"flex items-center space-x-2\">
                                    {{ form_widget(choice) }}
                                    {{ form_label(choice) }}
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        {{ form_widget(field, {'attr': {'class': 'mt-1 block w-full p-2 border-gray-300 rounded-md'}}) }}
                    {% endif %}
                    {{ form_errors(field, {'attr': {'class': 'text-red-500 text-sm'}}) }}
                </div>
            {% endif %}
        {% endfor %}
    </div>
    <div class=\"flex justify-center mt-6 pb-10\">
        <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-10 rounded\">Submit</button>
    </div>
    {{ form_end(answerQuizzForm) }}
{% endblock %}", "quizz/index.html.twig", "/home/antoine/work/BrainMaster/BrainMaster/templates/quizz/index.html.twig");
    }
}
