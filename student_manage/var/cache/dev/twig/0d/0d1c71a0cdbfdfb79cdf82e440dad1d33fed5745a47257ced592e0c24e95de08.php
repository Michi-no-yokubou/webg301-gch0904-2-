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

/* course/detail.html.twig */
class __TwigTemplate_fdecfb6b6c3795eae9dcf4b062e44b9181f16846fd57dab8cab9ee6c1b152ef6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    <a href = \"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_add");
        echo "\">
        <img src = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/add.jpg"), "html", null, true);
        echo "\" width=\"80\" heigh=\"60\" >
    </a>
    <table class=\"table table-responsive-md mt-3\">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Course Description</th>
                <th>Course Duration </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo " </td>
                    <td> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        echo " </td>
                    <td> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 22, $this->source); })()), "duration", [], "any", false, false, false, 22), "html", null, true);
        echo " </td>
                    <td>
                        <a href = \"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">
                            <img src = \"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit.png"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" >
                        </a>
                    </td>
                    <td>
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\"
                        onclick = \"return confirm('Do you want to delete this course ?')\">
                            <img src = \"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" >
                        </a>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "course/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  116 => 29,  109 => 25,  105 => 24,  100 => 22,  96 => 21,  92 => 20,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    <a href = \"{{ path('course_add') }}\">
        <img src = \"{{ asset('images/add.jpg') }}\" width=\"80\" heigh=\"60\" >
    </a>
    <table class=\"table table-responsive-md mt-3\">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Course Description</th>
                <th>Course Duration </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> {{ courses.name }} </td>
                    <td> {{ courses.description }} </td>
                    <td> {{ courses.duration }} </td>
                    <td>
                        <a href = \"{{ path('course_edit', {'id' : courses.id }) }}\">
                            <img src = \"{{ asset('images/edit.png') }}\" width=\"50\" height=\"50\" >
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ path('course_delete', {'id' : courses.id }) }}\"
                        onclick = \"return confirm('Do you want to delete this course ?')\">
                            <img src = \"{{ asset('images/delete.png') }}\" width=\"50\" height=\"50\" >
                        </a>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
{% endblock %}", "course/detail.html.twig", "C:\\xampp\\htdocs\\projectweb\\webg301-gch0904-2-\\student_manage\\templates\\course\\detail.html.twig");
    }
}
