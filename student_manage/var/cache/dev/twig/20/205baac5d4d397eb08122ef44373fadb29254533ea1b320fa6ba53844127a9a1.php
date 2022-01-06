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

/* base.html.twig */
class __TwigTemplate_870e38572bde2ce2d997dd3da5197bf3de751d567d12ffed0dd3067568b110b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'flash' => [$this, 'block_flash'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('flash', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('nav', $context, $blocks);
        // line 215
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 218
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <!-- CSS only -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <!-- JavaScript Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_flash($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        // line 20
        echo "            <div class=\"container col-md-8 mt-3 text-center\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "Error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 22
            echo "                    <p class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo " </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 25
            echo "                    <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo " </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "        <div id=\"wrapper\">
      
            <!--Start sidebar-wrapper-->
            <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
              <div class=\"brand-logo\">
                <a href=\"index.php\">
                  <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-icon.png"), "html", null, true);
        echo "\" class=\"logo-icon\" alt=\"logo icon\">
                  <h5 class=\"logo-text\"></h5>
                </a>
              </div>
              <ul class=\"sidebar-menu\">
                <li class=\"sidebar-header\">MAIN NAVIGATION</li>
                <li>
                    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"waves-effect\">
                      <i class=\"zmdi zmdi-widgets\"></i> <span>Home</span>
                      <i class=\"fa fa-angle-left float-right\"></i>
                    </a>
                  </li>
                <li>
                  <a href=\"teacher\" class=\"waves-effect\">
                    <i class=\"zmdi zmdi-view-dashboard\"></i> <span>View Tutor</span><i class=\"fa fa-angle-left pull-right\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"student\" class=\"waves-effect\">
                    <i class=\"zmdi zmdi-layers\"></i>
                    <span>View Student</span> <i class=\"fa fa-angle-left pull-right\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"course\" class=\"waves-effect\">
                    <i class=\"zmdi zmdi-widgets\"></i> <span>List Course</span>
                    <i class=\"fa fa-angle-left float-right\"></i>
                  </a>
                </li>
                <li>
                    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"waves-effect\">
                      <i class=\"zmdi zmdi-widgets\"></i> <span>Register</span>
                      <i class=\"fa fa-angle-left float-right\"></i>
                    </a>
                  </li>


                <!-- <li>
                  <a href=\"javaScript:void();\" class=\"waves-effect\">
                    <i class=\"zmdi zmdi-widgets\"></i> <span>Widgets</span>
                    <i class=\"fa fa-angle-left float-right\"></i>
                  </a>
                  <ul class=\"sidebar-submenu\">
                    <li><a href=\"widgets-static.html\"><i class=\"zmdi zmdi-dot-circle-alt\"></i> Static Widgets</a></li>
                    <li><a href=\"widgets-data.html\"><i class=\"zmdi zmdi-dot-circle-alt\"></i> Data Widgets</a></li>
                  </ul>
                </li> -->
              </ul>
        
            </div>
            <!--End sidebar-wrapper-->
        
            <!--Start topbar header-->
            <header class=\"topbar-nav\">
              <nav class=\"navbar navbar-expand fixed-top\">
                <ul class=\"navbar-nav mr-auto align-items-center\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link toggle-menu\" href=\"javascript:void();\">
                      <i class=\"icon-menu menu-icon\"></i>
                    </a>
                  </li>
                  <li class=\"nav-item\">
  
                  </li>
                </ul>
                <thead>
                  <ul class=\"navbar-nav align-items-center right-nav-link\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"user-profile\"><img src=\"https://via.placeholder.com/150\" class=\"img-circle\" alt=\"user avatar\"></span>
                      </a>
                      <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"dropdown-item user-details\">
                          <a href=\"javaScript:void();\">
                            <div class=\"media\">
                              <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/150\" alt=\"user avatar\"></div>
                              <div class=\"media-body\">
                                <h6 class=\"mt-2 user-title\"><?php echo \$_SESSION['username'];  ?></h6>
                                <p class=\"user-subtitle\"></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class=\"dropdown-divider\"></li>
                        <button type=\"button\" class=\"btn btn-light waves-effect waves-light m-1\" onclick=\"openForm()\"> <i class=\"fa fa-star\"></i> <span>Edit Account</span> </button>
                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\"><i class=\"icon-wallet mr-2\"></i> Account</li>
                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> Setting</li>
                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a> </li>
                      </ul>
                    </li>
                  </ul>
                </thead>
              </nav>
            </header>
            <!--End topbar header-->
        
            <div class=\"clearfix\"></div>
        
            <div class=\"content-wrapper\">
              <div class=\"container-fluid\">
        
                <!-- form edit popup -->
                <div class=\"form-popup\" id=\"myForm\">
                  <div class=\"card\">
                    <div class=\"card-header\">Change Information</div>
                    <div class=\"card-body\">
                      <form method=\"post\">
                        <thead>
                          <h6 class=\"mt-2 user-title\"></h6>
                          <p class=\"user-subtitle\"></p>
                          <div class=\"form-group\">
                            <label for=\"input-6\">Address</label>
                            <input type=\"text\" name=userAddress class=\"form-control form-control-rounded\" id=\"input-6\" placeholder=\"\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"input-7\">Phone</label>
                            <input type=\"text\" name=userPhone class=\"form-control form-control-rounded\" id=\"input-7\" placeholder=\"\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"input-8\">Age</label>
                            <input type=\"number\" name=userAge class=\"form-control form-control-rounded\" id=\"input-8\" placeholder=\"\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"input-9\">Avatar</label>
                            <input type=\"link\" name=userAvatar class=\"form-control form-control-rounded\" id=\"input-9\" placeholder=\"Input Link Image\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"input-10\">Password</label>
                            <input type=\"password\" name=userPassword class=\"form-control form-control-rounded\" id=\"input-10\">
                          </div>
        
                          <button type=\"submit\" name=\"submit\" class=\"btn btn-light btn-round px-5\"><i class=\"icon-circle\"></i> Change</button>
                          <button class=\"btn btn-light btn-round px-5\" onclick=\"closeForm()\"><i class=\"icon-lock\"></i> Close</button>
        
                        </thead>
        
                      </form>
                    </div>
                  </div>
                </div>
  
                          </thead>
        
                        </form>
                      </div>
                    </div>
                  </div>
        
        
                <!--End Row-->
                <!--start overlay-->
                <div class=\"overlay toggle-menu\"></div>
                <!--end overlay-->
              </div>
              <!-- End container-fluid-->
        
            </div>
            <!--End content-wrapper-->
            <!--Start Back To Top Button-->
            <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
            <!--End Back To Top Button-->
        
            <!--start color switcher-->
            <!--end color switcher-->
        
          </div>
          <!--End wrapper-->








        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 216
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  432 => 216,  422 => 215,  323 => 126,  260 => 66,  234 => 43,  224 => 36,  216 => 30,  206 => 29,  195 => 27,  186 => 25,  181 => 24,  172 => 22,  168 => 21,  165 => 20,  155 => 19,  143 => 14,  133 => 13,  121 => 9,  111 => 8,  92 => 5,  80 => 218,  77 => 215,  74 => 29,  72 => 19,  68 => 17,  66 => 13,  63 => 12,  60 => 8,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            <!-- CSS only -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        {% endblock %}

        {% block javascripts %}
            <!-- JavaScript Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>
    <body>
        {% block flash %}
            <div class=\"container col-md-8 mt-3 text-center\">
                {% for flash in app.flashes(\"Error\") %}
                    <p class=\"alert alert-danger\">{{ flash }} </p>
                {% endfor %}
                {% for flash in app.flashes(\"Success\") %}
                    <p class=\"alert alert-success\">{{ flash }} </p>
                {% endfor %}
            </div>
        {% endblock %}
        {% block nav %}
        <div id=\"wrapper\">
      
            <!--Start sidebar-wrapper-->
            <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
              <div class=\"brand-logo\">
                <a href=\"index.php\">
                  <img src=\"{{ asset('images/logo-icon.png') }}\" class=\"logo-icon\" alt=\"logo icon\">
                  <h5 class=\"logo-text\"></h5>
                </a>
              </div>
              <ul class=\"sidebar-menu\">
                <li class=\"sidebar-header\">MAIN NAVIGATION</li>
                <li>
                    <a href=\"{{ path('home') }}\" class=\"waves-effect\">
                      <i class=\"zmdi zmdi-widgets\"></i> <span>Home</span>
                      <i class=\"fa fa-angle-left float-right\"></i>
                    </a>
                  </li>
                <li>
                  <a href=\"teacher\" class=\"waves-effect\">
                    <i class=\"zmdi zmdi-view-dashboard\"></i> <span>View Tutor</span><i class=\"fa fa-angle-left pull-right\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"student\" class=\"waves-effect\">
                    <i class=\"zmdi zmdi-layers\"></i>
                    <span>View Student</span> <i class=\"fa fa-angle-left pull-right\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"course\" class=\"waves-effect\">
                    <i class=\"zmdi zmdi-widgets\"></i> <span>List Course</span>
                    <i class=\"fa fa-angle-left float-right\"></i>
                  </a>
                </li>
                <li>
                    <a href=\"{{ path('app_register') }}\" class=\"waves-effect\">
                      <i class=\"zmdi zmdi-widgets\"></i> <span>Register</span>
                      <i class=\"fa fa-angle-left float-right\"></i>
                    </a>
                  </li>


                <!-- <li>
                  <a href=\"javaScript:void();\" class=\"waves-effect\">
                    <i class=\"zmdi zmdi-widgets\"></i> <span>Widgets</span>
                    <i class=\"fa fa-angle-left float-right\"></i>
                  </a>
                  <ul class=\"sidebar-submenu\">
                    <li><a href=\"widgets-static.html\"><i class=\"zmdi zmdi-dot-circle-alt\"></i> Static Widgets</a></li>
                    <li><a href=\"widgets-data.html\"><i class=\"zmdi zmdi-dot-circle-alt\"></i> Data Widgets</a></li>
                  </ul>
                </li> -->
              </ul>
        
            </div>
            <!--End sidebar-wrapper-->
        
            <!--Start topbar header-->
            <header class=\"topbar-nav\">
              <nav class=\"navbar navbar-expand fixed-top\">
                <ul class=\"navbar-nav mr-auto align-items-center\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link toggle-menu\" href=\"javascript:void();\">
                      <i class=\"icon-menu menu-icon\"></i>
                    </a>
                  </li>
                  <li class=\"nav-item\">
  
                  </li>
                </ul>
                <thead>
                  <ul class=\"navbar-nav align-items-center right-nav-link\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"user-profile\"><img src=\"https://via.placeholder.com/150\" class=\"img-circle\" alt=\"user avatar\"></span>
                      </a>
                      <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"dropdown-item user-details\">
                          <a href=\"javaScript:void();\">
                            <div class=\"media\">
                              <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/150\" alt=\"user avatar\"></div>
                              <div class=\"media-body\">
                                <h6 class=\"mt-2 user-title\"><?php echo \$_SESSION['username'];  ?></h6>
                                <p class=\"user-subtitle\"></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class=\"dropdown-divider\"></li>
                        <button type=\"button\" class=\"btn btn-light waves-effect waves-light m-1\" onclick=\"openForm()\"> <i class=\"fa fa-star\"></i> <span>Edit Account</span> </button>
                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\"><i class=\"icon-wallet mr-2\"></i> Account</li>
                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> Setting</li>
                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> <a href=\"{{ path('app_logout') }}\">Logout</a> </li>
                      </ul>
                    </li>
                  </ul>
                </thead>
              </nav>
            </header>
            <!--End topbar header-->
        
            <div class=\"clearfix\"></div>
        
            <div class=\"content-wrapper\">
              <div class=\"container-fluid\">
        
                <!-- form edit popup -->
                <div class=\"form-popup\" id=\"myForm\">
                  <div class=\"card\">
                    <div class=\"card-header\">Change Information</div>
                    <div class=\"card-body\">
                      <form method=\"post\">
                        <thead>
                          <h6 class=\"mt-2 user-title\"></h6>
                          <p class=\"user-subtitle\"></p>
                          <div class=\"form-group\">
                            <label for=\"input-6\">Address</label>
                            <input type=\"text\" name=userAddress class=\"form-control form-control-rounded\" id=\"input-6\" placeholder=\"\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"input-7\">Phone</label>
                            <input type=\"text\" name=userPhone class=\"form-control form-control-rounded\" id=\"input-7\" placeholder=\"\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"input-8\">Age</label>
                            <input type=\"number\" name=userAge class=\"form-control form-control-rounded\" id=\"input-8\" placeholder=\"\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"input-9\">Avatar</label>
                            <input type=\"link\" name=userAvatar class=\"form-control form-control-rounded\" id=\"input-9\" placeholder=\"Input Link Image\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"input-10\">Password</label>
                            <input type=\"password\" name=userPassword class=\"form-control form-control-rounded\" id=\"input-10\">
                          </div>
        
                          <button type=\"submit\" name=\"submit\" class=\"btn btn-light btn-round px-5\"><i class=\"icon-circle\"></i> Change</button>
                          <button class=\"btn btn-light btn-round px-5\" onclick=\"closeForm()\"><i class=\"icon-lock\"></i> Close</button>
        
                        </thead>
        
                      </form>
                    </div>
                  </div>
                </div>
  
                          </thead>
        
                        </form>
                      </div>
                    </div>
                  </div>
        
        
                <!--End Row-->
                <!--start overlay-->
                <div class=\"overlay toggle-menu\"></div>
                <!--end overlay-->
              </div>
              <!-- End container-fluid-->
        
            </div>
            <!--End content-wrapper-->
            <!--Start Back To Top Button-->
            <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
            <!--End Back To Top Button-->
        
            <!--start color switcher-->
            <!--end color switcher-->
        
          </div>
          <!--End wrapper-->








        {% endblock %}
        {% block body %}

        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\fever\\Desktop\\Unishit\\7th\\WEBG301\\htdocs\\webg301-gch0904-2-\\student_manage\\templates\\base.html.twig");
    }
}
