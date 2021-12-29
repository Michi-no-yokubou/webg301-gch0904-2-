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

/* teacher/detail.html.twig */
class __TwigTemplate_eb849ebad09e76085bf5b9bac6ffc6369493bdd3961139ac9d0173097889eee5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teacher/detail.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_add");
        echo "\">
        <img src = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/add.jpg"), "html", null, true);
        echo "\" width=\"80\" heigh=\"60\" >
    </a>
    <table class=\"table table-responsive-md mt-3\">
        <thead>
            <tr>
                
                <th>Teacher Code</th>
                <th>Teacher Name</th>
                <th>Teacher Age</th>
                <th>Teacher Gender</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 22, $this->source); })()), "code", [], "any", false, false, false, 22), "html", null, true);
        echo " </td>
                    <td> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        echo " </td>
                    <td> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 24, $this->source); })()), "age", [], "any", false, false, false, 24), "html", null, true);
        echo " </td>
                    <td> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 25, $this->source); })()), "gender", [], "any", false, false, false, 25), "html", null, true);
        echo " </td>
                    <td> 
                        ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 27, $this->source); })()), "books", [], "any", false, false, false, 27) != null)) {
            // line 28
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 28, $this->source); })()), "books", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 29
                echo "                                <a class=\"text-decoration-none\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">
                                ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 30), "html", null, true);
                echo "
                                </a>
                            <br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        ";
        }
        echo "         
                    </td>
                    <td>
                        <a href = \"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\">
                            <img src = \"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit.png"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" >
                        </a>
                    </td>
                    <td>
                        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\"
                        onclick = \"return confirm('Do you want to delete this teacher ?')\">
                            <img src = \"";
        // line 44
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
        return "teacher/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 44,  151 => 42,  144 => 38,  140 => 37,  133 => 34,  123 => 30,  118 => 29,  113 => 28,  111 => 27,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    <a href = \"{{ path('teacher_add') }}\">
        <img src = \"{{ asset('images/add.jpg') }}\" width=\"80\" heigh=\"60\" >
    </a>
    <table class=\"table table-responsive-md mt-3\">
        <thead>
            <tr>
                
                <th>Teacher Code</th>
                <th>Teacher Name</th>
                <th>Teacher Age</th>
                <th>Teacher Gender</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> {{ teacher.code }} </td>
                    <td> {{ teacher.name }} </td>
                    <td> {{ teacher.age }} </td>
                    <td> {{ teacher.gender }} </td>
                    <td> 
                        {% if author.books != null %}
                            {% for book in author.books %}
                                <a class=\"text-decoration-none\" href=\"{{ path('teacher_detail', {'id' : teacher.id }) }}\">
                                {{ book.title }}
                                </a>
                            <br>
                        {% endfor %}
                        {% endif %}         
                    </td>
                    <td>
                        <a href = \"{{ path('teacher_edit', {'id' : teacher.id }) }}\">
                            <img src = \"{{ asset('images/edit.png') }}\" width=\"50\" height=\"50\" >
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ path('teacher_delete', {'id' : teacher.id }) }}\"
                        onclick = \"return confirm('Do you want to delete this teacher ?')\">
                            <img src = \"{{ asset('images/delete.png') }}\" width=\"50\" height=\"50\" >
                        </a>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
{% endblock %}", "teacher/detail.html.twig", "C:\\xampp\\htdocs\\projectweb\\New folder\\123\\student_manage\\templates\\teacher\\detail.html.twig");
    }
}
