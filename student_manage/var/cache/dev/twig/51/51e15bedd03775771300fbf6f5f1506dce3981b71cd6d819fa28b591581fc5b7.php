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

/* student/index.html.twig */
class __TwigTemplate_2d72c0ef053001b9f05b64c27c034c47bbb2adfa1ac98d1f5569c0658c42b249 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
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

        echo "Hello StudentController!";
        
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
  ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "  <a href = \"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_add");
            echo "\">
    <img src = \"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/add.png"), "html", null, true);
            echo "\" width=\"90\" heigh=\"60\" >
  </a>
  ";
        }
        // line 12
        echo "  <thead>
      <meta charset=\"utf-8\" />
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
      <meta name=\"description\" content=\"\" />
      <meta name=\"author\" content=\"\" />
      <title>eTutor</title>
      <!--favicon-->
      <link rel=\"icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">

      <!--Select Plugins-->
      <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!--inputtags-->
      <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/inputtags/css/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!--multi select-->
      <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-multi-select/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
      <!--Bootstrap Datepicker-->
      <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
      <!--Touchspin-->
      <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

      <!-- simplebar CSS-->
      <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!-- Bootstrap core CSS-->
      <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!-- animate CSS-->
      <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      <!-- Icons CSS-->
      <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      <!-- Sidebar CSS-->
      <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!-- Custom Style-->
      <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  </thead>
  <tbody>
              <div class=\"container-fluid text-center\">    
                <div class=\"row content\">
                  <div class=\"col-sm-2 sidenav\">
                    <p><a class=\"nav-item nav-link\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\">Course</a></p>
                  </div>
                  <div class=\"col-sm-8 text-left\"> 
                    <h1>Student</h1>
                    <p>This system exists to simplify information tracking for both teachers and administrative staff.</p>
                    <hr>
                    <table class=\"table table-responsive-md mt-3\">
                        <tr>
                            <th>Student ID</th>
                            <th>Image</th>
                            <th>Student Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 66
            echo "                <tr>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                    <td>
                      <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
                          <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("student/" . twig_get_attribute($this->env, $this->source, $context["student"], "picture", [], "any", false, false, false, 70))), "html", null, true);
            echo "\" style=\"width:19%\">
                    </a>
                    </td>
                    <td>
                        <a class=\"text-decoration-none\" href= \"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">
                            ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo "
                        </a>
                    </td>
                    ";
            // line 78
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 79
                echo "                    <td>
                        <a href = \"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\">
                            <img src = \"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit.png"), "html", null, true);
                echo "\" width=\"25\" height=\"20\" >
                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\"
                        onclick = \"return confirm('Do you want to delete this student ?')\">
                            <img src = \"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/delete.png"), "html", null, true);
                echo "\" width=\"25\" height=\"20\" >
                        </a>
                    </td>
                    ";
            }
            // line 91
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </table>
            
                  </div>
                  <div class=\"col-sm-2 sidenav\">
                  </div>
                </div>
              </div>
          <!-- Bootstrap core JavaScript-->
      <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

      <!-- simplebar js -->
      <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
      <!-- sidebar-menu js -->
      <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>

      <!-- Custom scripts -->
      <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app-script.js"), "html", null, true);
        echo "\"></script>

      <!--Bootstrap Touchspin Js-->
      <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"), "html", null, true);
        echo "\"></script>

      <!--Select Plugins Js-->
      <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.min.js"), "html", null, true);
        echo "\"></script>
      <!--Inputtags Js-->
      <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/inputtags/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>

      <!--Bootstrap Datepicker Js-->
      <script src=\"";
        // line 123
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
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-multi-select/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 142
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
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 142,  349 => 141,  328 => 123,  322 => 120,  317 => 118,  311 => 115,  307 => 114,  301 => 111,  295 => 108,  290 => 106,  284 => 103,  280 => 102,  276 => 101,  266 => 93,  259 => 91,  252 => 87,  247 => 85,  240 => 81,  236 => 80,  233 => 79,  231 => 78,  225 => 75,  221 => 74,  214 => 70,  210 => 69,  205 => 67,  202 => 66,  198 => 65,  180 => 50,  171 => 44,  166 => 42,  161 => 40,  156 => 38,  151 => 36,  146 => 34,  140 => 31,  135 => 29,  130 => 27,  125 => 25,  120 => 23,  114 => 20,  104 => 12,  98 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello StudentController!{% endblock %}

{% block body %}
<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
  {% if is_granted(\"ROLE_ADMIN\") %}
  <a href = \"{{ path('student_add') }}\">
    <img src = \"{{ asset('images/add.png') }}\" width=\"90\" heigh=\"60\" >
  </a>
  {% endif %}
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
  <tbody>
              <div class=\"container-fluid text-center\">    
                <div class=\"row content\">
                  <div class=\"col-sm-2 sidenav\">
                    <p><a class=\"nav-item nav-link\" href=\"{{ path('course') }}\">Course</a></p>
                  </div>
                  <div class=\"col-sm-8 text-left\"> 
                    <h1>Student</h1>
                    <p>This system exists to simplify information tracking for both teachers and administrative staff.</p>
                    <hr>
                    <table class=\"table table-responsive-md mt-3\">
                        <tr>
                            <th>Student ID</th>
                            <th>Image</th>
                            <th>Student Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        
            {% for student in students %}
                <tr>
                    <td>{{ student.id }}</td>
                    <td>
                      <a href=\"{{ path('student_detail', {'id': student.id}) }}\">
                          <img src=\"{{ asset('student/'~student.picture) }}\" style=\"width:19%\">
                    </a>
                    </td>
                    <td>
                        <a class=\"text-decoration-none\" href= \"{{ path('student_detail', {'id' : student.id }) }}\">
                            {{ student.name }}
                        </a>
                    </td>
                    {% if is_granted(\"ROLE_ADMIN\") %}
                    <td>
                        <a href = \"{{ path('student_edit', {'id' : student.id }) }}\">
                            <img src = \"{{ asset('images/edit.png') }}\" width=\"25\" height=\"20\" >
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ path('student_delete', {'id' : student.id }) }}\"
                        onclick = \"return confirm('Do you want to delete this student ?')\">
                            <img src = \"{{ asset('images/delete.png') }}\" width=\"25\" height=\"20\" >
                        </a>
                    </td>
                    {% endif %}
                </tr>
            {% endfor %}
        </table>
            
                  </div>
                  <div class=\"col-sm-2 sidenav\">
                  </div>
                </div>
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


{% endblock %}
", "student/index.html.twig", "C:\\Users\\fever\\Desktop\\Unishit\\7th\\WEBG301\\htdocs\\webg301-gch0904-2-\\student_manage\\templates\\student\\index.html.twig");
    }
}
