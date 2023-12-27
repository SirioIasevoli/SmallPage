<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @App/includes/layout.html.twig */
class __TwigTemplate_7ce6e7482fe1596360a03d2dab90401741da4e17eb5d277ef6082d2ed9f99732 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/includes/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/includes/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Social Graph</title>

    <!-- bootstrap -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\" integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
    
    ";
        // line 13
        echo "    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/imgs/cia-logo-mockup-vector-21183928.jpg\">

    <!-- fontawesome -->
    <script src=\"https://kit.fontawesome.com/5dc396147b.js\" crossorigin=\"anonymous\"></script>

    <!-- datatable css -->
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css\" />
    
    <!-- datatable buttons -->
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/autofill/2.5.3/css/autoFill.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css\">
</head>
<body>
    <header>

        <nav class=\"navbar bg-body-tertiary bg-dark\" data-bs-theme=\"dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"\">
                    <img src=\"/imgs/CIA-simbolo.png\" alt=\"Logo\" width=\"30\" height=\"24\" class=\"d-inline-block align-text-top\">
                </a>
                <ul class=\"nav justify-content-center\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light\" id=\"chart_btn\">Chart</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light\" href=\"\">Thanks</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\"><i class=\"fa-solid fa-envelope\"></i></a>
                        <ul class=\"dropdown-menu\" style=\"right: 0; left: auto;\">
                            <li><a class=\"dropdown-item\" href=\"mailto:Alessandro@Corvino.it?subject=Great%20WebSite&body=I%20like%20your%20web%20site!%20Great%20job%20\">Write to Alessandro</a></li>
                            <li><a class=\"dropdown-item\" href=\"mailto:Lorenzo@Tesoro.it?subject=Great%20WebSite&body=I%20like%20your%20web%20site!%20Great%20job%20\">Write to Lorenzo</a></li>
                            <li><a class=\"dropdown-item\" href=\"mailto:Sirio@Iasevoli.it?subject=Great%20WebSite&body=I%20like%20your%20web%20site!%20Great%20job%20\">Write to Sirio</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    ";
        // line 55
        $this->displayBlock('main', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('javascript', $context, $blocks);
        // line 60
        echo "    ";
        // line 61
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct\" crossorigin=\"anonymous\"></script>
    
    ";
        // line 65
        echo "    <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\" integrity=\"sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=\" crossorigin=\"anonymous\"></script>
    
    <!-- core js -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/core-js/3.30.2/minified.js\" integrity=\"sha512-u60H4fcHTGKAVICDO65xbPZn/eTY9S/VkZxMBdfwkCaStJH88PELFskcCVXpAAyVsASRhyiyjP3zEVkFd/3KEA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    
    <!-- groupby -->
    <script src='https://cdn.jsdelivr.net/lodash/4.17.2/lodash.min.js'></script>
    
    <!-- datatable script -->
    <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js\"></script>
    
    <!-- datatables search on columns -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>
    
    <!-- datatables button -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js\"></script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 56
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 59
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/includes/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  165 => 58,  155 => 56,  146 => 55,  109 => 65,  104 => 61,  102 => 60,  100 => 58,  97 => 57,  95 => 55,  51 => 13,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Social Graph</title>

    <!-- bootstrap -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\" integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
    
    {# favicon #}
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/imgs/cia-logo-mockup-vector-21183928.jpg\">

    <!-- fontawesome -->
    <script src=\"https://kit.fontawesome.com/5dc396147b.js\" crossorigin=\"anonymous\"></script>

    <!-- datatable css -->
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css\" />
    
    <!-- datatable buttons -->
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/autofill/2.5.3/css/autoFill.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css\">
</head>
<body>
    <header>

        <nav class=\"navbar bg-body-tertiary bg-dark\" data-bs-theme=\"dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"\">
                    <img src=\"/imgs/CIA-simbolo.png\" alt=\"Logo\" width=\"30\" height=\"24\" class=\"d-inline-block align-text-top\">
                </a>
                <ul class=\"nav justify-content-center\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light\" id=\"chart_btn\">Chart</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light\" href=\"\">Thanks</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\"><i class=\"fa-solid fa-envelope\"></i></a>
                        <ul class=\"dropdown-menu\" style=\"right: 0; left: auto;\">
                            <li><a class=\"dropdown-item\" href=\"mailto:Alessandro@Corvino.it?subject=Great%20WebSite&body=I%20like%20your%20web%20site!%20Great%20job%20\">Write to Alessandro</a></li>
                            <li><a class=\"dropdown-item\" href=\"mailto:Lorenzo@Tesoro.it?subject=Great%20WebSite&body=I%20like%20your%20web%20site!%20Great%20job%20\">Write to Lorenzo</a></li>
                            <li><a class=\"dropdown-item\" href=\"mailto:Sirio@Iasevoli.it?subject=Great%20WebSite&body=I%20like%20your%20web%20site!%20Great%20job%20\">Write to Sirio</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    {% block main %}
    {% endblock %}

    {% block javascript %}
    {% endblock %}
    {# bootstrap #}
    <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct\" crossorigin=\"anonymous\"></script>
    
    {# jquery #}
    <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\" integrity=\"sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=\" crossorigin=\"anonymous\"></script>
    
    <!-- core js -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/core-js/3.30.2/minified.js\" integrity=\"sha512-u60H4fcHTGKAVICDO65xbPZn/eTY9S/VkZxMBdfwkCaStJH88PELFskcCVXpAAyVsASRhyiyjP3zEVkFd/3KEA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    
    <!-- groupby -->
    <script src='https://cdn.jsdelivr.net/lodash/4.17.2/lodash.min.js'></script>
    
    <!-- datatable script -->
    <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js\"></script>
    
    <!-- datatables search on columns -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>
    
    <!-- datatables button -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js\"></script>
</body>

</html>
", "@App/includes/layout.html.twig", "/Applications/MAMP/htdocs/SocialGraph/src/AppBundle/Resources/views/includes/layout.html.twig");
    }
}
