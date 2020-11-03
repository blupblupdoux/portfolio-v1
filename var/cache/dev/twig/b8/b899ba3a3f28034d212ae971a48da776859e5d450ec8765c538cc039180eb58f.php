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

/* admin/about/list.html.twig */
class __TwigTemplate_83b833cceb2d53233708d555397e9564c2e2e37b20e18980599ea6cfee82e36f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/about/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/about/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/about/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
<h2>About</h2>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aboutList"]) || array_key_exists("aboutList", $context) ? $context["aboutList"] : (function () { throw new RuntimeError('Variable "aboutList" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 10
            echo "    <div>
        <p><span>Name : </span>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
        <p><span>Age : </span>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "age", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
        <p><span>Tel : </span>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "tel", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
        <p><span>Email : </span>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "email", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
        <p><span>Github : </span>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "github", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
        <p><span>Linkedin : </span>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "linkedin", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
        <p><span>Blog : </span>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "blog", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
        <p><span>City : </span>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "city", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
        <p><span>Description : </span>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "description", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
        <p><span>CreatedAt : </span>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "createdAt", [], "any", false, false, false, 20), "d-m-Y"), "html", null, true);
            echo "</p>
        <p><span>UpdatedAt : </span>";
            // line 21
            (( !(null === twig_get_attribute($this->env, $this->source, $context["about"], "updatedAt", [], "any", false, false, false, 21))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "updatedAt", [], "any", false, false, false, 21), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</p>
        <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_about_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["about"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">edit</a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/about/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 25,  144 => 22,  140 => 21,  136 => 20,  132 => 19,  128 => 18,  124 => 17,  120 => 16,  116 => 15,  112 => 14,  108 => 13,  104 => 12,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}About{% endblock %}

{% block main %}

<h2>About</h2>

{% for about in aboutList %}
    <div>
        <p><span>Name : </span>{{about.name}}</p>
        <p><span>Age : </span>{{about.age}}</p>
        <p><span>Tel : </span>{{about.tel}}</p>
        <p><span>Email : </span>{{about.email}}</p>
        <p><span>Github : </span>{{about.github}}</p>
        <p><span>Linkedin : </span>{{about.linkedin}}</p>
        <p><span>Blog : </span>{{about.blog}}</p>
        <p><span>City : </span>{{about.city}}</p>
        <p><span>Description : </span>{{about.description}}</p>
        <p><span>CreatedAt : </span>{{about.createdAt|date('d-m-Y')}}</p>
        <p><span>UpdatedAt : </span>{{ about.updatedAt is not null ? about.updatedAt|date('d-m-Y') }}</p>
        <a class=\"btn btn-primary\" href=\"{{ path('admin_about_edit', {'id' : about.id}) }}\">edit</a>
    </div>
{% endfor %}

{% endblock %}
", "admin/about/list.html.twig", "/var/www/html/portfolio-v1/templates/admin/about/list.html.twig");
    }
}
