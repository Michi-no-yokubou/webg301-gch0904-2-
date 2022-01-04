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

/* course/edit.html.twig */
class __TwigTemplate_c951a6211a6a47798a73a1bc301ee50f8810ca695387fa43095ad7ea223dfaa3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/edit.html.twig", 1);
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
        echo "<div class=\"container col-md-6 mt-3 mb-3\">
   <h2 class=\"text-center\">Edit Course</h2>
   <div class=\"col md-6\"></div>
      ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["courseForm"]) || array_key_exists("courseForm", $context) ? $context["courseForm"] : (function () { throw new RuntimeError('Variable "courseForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
         <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courseForm"]) || array_key_exists("courseForm", $context) ? $context["courseForm"] : (function () { throw new RuntimeError('Variable "courseForm" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courseForm"]) || array_key_exists("courseForm", $context) ? $context["courseForm"] : (function () { throw new RuntimeError('Variable "courseForm" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 14
        echo "
         </div>
         <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courseForm"]) || array_key_exists("courseForm", $context) ? $context["courseForm"] : (function () { throw new RuntimeError('Variable "courseForm" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courseForm"]) || array_key_exists("courseForm", $context) ? $context["courseForm"] : (function () { throw new RuntimeError('Variable "courseForm" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 22
        echo "
         </div>
                  <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courseForm"]) || array_key_exists("courseForm", $context) ? $context["courseForm"] : (function () { throw new RuntimeError('Variable "courseForm" does not exist.', 25, $this->source); })()), "duration", [], "any", false, false, false, 25), 'label');
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["courseForm"]) || array_key_exists("courseForm", $context) ? $context["courseForm"] : (function () { throw new RuntimeError('Variable "courseForm" does not exist.', 26, $this->source); })()), "duration", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 30
        echo "
         </div>
         <div class=\"form-group text-center mt-3\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Add\" />
         </div>
      ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["courseForm"]) || array_key_exists("courseForm", $context) ? $context["courseForm"] : (function () { throw new RuntimeError('Variable "courseForm" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
   </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "course/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  106 => 30,  104 => 26,  100 => 25,  95 => 22,  93 => 18,  89 => 17,  84 => 14,  82 => 10,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"container col-md-6 mt-3 mb-3\">
   <h2 class=\"text-center\">Edit Course</h2>
   <div class=\"col md-6\"></div>
      {{ form_start (courseForm) }}
         <div class=\"form-group\">
            {{ form_label (courseForm.name)}}
            {{ form_widget (courseForm.name ,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group\">
            {{ form_label (courseForm.description)}}
            {{ form_widget (courseForm.description ,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
                  <div class=\"form-group\">
            {{ form_label (courseForm.duration)}}
            {{ form_widget (courseForm.duration ,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group text-center mt-3\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Add\" />
         </div>
      {{ form_end (courseForm)}}
   </div>
</div>
{% endblock %}", "course/edit.html.twig", "C:\\xampp\\htdocs\\projectweb\\webg301-gch0904-2-\\student_manage\\templates\\course\\edit.html.twig");
    }
}
