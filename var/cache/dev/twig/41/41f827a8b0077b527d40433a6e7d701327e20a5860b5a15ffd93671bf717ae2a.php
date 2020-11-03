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

/* project/index.html.twig */
class __TwigTemplate_5e0dc9acabeaac5f40da39725a3f9d7c432085ee5f35b52498f0e40e589dcb22 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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

        echo "Home - Sarah Bobtchev-Melin";
        
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
<h2 class=\"page-title\">Mes projets</h2>

<section class=\"filter-menu\">

    <ul class=\"types-list\">

        ";
        // line 14
        echo "        ";
        // line 15
        echo "        <p class=\"type\">Types</p>
        <li class=\"type\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_browse");
        echo "\" class=\"btn ";
        echo (((0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), "project_browse"))) ? ("active") : (""));
        echo "\">Tous</a></li>
        <li class=\"type\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_browse_by_type", ["type" => "perso"]);
        echo "\" class=\"btn\">Perso</a></li>
        <li class=\"type\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_browse_by_type", ["type" => "school"]);
        echo "\" class=\"btn\">School</a></li>
        <li class=\"type\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_browse_by_type", ["type" => "job"]);
        echo "\" class=\"btn\">Job</a></li>

    </ul>

    <ul class=\"tags-list\">

        <p class=\"type\">Tags</p>
        <li class=\"type\"><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_browse");
        echo "\" class=\"btn ";
        echo (((0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), "project_browse"))) ? ("active") : (""));
        echo "\">Tous</a></li>

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 29
            echo "            <li class=\"tag\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_browse_by_tag", ["tag" => twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a></li> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    </ul>
</section>

<section class=\"projects\">

";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 38
            echo "
    <div class=\"card\">

        ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["project"], "mainImage", [], "any", false, false, false, 41)) {
                // line 42
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["project"], "mainImage", [], "any", false, false, false, 42))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"main image of the project\"/>
        ";
            }
            // line 44
            echo "        

        <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_read", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</a></h5>

            ";
            // line 49
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "tags", [], "any", false, false, false, 49)), 0))) {
                // line 50
                echo "
                <div class=\"project-tags\">
                    <ul class=\"tags-list\">

                        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["project"], "tags", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 55
                    echo "                            <li class=\"tag\"><a class=\"btn\">";
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "
                    </ul>
                </div>

            ";
            }
            // line 62
            echo "
            <div class=\"card-infos\">

                ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["project"], "school", [], "any", false, false, false, 65)) {
                // line 66
                echo "                    <p class=\"card-text project-type\">Ecole : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "school", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
                echo "</p>
                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 67
$context["project"], "job", [], "any", false, false, false, 67)) {
                // line 68
                echo "                    <p class=\"card-text project-type\">Entreprise : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "job", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
                echo "</p>
                ";
            }
            // line 70
            echo "            
            </div>
            
            <p class=\"card-text\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 73), "html", null, true);
            echo "</p>
        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</section>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 78,  238 => 73,  233 => 70,  227 => 68,  225 => 67,  220 => 66,  218 => 65,  213 => 62,  206 => 57,  197 => 55,  193 => 54,  187 => 50,  185 => 49,  178 => 47,  173 => 44,  167 => 42,  165 => 41,  160 => 38,  156 => 37,  148 => 31,  137 => 29,  133 => 28,  126 => 26,  116 => 19,  112 => 18,  108 => 17,  102 => 16,  99 => 15,  97 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Sarah Bobtchev-Melin{% endblock %}

{% block main %}

<h2 class=\"page-title\">Mes projets</h2>

<section class=\"filter-menu\">

    <ul class=\"types-list\">

        {# {{ path('project_browse_by_type', {'id': id}) }} #}
        {# {{ route == 'project_browse' ? 'active' }} #}
        <p class=\"type\">Types</p>
        <li class=\"type\"><a href=\"{{ path('project_browse') }}\" class=\"btn {{ route == 'project_browse' ? 'active' }}\">Tous</a></li>
        <li class=\"type\"><a href=\"{{ path('project_browse_by_type', {'type': 'perso'}) }}\" class=\"btn\">Perso</a></li>
        <li class=\"type\"><a href=\"{{ path('project_browse_by_type', {'type': 'school'}) }}\" class=\"btn\">School</a></li>
        <li class=\"type\"><a href=\"{{ path('project_browse_by_type', {'type': 'job'}) }}\" class=\"btn\">Job</a></li>

    </ul>

    <ul class=\"tags-list\">

        <p class=\"type\">Tags</p>
        <li class=\"type\"><a href=\"{{ path('project_browse') }}\" class=\"btn {{ route == 'project_browse' ? 'active' }}\">Tous</a></li>

        {% for tag in tags %}
            <li class=\"tag\"><a href=\"{{ path('project_browse_by_tag', {'tag': tag.name}) }}\" class=\"btn\">{{tag}}</a></li> 
        {% endfor %}

    </ul>
</section>

<section class=\"projects\">

{% for project in projects %}

    <div class=\"card\">

        {% if project.mainImage %}
            <img src=\"{{ asset('images/' ~ project.mainImage) }}\" class=\"card-img-top\" alt=\"main image of the project\"/>
        {% endif %}
        

        <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"{{ path('project_read', {'id': project.id}) }}\">{{project.name}}</a></h5>

            {% if project.tags|length > 0 %}

                <div class=\"project-tags\">
                    <ul class=\"tags-list\">

                        {% for tag in project.tags %}
                            <li class=\"tag\"><a class=\"btn\">{{tag}}</a></li>
                        {% endfor %}

                    </ul>
                </div>

            {% endif %}

            <div class=\"card-infos\">

                {% if project.school %}
                    <p class=\"card-text project-type\">Ecole : {{project.school.name}}</p>
                {% elseif project.job %}
                    <p class=\"card-text project-type\">Entreprise : {{project.job.name}}</p>
                {% endif %}
            
            </div>
            
            <p class=\"card-text\">{{project.description}}</p>
        </div>
    </div>

{% endfor %}
</section>
    

{% endblock %}
", "project/index.html.twig", "/var/www/html/portfolio-v1/templates/project/index.html.twig");
    }
}
