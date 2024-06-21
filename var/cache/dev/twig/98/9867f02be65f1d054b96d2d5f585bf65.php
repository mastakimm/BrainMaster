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

/* admin/users.html.twig */
class __TwigTemplate_2f9301ceed375826e7054d0d5527ca2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'comp' => [$this, 'block_comp'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/users.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_comp($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comp"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comp"));

        // line 4
        yield "
    <div class=\"mx-auto p-4\">
        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full bg-white\">
                <thead>
                    <tr>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Id</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Username</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Email</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Is_verified</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Roles</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Created_at</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            yield "                    <tr>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">";
            // line 25
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 25)) ? ("Yes") : ("No"));
            yield "</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">";
            // line 26
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 26)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 26), ", "), "html", null, true)) : (yield ""));
            yield "</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">";
            // line 27
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 27)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">
                            <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"text-blue-600 hover:text-blue-900\">show</a>
                            <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"text-blue-600 hover:text-blue-900 ml-4\">edit</a>
                            <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show_history", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"text-blue-600 hover:text-blue-900 ml-4\">history</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            yield "                    <tr>
                        <td colspan=\"7\" class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-center\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                </tbody>
            </table>
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
        return "admin/users.html.twig";
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
        return array (  146 => 39,  137 => 35,  128 => 31,  124 => 30,  120 => 29,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  92 => 21,  87 => 20,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block comp %}

    <div class=\"mx-auto p-4\">
        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full bg-white\">
                <thead>
                    <tr>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Id</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Username</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Email</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Is_verified</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Roles</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Created_at</th>
                        <th class=\"px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">{{ user.id }}</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">{{ user.username }}</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">{{ user.email }}</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">{{ user.isVerified ? 'Yes' : 'No' }}</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">{{ user.roles ? user.roles|join(', ') : '' }}</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">{{ user.createdAt ? user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                        <td class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500\">
                            <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"text-blue-600 hover:text-blue-900\">show</a>
                            <a href=\"{{ path('app_user_edit_admin', {'id': user.id}) }}\" class=\"text-blue-600 hover:text-blue-900 ml-4\">edit</a>
                            <a href=\"{{ path('app_user_show_history', {'id': user.id}) }}\" class=\"text-blue-600 hover:text-blue-900 ml-4\">history</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-center\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}", "admin/users.html.twig", "/home/antoine/work/BrainMaster/BrainMaster/templates/admin/users.html.twig");
    }
}
