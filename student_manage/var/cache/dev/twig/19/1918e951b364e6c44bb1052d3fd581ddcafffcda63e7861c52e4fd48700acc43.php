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

/* teacher/index.html.twig */
class __TwigTemplate_15aa5fcf1664f4dc48231a6aa40da47e323da2c0fba78a73818d1633be6a6afc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teacher/index.html.twig", 1);
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
        echo "<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    
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
                  </div>
                  <div class=\"col-sm-8 text-left\"> 
                    <h1>Teacher</h1>
                    <p>This system exists to simplify information tracking for both teachers and administrative staff.</p>
                    <hr>
                    <table class=\"table table-responsive-md mt-3\">
                      <thead>
                          <tr>
                              <th>Teacher ID</th>
                              <th>Teacher Name</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) || array_key_exists("teachers", $context) ? $context["teachers"] : (function () { throw new RuntimeError('Variable "teachers" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 61
            echo "                          <tr>
                              <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                              <td>
                                  <a class=\"text-decoration-none\" href= \"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["teacher"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">
                                      ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "
                                  </a>
                              </td>
                              <td>
                                  <a href = \"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["teacher"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
                                      <img src = \"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" >
                                  </a>
                              </td>
                              <td>
                                  <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["teacher"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\"
                                  onclick = \"return confirm('Do you want to delete this teacher ?')\">
                                      <img src = \"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" >
                                  </a>
                              </td>
                          </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </table>
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
        return "teacher/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 81,  183 => 76,  178 => 74,  171 => 70,  167 => 69,  160 => 65,  156 => 64,  151 => 62,  148 => 61,  144 => 60,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TeacherController!{% endblock %}

{% block body %}
<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    
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
                  </div>
                  <div class=\"col-sm-8 text-left\"> 
                    <h1>Teacher</h1>
                    <p>This system exists to simplify information tracking for both teachers and administrative staff.</p>
                    <hr>
                    <table class=\"table table-responsive-md mt-3\">
                      <thead>
                          <tr>
                              <th>Teacher ID</th>
                              <th>Teacher Name</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                          {% for teacher in teachers %}
                          <tr>
                              <td>{{ teacher.id }}</td>
                              <td>
                                  <a class=\"text-decoration-none\" href= \"{{ path('teacher_detail', {'id' : teacher.id }) }}\">
                                      {{ teacher.name }}
                                  </a>
                              </td>
                              <td>
                                  <a href = \"{{ path('teacher_edit', {'id' : teacher.id }) }}\">
                                      <img src = \"{{ asset('images/edit.png') }}\" width=\"25\" height=\"20\" >
                                  </a>
                              </td>
                              <td>
                                  <a href=\"{{ path('teacher_delete', {'id' : teacher.id }) }}\"
                                  onclick = \"return confirm('Do you want to delete this teacher ?')\">
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
", "teacher/index.html.twig", "C:\\xampp\\htdocs\\projectweb\\webg301-gch0904-2-\\student_manage\\templates\\teacher\\index.html.twig");
    }
}
