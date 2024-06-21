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

/* base.html.twig */
class __TwigTemplate_9ea5c4c2cd639b5ebaad1a3dbda9d704 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    ";
        // line 6
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "
    <link rel=\"icon\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\">
</head>
<body class=\"h-screen\">
    <header>
        <nav class=\"bg-slate-100 flex justify-between p-6 pl-12 pr-12 sticky backdrop-blur lg:border-b lg:border-slate-900/10 dark:border-slate-50/[0.06] bg-white/95 supports-backdrop-blur:bg-white/60 dark:bg-transparent\">
            <div class=\"flex gap-12\">
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_welcome");
        yield "\" class=\"";
        if ((array_key_exists("currentRoute", $context) && ((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 17, $this->source); })()) == "app_home"))) {
            yield "text-blue-500";
        }
        yield "\">Home</a>
                <a href=";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield " class=\"";
        if ((array_key_exists("currentRoute", $context) && ((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 18, $this->source); })()) == "app_categorie_index"))) {
            yield "text-blue-500";
        }
        yield "\">Quiz</a>
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_history");
        yield "\" class=\"";
        if ((array_key_exists("currentRoute", $context) && ((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 19, $this->source); })()) == "app_history"))) {
            yield "text-blue-500";
        }
        yield "\">History</a>
            </div>

            <div class=\"flex gap-12\">
                ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "getAsRoles", ["ROLE_ADMIN"], "method", false, false, false, 24)) {
                // line 25
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
                yield "\" class=\"";
                if (((array_key_exists("currentRoute", $context) && ((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 25, $this->source); })()) == "app_admin_users")) || (array_key_exists("currentRoute", $context) && ((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 25, $this->source); })()) == "app_admin_graph")))) {
                    yield "text-blue-500";
                }
                yield "\">Admin</a>
                    ";
            }
            // line 27
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"";
            if ((array_key_exists("currentRoute", $context) && ((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 27, $this->source); })()) == "app_user_show"))) {
                yield "text-blue-500";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27)), "html", null, true);
            yield "</a>
                    <a href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                ";
        } else {
            // line 30
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"";
            if ((array_key_exists("currentRoute", $context) && ((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 30, $this->source); })()) == "app_register"))) {
                yield "text-blue-500";
            }
            yield "\">Register</a>
                    <a href=\"";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"";
            if ((array_key_exists("currentRoute", $context) && ((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 31, $this->source); })()) == "app_login"))) {
                yield "text-blue-500";
            }
            yield "\">Login</a>
                ";
        }
        // line 33
        yield "            </div>
        </nav>
    </header>

    <main>
        ";
        // line 38
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 39
        yield "    </main>

    ";
        // line 41
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 45
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Bienvenue!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
        <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        yield "                ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
        <script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        yield "\"></script>
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
        return "base.html.twig";
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
        return array (  258 => 43,  253 => 42,  243 => 41,  224 => 38,  211 => 8,  206 => 7,  196 => 6,  176 => 5,  163 => 45,  161 => 41,  157 => 39,  155 => 38,  148 => 33,  139 => 31,  130 => 30,  125 => 28,  114 => 27,  104 => 25,  101 => 24,  99 => 23,  88 => 19,  80 => 18,  72 => 17,  63 => 11,  60 => 10,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Bienvenue!{% endblock %}</title>
    {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
    {% endblock %}

    <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\">
</head>
<body class=\"h-screen\">
    <header>
        <nav class=\"bg-slate-100 flex justify-between p-6 pl-12 pr-12 sticky backdrop-blur lg:border-b lg:border-slate-900/10 dark:border-slate-50/[0.06] bg-white/95 supports-backdrop-blur:bg-white/60 dark:bg-transparent\">
            <div class=\"flex gap-12\">
                <a href=\"{{ path('app_welcome') }}\" class=\"{% if currentRoute is defined and currentRoute == 'app_home' %}text-blue-500{% endif %}\">Home</a>
                <a href={{ path('app_categorie_index') }} class=\"{% if currentRoute is defined and currentRoute == 'app_categorie_index' %}text-blue-500{% endif %}\">Quiz</a>
                <a href=\"{{ path('app_history') }}\" class=\"{% if currentRoute is defined and currentRoute == 'app_history' %}text-blue-500{% endif %}\">History</a>
            </div>

            <div class=\"flex gap-12\">
                {% if app.user %}
                    {% if app.user.getAsRoles('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_admin') }}\" class=\"{% if currentRoute is defined and currentRoute == 'app_admin_users' or currentRoute is defined and currentRoute == 'app_admin_graph' %}text-blue-500{% endif %}\">Admin</a>
                    {% endif %}
                    <a href=\"{{ path('app_user_show', { 'id': app.user.id }) }}\" class=\"{% if currentRoute is defined and currentRoute == 'app_user_show' %}text-blue-500{% endif %}\">{{ app.user.username|capitalize }}</a>
                    <a href=\"{{ path('app_logout') }}\">Logout</a>
                {% else %}
                    <a href=\"{{ path('app_register') }}\" class=\"{% if currentRoute is defined and currentRoute == 'app_register' %}text-blue-500{% endif %}\">Register</a>
                    <a href=\"{{ path('app_login') }}\" class=\"{% if currentRoute is defined and currentRoute == 'app_login' %}text-blue-500{% endif %}\">Login</a>
                {% endif %}
            </div>
        </nav>
    </header>

    <main>
        {% block body %}{% endblock %}
    </main>

    {% block javascripts %}
                {{ encore_entry_script_tags('app') }}
        <script src=\"{{ asset('js/app.js') }}\"></script>
    {% endblock %}
</body>
</html>
", "base.html.twig", "/home/antoine/work/BrainMaster/BrainMaster/templates/base.html.twig");
    }
}
