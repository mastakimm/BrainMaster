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

/* history/index.html.twig */
class __TwigTemplate_4c61619397d706333a40d9905a10d046 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "history/index.html.twig", 1);
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
        yield "    <div class=\"container mx-auto p-8\">

        <div class=\"overflow-x-auto\">
            ";
        // line 7
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "                <div class=\"min-w-full bg-white\">
                    <p class=\"text-center\">No quiz have been done for now</p>
                </div>
            ";
        } else {
            // line 12
            yield "                <table class=\"min-w-full bg-white\">
                    <thead>
                    <tr class=\"w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal\">
                        <th class=\"py-3 px-6 text-left\">Name</th>
                        <th class=\"py-3 px-6 text-left\">Score</th>
                        <th class=\"py-3 px-6 text-left\">Total</th>
                        <th class=\"py-3 px-6 text-left\">Date</th>
                    </tr>
                    </thead>
                    <tbody class=\"text-gray-600 text-sm font-light\">
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 22, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 23
                yield "                        <tr class=\"border-b border-gray-200 hover:bg-gray-100\">
                            <td class=\"py-3 px-6 text-left whitespace-nowrap\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 24, $this->source); })()), $context["i"], [], "array", false, false, false, 24), "html", null, true);
                yield "</td>
                            <td class=\"py-3 px-6 text-left\">";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 25, $this->source); })()), $context["i"], [], "array", false, false, false, 25), "html", null, true);
                yield "</td>
                            <td class=\"py-3 px-6 text-left\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 26, $this->source); })()), $context["i"], [], "array", false, false, false, 26), "html", null, true);
                yield "</td>
                            <td class=\"py-3 px-6 text-left\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 27, $this->source); })()), $context["i"], [], "array", false, false, false, 27), "Y-m-d H:i"), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                    </tbody>
                </table>
            ";
        }
        // line 33
        yield "        </div>
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
        return "history/index.html.twig";
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
        return array (  127 => 33,  122 => 30,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  98 => 23,  94 => 22,  82 => 12,  76 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container mx-auto p-8\">

        <div class=\"overflow-x-auto\">
            {% if names is empty %}
                <div class=\"min-w-full bg-white\">
                    <p class=\"text-center\">No quiz have been done for now</p>
                </div>
            {% else %}
                <table class=\"min-w-full bg-white\">
                    <thead>
                    <tr class=\"w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal\">
                        <th class=\"py-3 px-6 text-left\">Name</th>
                        <th class=\"py-3 px-6 text-left\">Score</th>
                        <th class=\"py-3 px-6 text-left\">Total</th>
                        <th class=\"py-3 px-6 text-left\">Date</th>
                    </tr>
                    </thead>
                    <tbody class=\"text-gray-600 text-sm font-light\">
                    {% for i in 0..(names|length - 1) %}
                        <tr class=\"border-b border-gray-200 hover:bg-gray-100\">
                            <td class=\"py-3 px-6 text-left whitespace-nowrap\">{{ names[i]}}</td>
                            <td class=\"py-3 px-6 text-left\">{{ scores[i] }}</td>
                            <td class=\"py-3 px-6 text-left\">{{ totals[i] }}</td>
                            <td class=\"py-3 px-6 text-left\">{{ dates[i]|date(\"Y-m-d H:i\") }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endblock %}", "history/index.html.twig", "/home/antoine/work/BrainMaster/BrainMaster/templates/history/index.html.twig");
    }
}
