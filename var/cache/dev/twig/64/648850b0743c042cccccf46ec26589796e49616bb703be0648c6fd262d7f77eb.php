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

/* about/index.html.twig */
class __TwigTemplate_39dd87831303320e1094015f1828ac6a728b01a268f1ad37f58f3225bccb5962 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
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

        echo "About - Sarah Bobtchev-Melin";
        
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
<div class=\"about\">

    <section class=\"infos\">

        <div class=\"card\">

            <h3 class=\"section-title\">A propos</h3>

            <div class=\"card-body\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aboutList"]) || array_key_exists("aboutList", $context) ? $context["aboutList"] : (function () { throw new RuntimeError('Variable "aboutList" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 17
            echo "
                    <div class=\"card-left\">
                        <p><span>Nom : </span>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                        <p><span>Age : </span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "age", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                        <p><span>Ville : </span>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "city", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                        <p><span>Description : </span>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "description", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                    </div>

                     <div class=\"card-right\">
                        <p><span>Email : </span>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                        <p><span>Github : </span>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "github", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                        <p><span>Linkedin : </span>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "linkedin", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                        <p><span>Blog : </span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "blog", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/cv-sarah-bobtchev-melin.pdf"), "html", null, true);
            echo "\" download>Télécharger le CV</a>
                    </div>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
    
    </section>

    <section class=\"school\">

        <div class=\"card\">

            <h3 class=\"section-title\">Ecole et formation</h3>

            <div class=\"card-body\">
            
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schools"]) || array_key_exists("schools", $context) ? $context["schools"] : (function () { throw new RuntimeError('Variable "schools" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 48
            echo "
                <div class=\"card-type\">

                    <div class=\"card-left\">
                        <h5 class=\"card-title\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
                        <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "description", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                    </div>

                    ";
            // line 56
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "projects", [], "any", false, false, false, 56)), 0))) {
                // line 57
                echo "
                        <div class=\"card-right\">
                            <h4>Projets :</h4>
                            <ul class=\"list-group list-group-flush\">
                                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["school"], "projects", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 62
                    echo "                                    <li class=\"list-group-item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_read", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 62), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                            </ul>
                        </div>

                    ";
            }
            // line 68
            echo "                   
                </div>    

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </div>
        </div>

    </section>

    <section class=\"job\">

        <div class=\"card\">

            <h3 class=\"section-title\">Expérience</h3>

            <div class=\"card-body\">
            
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 86
            echo "
                <div class=\"card-type\">

                    <div class=\"card-left\">
                        <h5 class=\"card-title\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</h5>
                        <p>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 91), "html", null, true);
            echo "</p>
                    </div>

                    ";
            // line 94
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "projects", [], "any", false, false, false, 94)), 0))) {
                // line 95
                echo "
                        <div class=\"card-right\">
                            <h4>Projets :</h4>
                            <ul class=\"list-group list-group-flush\">
                                ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["job"], "projects", [], "any", false, false, false, 99));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 100
                    echo "                                    <li class=\"list-group-item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_read", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 100), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                            </ul>
                        </div>

                    ";
            }
            // line 106
            echo "                   
                </div>    

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            </div>
        </div>

    </section>

</div>


    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 110,  290 => 106,  284 => 102,  273 => 100,  269 => 99,  263 => 95,  261 => 94,  255 => 91,  251 => 90,  245 => 86,  241 => 85,  226 => 72,  217 => 68,  211 => 64,  200 => 62,  196 => 61,  190 => 57,  188 => 56,  182 => 53,  178 => 52,  172 => 48,  168 => 47,  153 => 34,  143 => 30,  139 => 29,  135 => 28,  131 => 27,  127 => 26,  120 => 22,  116 => 21,  112 => 20,  108 => 19,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}About - Sarah Bobtchev-Melin{% endblock %}

{% block main %}

<div class=\"about\">

    <section class=\"infos\">

        <div class=\"card\">

            <h3 class=\"section-title\">A propos</h3>

            <div class=\"card-body\">
                {% for about in aboutList %}

                    <div class=\"card-left\">
                        <p><span>Nom : </span>{{about.name}}</p>
                        <p><span>Age : </span>{{about.age}}</p>
                        <p><span>Ville : </span>{{about.city}}</p>
                        <p><span>Description : </span>{{about.description}}</p>
                    </div>

                     <div class=\"card-right\">
                        <p><span>Email : </span>{{about.email}}</p>
                        <p><span>Github : </span>{{about.github}}</p>
                        <p><span>Linkedin : </span>{{about.linkedin}}</p>
                        <p><span>Blog : </span>{{about.blog}}</p>
                        <a class=\"btn btn-primary\" href=\"{{ asset('documents/cv-sarah-bobtchev-melin.pdf') }}\" download>Télécharger le CV</a>
                    </div>
                    
                {% endfor %}
            </div>
        </div>
    
    </section>

    <section class=\"school\">

        <div class=\"card\">

            <h3 class=\"section-title\">Ecole et formation</h3>

            <div class=\"card-body\">
            
                {% for school in schools %}

                <div class=\"card-type\">

                    <div class=\"card-left\">
                        <h5 class=\"card-title\">{{ school.name }}</h5>
                        <p>{{ school.description }}</p>
                    </div>

                    {% if school.projects|length > 0 %}

                        <div class=\"card-right\">
                            <h4>Projets :</h4>
                            <ul class=\"list-group list-group-flush\">
                                {% for project in school.projects %}
                                    <li class=\"list-group-item\"><a href=\"{{ path('project_read', {'id': project.id}) }}\">{{ project.name }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>

                    {% endif %}
                   
                </div>    

                {% endfor %}
            </div>
        </div>

    </section>

    <section class=\"job\">

        <div class=\"card\">

            <h3 class=\"section-title\">Expérience</h3>

            <div class=\"card-body\">
            
                {% for job in jobs %}

                <div class=\"card-type\">

                    <div class=\"card-left\">
                        <h5 class=\"card-title\">{{ job.name }}</h5>
                        <p>{{ job.description }}</p>
                    </div>

                    {% if job.projects|length > 0 %}

                        <div class=\"card-right\">
                            <h4>Projets :</h4>
                            <ul class=\"list-group list-group-flush\">
                                {% for project in job.projects %}
                                    <li class=\"list-group-item\"><a href=\"{{ path('project_read', {'id': project.id}) }}\">{{ project.name }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>

                    {% endif %}
                   
                </div>    

                {% endfor %}
            </div>
        </div>

    </section>

</div>


    

{% endblock %}
", "about/index.html.twig", "/var/www/html/portfolio-v1/templates/about/index.html.twig");
    }
}
