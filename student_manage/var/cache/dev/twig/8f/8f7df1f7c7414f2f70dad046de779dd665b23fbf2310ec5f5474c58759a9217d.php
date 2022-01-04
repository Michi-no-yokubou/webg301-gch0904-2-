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

/* home/index.html.twig */
class __TwigTemplate_eaed47687ee698be7079b482bce601b3106b1e140165b2f44b0f4017cf792d32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "<thead>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</thead>
<tbody>
    <div class=\"jumbotron\">
        <div class=\"container text-center\">
          <h1>Student Management</h1>      
          <p>Beats Your Child.</p>
        </div>
      </div>
      
      <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"container-md text-center mt-4\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/library1.png"), "html", null, true);
        echo "\">
            </div>
          <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><a href=\"#\">Home</a></li>
              <li><a href=\"#\">Products</a></li>
              <li><a href=\"#\">Deals</a></li>
              <li><a href=\"#\">Stores</a></li>
              <li><a href=\"#\">Contact</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Your Account</a></li>
              <li><a href=\"#\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Cart</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class=\"container\">    
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Always be mad</div>
              <div class=\"panel-body\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/joke1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\">This boost your STR and AMPR.</div>
            </div>
          </div>
          <div class=\"col-sm-4\"> 
            <div class=\"panel panel-danger\">
              <div class=\"panel-heading\">Throw your kid</div>
              <div class=\"panel-body\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/joke2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\">Throw your child in very young age make them smarter each throw.</div>
            </div>
          </div>
          <div class=\"col-sm-4\"> 
            <div class=\"panel panel-success\">
              <div class=\"panel-heading\">Beats your child</div>
              <div class=\"panel-body\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/joke3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\">This is the most important part in teaching your child. You should practice this activity everyday if can.</div>
            </div>
          </div>
        </div>
      </div><br>
      <div class=\"container text-center\">
      <h3>Happy kids from parents who use theses often.</h3>
        </div>
      <div class=\"container\">    
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Physical abused</div>
              <div class=\"panel-body\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/joke4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\"></div>
            </div>
          </div>
          <div class=\"col-sm-4\"> 
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Psychological abuse</div>
              <div class=\"panel-body\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/joke5.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\"></div>
            </div>
          </div>
          <div class=\"col-sm-4\"> 
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Suicidal thoughts</div>
              <div class=\"panel-body\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/joke6.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\"></div>
            </div>
          </div>
        </div>
      </div><br><br>
    <footer class=\"container-fluid text-center\">
        <p>Student Management Copyright</p>
      </footer>
</tbody>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 100,  174 => 93,  164 => 86,  147 => 72,  137 => 65,  127 => 58,  101 => 35,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<thead>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</thead>
<tbody>
    <div class=\"jumbotron\">
        <div class=\"container text-center\">
          <h1>Student Management</h1>      
          <p>Beats Your Child.</p>
        </div>
      </div>
      
      <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"container-md text-center mt-4\">
                <img src=\"{{ asset('images/library1.png') }}\">
            </div>
          <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><a href=\"#\">Home</a></li>
              <li><a href=\"#\">Products</a></li>
              <li><a href=\"#\">Deals</a></li>
              <li><a href=\"#\">Stores</a></li>
              <li><a href=\"#\">Contact</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Your Account</a></li>
              <li><a href=\"#\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Cart</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class=\"container\">    
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Always be mad</div>
              <div class=\"panel-body\"><img src=\"{{ asset('images/joke1.png') }}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\">This boost your STR and AMPR.</div>
            </div>
          </div>
          <div class=\"col-sm-4\"> 
            <div class=\"panel panel-danger\">
              <div class=\"panel-heading\">Throw your kid</div>
              <div class=\"panel-body\"><img src=\"{{ asset('images/joke2.png') }}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\">Throw your child in very young age make them smarter each throw.</div>
            </div>
          </div>
          <div class=\"col-sm-4\"> 
            <div class=\"panel panel-success\">
              <div class=\"panel-heading\">Beats your child</div>
              <div class=\"panel-body\"><img src=\"{{ asset('images/joke3.png') }}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\">This is the most important part in teaching your child. You should practice this activity everyday if can.</div>
            </div>
          </div>
        </div>
      </div><br>
      <div class=\"container text-center\">
      <h3>Happy kids from parents who use theses often.</h3>
        </div>
      <div class=\"container\">    
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Physical abused</div>
              <div class=\"panel-body\"><img src=\"{{ asset('images/joke4.png') }}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\"></div>
            </div>
          </div>
          <div class=\"col-sm-4\"> 
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Psychological abuse</div>
              <div class=\"panel-body\"><img src=\"{{ asset('images/joke5.png') }}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\"></div>
            </div>
          </div>
          <div class=\"col-sm-4\"> 
            <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Suicidal thoughts</div>
              <div class=\"panel-body\"><img src=\"{{ asset('images/joke6.png') }}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
              <div class=\"panel-footer\"></div>
            </div>
          </div>
        </div>
      </div><br><br>
    <footer class=\"container-fluid text-center\">
        <p>Student Management Copyright</p>
      </footer>
</tbody>

{% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\projectweb\\webg301-gch0904-2-\\student_manage\\templates\\home\\index.html.twig");
    }
}
