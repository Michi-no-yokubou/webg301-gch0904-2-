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

/* student/add.html.twig */
class __TwigTemplate_b866c7847733de1c85855fe7ec2379d94a4eae1f4945c932b1e73a180c0335d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "student/add.html.twig", 1);
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
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
<meta name=\"description\" content=\"\" />
<meta name=\"author\" content=\"\" />
<title>eTutor</title>
<!--favicon-->
<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">

<!--Select Plugins-->
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!--inputtags-->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/inputtags/css/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!--multi select-->
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-multi-select/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<!--Bootstrap Datepicker-->
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<!--Touchspin-->
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

<!-- simplebar CSS-->
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- Bootstrap core CSS-->
<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- animate CSS-->
<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- Icons CSS-->
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- Sidebar CSS-->
<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<!-- Custom Style-->
<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</thead>
<div class=\"container col-md-6 mt-3 mb-3\">
   <h2 class=\"text-center\">Add New Student</h2>
   <div class=\"col md-6\"></div>
      ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 41, $this->source); })()), 'form_start');
        echo "
         <div class=\"form-group\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 43, $this->source); })()), "code", [], "any", false, false, false, 43), 'label');
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 44, $this->source); })()), "code", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 48
        echo "
         </div>
                  <div class=\"form-group\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), 'label');
        echo "
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 56
        echo "
         </div>
         <div class=\"form-group\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 59, $this->source); })()), "age", [], "any", false, false, false, 59), 'label');
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 60, $this->source); })()), "age", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 64
        echo "
         </div>
         <div class=\"form-group\">
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 67, $this->source); })()), "gender", [], "any", false, false, false, 67), 'label');
        echo "
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 68, $this->source); })()), "gender", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 72
        echo "
         </div>
         <div class=\"form-group\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 75, $this->source); })()), "picture", [], "any", false, false, false, 75), 'label');
        echo "
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 76, $this->source); })()), "picture", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 80
        echo "
        </div>
         <div class=\"form-group text-center mt-3\">
            <input class=\"btn btn-light btn-block\" type=\"submit\" value=\"Add\" />
         </div>
      ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
   </div>
             <!-- Bootstrap core JavaScript-->
      <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

      <!-- simplebar js -->
      <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
      <!-- sidebar-menu js -->
      <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>

      <!-- Custom scripts -->
      <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app-script.js"), "html", null, true);
        echo "\"></script>

      <!--Bootstrap Touchspin Js-->
      <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"), "html", null, true);
        echo "\"></script>

      <!--Select Plugins Js-->
      <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.min.js"), "html", null, true);
        echo "\"></script>
      <!--Inputtags Js-->
      <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/inputtags/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>

      <!--Bootstrap Datepicker Js-->
      <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
      <script>
        \$('#default-datepicker').datepicker({
          todayHighlight: true
        });
        \$('#autoclose-datepicker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        \$('#inline-datepicker').datepicker({
          todayHighlight: true
        });

        \$('#dateragne-picker .input-daterange').datepicker({});
      </script>

      <!--Multi Select Js-->
      <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-multi-select/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-multi-select/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

      <script>
        \$(document).ready(function() {
          \$('.single-select').select2();

          \$('.multiple-select').select2();

          //multiselect start

          \$('#my_multi_select1').multiSelect({
            selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            afterInit: function(ms) {
              var that = this,
                \$selectableSearch = that.\$selectableUl.prev(),
                \$selectionSearch = that.\$selectionUl.prev(),
                selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

              that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e) {
                  if (e.which === 40) {
                    that.\$selectableUl.focus();
                    return false;
                  }
                });

              that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e) {
                  if (e.which == 40) {
                    that.\$selectionUl.focus();
                    return false;
                  }
                });
            },
            afterSelect: function() {
              this.qs1.cache();
              this.qs2.cache();
            },
            afterDeselect: function() {
              this.qs1.cache();
              this.qs2.cache();
            }
          });
          \$('#my_multi_select2').multiSelect({
            selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            afterInit: function(ms) {
              var that = this,
                \$selectableSearch = that.\$selectableUl.prev(),
                \$selectionSearch = that.\$selectionUl.prev(),
                selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

              that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e) {
                  if (e.which === 40) {
                    that.\$selectableUl.focus();
                    return false;
                  }
                });

              that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e) {
                  if (e.which == 40) {
                    that.\$selectionUl.focus();
                    return false;
                  }
                });
            },
            afterSelect: function() {
              this.qs1.cache();
              this.qs2.cache();
            },
            afterDeselect: function() {
              this.qs1.cache();
              this.qs2.cache();
            }
          });

          \$('#my_multi_select3').multiSelect({
            selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            afterInit: function(ms) {
              var that = this,
                \$selectableSearch = that.\$selectableUl.prev(),
                \$selectionSearch = that.\$selectionUl.prev(),
                selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

              that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e) {
                  if (e.which === 40) {
                    that.\$selectableUl.focus();
                    return false;
                  }
                });

              that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e) {
                  if (e.which == 40) {
                    that.\$selectionUl.focus();
                    return false;
                  }
                });
            },
            afterSelect: function() {
              this.qs1.cache();
              this.qs2.cache();
            },
            afterDeselect: function() {
              this.qs1.cache();
              this.qs2.cache();
            }
          });

          \$('.custom-header').multiSelect({
            selectableHeader: \"<div class='custom-header'>Selectable items</div>\",
            selectionHeader: \"<div class='custom-header'>Selection items</div>\",
            selectableFooter: \"<div class='custom-header'>Selectable footer</div>\",
            selectionFooter: \"<div class='custom-header'>Selection footer</div>\"
          });


        });
      </script>

      <script>
        function openForm() {
          document.getElementById(\"myForm\").style.display = \"block\";
        }

        function closeForm() {
          document.getElementById(\"myForm\").style.display = \"none\";
        }
      </script>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 129,  284 => 128,  263 => 110,  257 => 107,  252 => 105,  246 => 102,  242 => 101,  236 => 98,  230 => 95,  225 => 93,  219 => 90,  215 => 89,  211 => 88,  205 => 85,  198 => 80,  196 => 76,  192 => 75,  187 => 72,  185 => 68,  181 => 67,  176 => 64,  174 => 60,  170 => 59,  165 => 56,  163 => 52,  159 => 51,  154 => 48,  152 => 44,  148 => 43,  143 => 41,  135 => 36,  130 => 34,  125 => 32,  120 => 30,  115 => 28,  110 => 26,  104 => 23,  99 => 21,  94 => 19,  89 => 17,  84 => 15,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<thead>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
<meta name=\"description\" content=\"\" />
<meta name=\"author\" content=\"\" />
<title>eTutor</title>
<!--favicon-->
<link rel=\"icon\" href=\"{{ asset('images/favicon.ico') }}\" type=\"image/x-icon\">

<!--Select Plugins-->
<link href=\"{{ asset('plugins/select2/css/select2.min.css') }}\" rel=\"stylesheet\" />
<!--inputtags-->
<link href=\"{{ asset('plugins/inputtags/css/bootstrap-tagsinput.css') }}\" rel=\"stylesheet\" />
<!--multi select-->
<link href=\"{{ asset('plugins/jquery-multi-select/multi-select.css') }}\" rel=\"stylesheet\" type=\"text/css\">
<!--Bootstrap Datepicker-->
<link href=\"{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
<!--Touchspin-->
<link href=\"{{ asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css') }}\" rel=\"stylesheet\" type=\"text/css\">

<!-- simplebar CSS-->
<link href=\"{{ asset('plugins/simplebar/css/simplebar.css') }}\" rel=\"stylesheet\" />
<!-- Bootstrap core CSS-->
<link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
<!-- animate CSS-->
<link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
<!-- Icons CSS-->
<link href=\"{{ asset('css/icons.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
<!-- Sidebar CSS-->
<link href=\"{{ asset('css/sidebar-menu.css') }}\" rel=\"stylesheet\" />
<!-- Custom Style-->
<link href=\"{{ asset('css/app-style.css') }}\" rel=\"stylesheet\" />
</thead>
<div class=\"container col-md-6 mt-3 mb-3\">
   <h2 class=\"text-center\">Add New Student</h2>
   <div class=\"col md-6\"></div>
      {{ form_start (studentForm) }}
         <div class=\"form-group\">
            {{ form_label (studentForm.code)}}
            {{ form_widget (studentForm.code ,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
                  <div class=\"form-group\">
            {{ form_label (studentForm.name)}}
            {{ form_widget (studentForm.name ,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group\">
            {{ form_label (studentForm.age)}}
            {{ form_widget (studentForm.age ,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group\">
            {{ form_label (studentForm.gender)}}
            {{ form_widget (studentForm.gender ,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group\">
            {{ form_label (studentForm.picture) }}
            {{ form_widget (studentForm.picture,
                {
                    'attr' : {'class' : 'form-control'}
                })
            }}
        </div>
         <div class=\"form-group text-center mt-3\">
            <input class=\"btn btn-light btn-block\" type=\"submit\" value=\"Add\" />
         </div>
      {{ form_end (studentForm)}}
   </div>
             <!-- Bootstrap core JavaScript-->
      <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
      <script src=\"{{ asset('js/popper.min.js') }}\"></script>
      <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

      <!-- simplebar js -->
      <script src=\"{{ asset('plugins/simplebar/js/simplebar.js') }}\"></script>
      <!-- sidebar-menu js -->
      <script src=\"{{ asset('js/sidebar-menu.js') }}\"></script>

      <!-- Custom scripts -->
      <script src=\"{{ asset('js/app-script.js') }}\"></script>

      <!--Bootstrap Touchspin Js-->
      <script src=\"{{ asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}\"></script>
      <script src=\"{{ asset('plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js') }}\"></script>

      <!--Select Plugins Js-->
      <script src=\"{{ asset('plugins/select2/js/select2.min.js') }}\"></script>
      <!--Inputtags Js-->
      <script src=\"{{ asset('plugins/inputtags/js/bootstrap-tagsinput.js') }}\"></script>

      <!--Bootstrap Datepicker Js-->
      <script src=\"{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\"></script>
      <script>
        \$('#default-datepicker').datepicker({
          todayHighlight: true
        });
        \$('#autoclose-datepicker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        \$('#inline-datepicker').datepicker({
          todayHighlight: true
        });

        \$('#dateragne-picker .input-daterange').datepicker({});
      </script>

      <!--Multi Select Js-->
      <script src=\"{{ asset('plugins/jquery-multi-select/jquery.multi-select.js') }}\"></script>
      <script src=\"{{ asset('plugins/jquery-multi-select/jquery.quicksearch.js') }}\"></script>

      <script>
        \$(document).ready(function() {
          \$('.single-select').select2();

          \$('.multiple-select').select2();

          //multiselect start

          \$('#my_multi_select1').multiSelect({
            selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            afterInit: function(ms) {
              var that = this,
                \$selectableSearch = that.\$selectableUl.prev(),
                \$selectionSearch = that.\$selectionUl.prev(),
                selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

              that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e) {
                  if (e.which === 40) {
                    that.\$selectableUl.focus();
                    return false;
                  }
                });

              that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e) {
                  if (e.which == 40) {
                    that.\$selectionUl.focus();
                    return false;
                  }
                });
            },
            afterSelect: function() {
              this.qs1.cache();
              this.qs2.cache();
            },
            afterDeselect: function() {
              this.qs1.cache();
              this.qs2.cache();
            }
          });
          \$('#my_multi_select2').multiSelect({
            selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            afterInit: function(ms) {
              var that = this,
                \$selectableSearch = that.\$selectableUl.prev(),
                \$selectionSearch = that.\$selectionUl.prev(),
                selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

              that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e) {
                  if (e.which === 40) {
                    that.\$selectableUl.focus();
                    return false;
                  }
                });

              that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e) {
                  if (e.which == 40) {
                    that.\$selectionUl.focus();
                    return false;
                  }
                });
            },
            afterSelect: function() {
              this.qs1.cache();
              this.qs2.cache();
            },
            afterDeselect: function() {
              this.qs1.cache();
              this.qs2.cache();
            }
          });

          \$('#my_multi_select3').multiSelect({
            selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            afterInit: function(ms) {
              var that = this,
                \$selectableSearch = that.\$selectableUl.prev(),
                \$selectionSearch = that.\$selectionUl.prev(),
                selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

              that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e) {
                  if (e.which === 40) {
                    that.\$selectableUl.focus();
                    return false;
                  }
                });

              that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e) {
                  if (e.which == 40) {
                    that.\$selectionUl.focus();
                    return false;
                  }
                });
            },
            afterSelect: function() {
              this.qs1.cache();
              this.qs2.cache();
            },
            afterDeselect: function() {
              this.qs1.cache();
              this.qs2.cache();
            }
          });

          \$('.custom-header').multiSelect({
            selectableHeader: \"<div class='custom-header'>Selectable items</div>\",
            selectionHeader: \"<div class='custom-header'>Selection items</div>\",
            selectableFooter: \"<div class='custom-header'>Selectable footer</div>\",
            selectionFooter: \"<div class='custom-header'>Selection footer</div>\"
          });


        });
      </script>

      <script>
        function openForm() {
          document.getElementById(\"myForm\").style.display = \"block\";
        }

        function closeForm() {
          document.getElementById(\"myForm\").style.display = \"none\";
        }
      </script>
</div>
{% endblock %}", "student/add.html.twig", "C:\\Users\\fever\\Desktop\\Unishit\\7th\\WEBG301\\htdocs\\webg301-gch0904-2-\\student_manage\\templates\\student\\add.html.twig");
    }
}
