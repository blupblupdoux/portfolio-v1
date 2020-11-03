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

/* admin/type/list.html.twig */
class __TwigTemplate_ebd5041276edc893f4c16650c7635b58a263e5b290154add4ae4de0d826b06bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/type/list.html.twig", 1);
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

        echo "Types list";
        
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
<h2 class=\"page-title\">Types</h2>

<div class=\"type\">

    <section class=\"type-job\">

        <h3>Jobs</h3>

        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_type_job_add");
        echo "\">Add a job</a>

        <table class=\"table\">
            <thead class=\"thead-light\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">City</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Created date</th>
                    <th scope=\"col\">Updated date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 33
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</th>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "date", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "city", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "createdAt", [], "any", false, false, false, 39), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            (( !(null === twig_get_attribute($this->env, $this->source, $context["job"], "updatedAt", [], "any", false, false, false, 40))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "updatedAt", [], "any", false, false, false, 40), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_type_job_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">edit</a> 
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_type_job_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">delete</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>
    </section>

    <section class=\"type-school\">

        <h3>Schools</h3>

        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_type_school_add");
        echo "\">Add a school</a>

        <table class=\"table\">
            <thead class=\"thead-light\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Created date</th>
                    <th scope=\"col\">Updated date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schools"]) || array_key_exists("schools", $context) ? $context["schools"] : (function () { throw new RuntimeError('Variable "schools" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 72
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "</th>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "date", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "description", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "createdAt", [], "any", false, false, false, 77), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            (( !(null === twig_get_attribute($this->env, $this->source, $context["school"], "updatedAt", [], "any", false, false, false, 78))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "updatedAt", [], "any", false, false, false, 78), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_type_school_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["school"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">edit</a> 
                            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_type_school_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["school"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">delete</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                
            </tbody>
        </table>
    </section>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/type/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 85,  234 => 81,  230 => 80,  225 => 78,  221 => 77,  217 => 76,  213 => 75,  209 => 74,  205 => 73,  202 => 72,  198 => 71,  179 => 55,  169 => 47,  159 => 43,  155 => 42,  150 => 40,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  123 => 33,  119 => 32,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Types list{% endblock %}

{% block main %}

<h2 class=\"page-title\">Types</h2>

<div class=\"type\">

    <section class=\"type-job\">

        <h3>Jobs</h3>

        <a href=\"{{ path('admin_type_job_add') }}\">Add a job</a>

        <table class=\"table\">
            <thead class=\"thead-light\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">City</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Created date</th>
                    <th scope=\"col\">Updated date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>

                {% for job in jobs %}
                    <tr>
                        <th scope=\"row\">{{job.id}}</th>
                        <td>{{job.name}}</td>
                        <td>{{job.date}}</td>
                        <td>{{job.city}}</td>
                        <td>{{job.description}}</td>
                        <td>{{job.createdAt|date('d-m-Y')}}</td>
                        <td>{{ job.updatedAt is not null ? job.updatedAt|date('d-m-Y') }}</td>
                        <td>
                            <a href=\"{{ path('admin_type_job_edit', {'id' : job.id}) }}\">edit</a> 
                            <a href=\"{{ path('admin_type_job_delete', {'id' : job.id}) }}\">delete</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </section>

    <section class=\"type-school\">

        <h3>Schools</h3>

        <a href=\"{{ path('admin_type_school_add') }}\">Add a school</a>

        <table class=\"table\">
            <thead class=\"thead-light\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Created date</th>
                    <th scope=\"col\">Updated date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>

                {% for school in schools %}
                    <tr>
                        <th scope=\"row\">{{school.id}}</th>
                        <td>{{school.name}}</td>
                        <td>{{school.date}}</td>
                        <td>{{school.description}}</td>
                        <td>{{school.createdAt|date('d-m-Y')}}</td>
                        <td>{{ school.updatedAt is not null ? school.updatedAt|date('d-m-Y') }}</td>
                        <td>
                            <a href=\"{{ path('admin_type_school_edit', {'id' : school.id}) }}\">edit</a> 
                            <a href=\"{{ path('admin_type_school_delete', {'id' : school.id}) }}\">delete</a>
                        </td>
                    </tr>
                {% endfor %}
                
            </tbody>
        </table>
    </section>
</div>

{% endblock %}
", "admin/type/list.html.twig", "/var/www/html/portfolio-v1/templates/admin/type/list.html.twig");
    }
}
