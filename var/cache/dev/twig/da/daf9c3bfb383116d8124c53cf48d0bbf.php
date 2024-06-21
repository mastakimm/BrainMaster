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

/* user/show.html.twig */
class __TwigTemplate_d6143458ca24dc0505d23825f0f8554c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        yield "Quizz | Profile";
        
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
        yield "
    <div class=\"p-8 flex flex-col gap-12\">
        <div class=\"flex justify-between items-center\">
            <h1 class=\"text-3xl\" >Profile of ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
        </div>

        <div class=\"container mx-auto p-4\">
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden\">
                <table class=\"min-w-full bg-white\">
                    <tbody>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Username</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "username", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                        </tr>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Email</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                        </tr>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Password</th>
                            <td style=\"-webkit-text-security: square\" class=\"px-6 py-4 text-sm text-gray-900\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "password", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                        </tr>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Is Verified</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900\">";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "isVerified", [], "any", false, false, false, 30)) ? ("Yes") : ("No"));
        yield "</td>
                        </tr>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Member since</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900\">";
        // line 34
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900 flex gap-12\">
                                <a href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">Edit</a>

                                ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
        yield "
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
        return "user/show.html.twig";
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
        return array (  148 => 41,  143 => 39,  135 => 34,  128 => 30,  121 => 26,  114 => 22,  107 => 18,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quizz | Profile{% endblock %}

{% block body %}

    <div class=\"p-8 flex flex-col gap-12\">
        <div class=\"flex justify-between items-center\">
            <h1 class=\"text-3xl\" >Profile of {{ user.username }}</h1>
        </div>

        <div class=\"container mx-auto p-4\">
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden\">
                <table class=\"min-w-full bg-white\">
                    <tbody>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Username</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900\">{{ user.username }}</td>
                        </tr>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Email</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900\">{{ user.email }}</td>
                        </tr>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Password</th>
                            <td style=\"-webkit-text-security: square\" class=\"px-6 py-4 text-sm text-gray-900\">{{ user.password }}</td>
                        </tr>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Is Verified</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900\">{{ user.isVerified ? 'Yes' : 'No' }}</td>
                        </tr>
                        <tr class=\"border-b\">
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Member since</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900\">{{ user.createdAt ? user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                        <tr>
                            <th class=\"px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                            <td class=\"px-6 py-4 text-sm text-gray-900 flex gap-12\">
                                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">Edit</a>

                                {{ include('user/_delete_form.html.twig') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
{% endblock %}
", "user/show.html.twig", "/home/antoine/work/BrainMaster/BrainMaster/templates/user/show.html.twig");
    }
}
