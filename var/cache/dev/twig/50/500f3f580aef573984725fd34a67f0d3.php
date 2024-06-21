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

/* user/edit.html.twig */
class __TwigTemplate_f502a74b57234416dce78211f56d8780 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Edit User";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mx-auto p-4\">
        <h1 class=\"text-2xl font-bold mb-4\">Edit User</h1>

        <div class=\"bg-white shadow-md rounded p-6\">
            ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
            <div class=\"space-y-4\">
                <div>
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "block text-gray-700 font-bold mb-2"]]);
        yield "
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), 'errors', ["attr" => ["class" => "text-red-500 text-xs italic"]]);
        yield "
                </div>
                <div>
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "block text-gray-700 font-bold mb-2"]]);
        yield "
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'errors', ["attr" => ["class" => "text-red-500 text-xs italic"]]);
        yield "
                </div>
                <div>
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 23, $this->source); })()), "password", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "block text-gray-700 font-bold mb-2"]]);
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 25, $this->source); })()), "password", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "text-red-500 text-xs italic"]]);
        yield "
                </div>
            </div>
            <div class=\"mt-4\">
                <button class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\">
                    ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
                </button>
            </div>
            ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 33, $this->source); })()), 'form_end');
        yield "
        </div>

        <div class=\"mt-4\">
            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"text-blue-500 hover:underline\">Back to list</a>
        </div>

        <div class=\"mt-4\">
            ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
        yield "
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
        return "user/edit.html.twig";
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
        return array (  166 => 41,  159 => 37,  152 => 33,  146 => 30,  138 => 25,  134 => 24,  130 => 23,  124 => 20,  120 => 19,  116 => 18,  110 => 15,  106 => 14,  102 => 13,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}
    <div class=\"container mx-auto p-4\">
        <h1 class=\"text-2xl font-bold mb-4\">Edit User</h1>

        <div class=\"bg-white shadow-md rounded p-6\">
            {{ form_start(editUserForm) }}
            <div class=\"space-y-4\">
                <div>
                    {{ form_label(editUserForm.username, null, {'label_attr': {'class': 'block text-gray-700 font-bold mb-2'}}) }}
                    {{ form_widget(editUserForm.username, {'attr': {'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
                    {{ form_errors(editUserForm.username, {'attr': {'class': 'text-red-500 text-xs italic'}}) }}
                </div>
                <div>
                    {{ form_label(editUserForm.email, null, {'label_attr': {'class': 'block text-gray-700 font-bold mb-2'}}) }}
                    {{ form_widget(editUserForm.email, {'attr': {'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
                    {{ form_errors(editUserForm.email, {'attr': {'class': 'text-red-500 text-xs italic'}}) }}
                </div>
                <div>
                    {{ form_label(editUserForm.password, null, {'label_attr': {'class': 'block text-gray-700 font-bold mb-2'}}) }}
                    {{ form_widget(editUserForm.password, {'attr': {'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
                    {{ form_errors(editUserForm.password, {'attr': {'class': 'text-red-500 text-xs italic'}}) }}
                </div>
            </div>
            <div class=\"mt-4\">
                <button class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\">
                    {{ button_label|default('Save') }}
                </button>
            </div>
            {{ form_end(editUserForm) }}
        </div>

        <div class=\"mt-4\">
            <a href=\"{{ path('app_user_index') }}\" class=\"text-blue-500 hover:underline\">Back to list</a>
        </div>

        <div class=\"mt-4\">
            {{ include('user/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}", "user/edit.html.twig", "/home/antoine/work/BrainMaster/BrainMaster/templates/user/edit.html.twig");
    }
}
