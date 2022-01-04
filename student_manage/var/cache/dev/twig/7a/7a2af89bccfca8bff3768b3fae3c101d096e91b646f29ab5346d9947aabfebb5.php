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

/* course/index.html.twig */
class __TwigTemplate_369b1fcc5ca42218415cf3f0c3e831db7f6186e31a0e93f831f89f813c511a5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
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

        echo "Hello TeacherController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    
    
        <thead>

              <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
        </thead>
        
        <tbody>

              <div class=\"container-fluid text-center\">    
                <div class=\"row content\">
                  <div class=\"col-sm-2 sidenav\">
                    <p><a class=\"nav-item nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_class");
        echo "\">Student_Class</a></p>
                    
                  </div>                 
                  <div class=\"col-sm-8 text-left\"> 
                    <h1>Course</h1>
                    <p> .This page displays information about the student's courses.</p>
                    <hr>
                    <table class=\"table table-responsive-md mt-3\">
                        <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 68
            echo "                <tr>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"text-decoration-none\" href= \"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
                            ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>
                        <a href = \"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">
                            <img src = \"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" >
                        </a>
                    </td>
                    <td>
                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\"
                        onclick = \"return confirm('Do you want to delete this course ?')\">
                            <img src = \"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" >
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </table>
            
                  </div>
                  <div class=\"col-sm-2 sidenav\">
                  </div>
                </div>
              </div>

        </tbody>
    

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 88,  193 => 83,  188 => 81,  181 => 77,  177 => 76,  170 => 72,  166 => 71,  161 => 69,  158 => 68,  154 => 67,  136 => 52,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TeacherController!{% endblock %}

{% block body %}

<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    
    
        <thead>

              <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
        </thead>
        
        <tbody>

              <div class=\"container-fluid text-center\">    
                <div class=\"row content\">
                  <div class=\"col-sm-2 sidenav\">
                    <p><a class=\"nav-item nav-link\" href=\"{{ path('student_class') }}\">Student_Class</a></p>
                    
                  </div>                 
                  <div class=\"col-sm-8 text-left\"> 
                    <h1>Course</h1>
                    <p> .This page displays information about the student's courses.</p>
                    <hr>
                    <table class=\"table table-responsive-md mt-3\">
                        <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        
            {% for course in courses %}
                <tr>
                    <td>{{ course.id }}</td>
                    <td>
                        <a class=\"text-decoration-none\" href= \"{{ path('course_detail', {'id' : course.id }) }}\">
                            {{ course.name }}
                        </a>
                    </td>
                    <td>
                        <a href = \"{{ path('course_edit', {'id' : course.id }) }}\">
                            <img src = \"{{ asset('images/edit.png') }}\" width=\"25\" height=\"20\" >
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ path('course_delete', {'id' : course.id }) }}\"
                        onclick = \"return confirm('Do you want to delete this course ?')\">
                            <img src = \"{{ asset('images/delete.png') }}\" width=\"25\" height=\"20\" >
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </table>
            
                  </div>
                  <div class=\"col-sm-2 sidenav\">
                  </div>
                </div>
              </div>

        </tbody>
    

</div>


{% endblock %}
", "course/index.html.twig", "C:\\xampp\\htdocs\\projectweb\\webg301-gch0904-2-\\student_manage\\templates\\course\\index.html.twig");
    }
}
