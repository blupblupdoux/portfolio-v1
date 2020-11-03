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

/* admin/project/list.html.twig */
class __TwigTemplate_a90070400cc9530a18c0e22e2d13c80b5df23c043b6224e11eda380285b4f33d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/project/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/project/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/project/list.html.twig", 1);
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

        echo "Projects list";
        
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
    <h2>Projects</h2>

    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_add");
        echo "\">Add a project</a>

    <table class=\"table\">
        <thead class=\"thead-light\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Tag</th>
                <th scope=\"col\">Created date</th>
                <th scope=\"col\">Updated date</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 27
            echo "                <tr>
                    <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</th>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 32
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["project"], "school", [], "any", false, false, false, 32))) {
                // line 33
                echo "                            School (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "school", [], "any", false, false, false, 33), "html", null, true);
                echo ")
                        ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source,             // line 34
$context["project"], "job", [], "any", false, false, false, 34))) {
                // line 35
                echo "                            Job  (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "job", [], "any", false, false, false, 35), "html", null, true);
                echo ")
                        ";
            } else {
                // line 37
                echo "                            Perso
                        ";
            }
            // line 39
            echo "                    </td>
                    <td>
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["project"], "tags", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 42
                echo "                            ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 42) . " "), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "createdAt", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            (( !(null === twig_get_attribute($this->env, $this->source, $context["project"], "updatedAt", [], "any", false, false, false, 46))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "updatedAt", [], "any", false, false, false, 46), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">edit</a> 
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            
        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/project/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 53,  185 => 49,  181 => 48,  176 => 46,  172 => 45,  169 => 44,  160 => 42,  156 => 41,  152 => 39,  148 => 37,  142 => 35,  140 => 34,  135 => 33,  133 => 32,  128 => 30,  124 => 29,  120 => 28,  117 => 27,  113 => 26,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Projects list{% endblock %}

{% block main %}

    <h2>Projects</h2>

    <a href=\"{{ path('admin_project_add') }}\">Add a project</a>

    <table class=\"table\">
        <thead class=\"thead-light\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Tag</th>
                <th scope=\"col\">Created date</th>
                <th scope=\"col\">Updated date</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>

            {% for project in projects %}
                <tr>
                    <th scope=\"row\">{{project.id}}</th>
                    <td>{{project.name}}</td>
                    <td>{{project.description}}</td>
                    <td>
                        {% if project.school is not null %}
                            School ({{project.school}})
                        {% elseif project.job is not null %}
                            Job  ({{project.job}})
                        {% else %}
                            Perso
                        {% endif %}
                    </td>
                    <td>
                        {% for tag in project.tags %}
                            {{tag.name ~ ' '}}
                        {% endfor %}
                    </td>
                    <td>{{project.createdAt|date('d-m-Y')}}</td>
                    <td>{{ project.updatedAt is not null ? project.updatedAt|date('d-m-Y') }}</td>
                    <td>
                        <a href=\"{{ path('admin_project_edit', {'id' : project.id}) }}\">edit</a> 
                        <a href=\"{{ path('admin_project_delete', {'id' : project.id}) }}\">delete</a>
                    </td>
                </tr>
            {% endfor %}
            
        </tbody>
    </table>

{% endblock %}
", "admin/project/list.html.twig", "/var/www/html/portfolio-v1/templates/admin/project/list.html.twig");
    }
}
