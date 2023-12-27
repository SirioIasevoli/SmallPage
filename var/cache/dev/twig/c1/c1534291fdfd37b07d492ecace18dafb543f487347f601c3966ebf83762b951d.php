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

/* @App/suggested_cities.html.twig */
class __TwigTemplate_b10941915c550a1d488f91268e16af531eca6520680b4ce5be78d03775bbcd5d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/suggested_cities.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/suggested_cities.html.twig"));

        // line 1
        $this->loadTemplate("@App/includes/layout.html.twig", "@App/suggested_cities.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"container text-center\">
        <h2>Cities Suggested</h2>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("persons_url");
        echo "\" class=\"btn btn-small btn-warning\">Back to homepage</a>
        
        <div class=\"card-group mx-auto d-flex flex-wrap\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? $this->getContext($context, "cities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            if ((isset($context["cities"]) || array_key_exists("cities", $context))) {
                // line 11
                echo "               <div class=\"card mx-2 my-2 border border-danger\">
                    <img class=\"card-img-top img-thumbnail\" src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "picture", []), "html", null, true);
                echo "\" alt=\"Card image cap\" style=\"width:auto; height:50%;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", []), "html", null, true);
                echo "</h5>
                        <p class=\"text-center\">Affinity : ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "visit_percent", []), "html", null, true);
                echo "%</p>
                    </div>
                </div>
            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 19
            echo "                <div class=\"col-12 text-center my-5 text-danger\">No cities suggested</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/suggested_cities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  99 => 19,  89 => 15,  85 => 14,  80 => 12,  77 => 11,  71 => 10,  65 => 7,  60 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include '@App/includes/layout.html.twig' %}

{% block main %}

    <div class=\"container text-center\">
        <h2>Cities Suggested</h2>
        <a href=\"{{url('persons_url')}}\" class=\"btn btn-small btn-warning\">Back to homepage</a>
        
        <div class=\"card-group mx-auto d-flex flex-wrap\">
            {% for city in cities if cities is defined%}
               <div class=\"card mx-2 my-2 border border-danger\">
                    <img class=\"card-img-top img-thumbnail\" src=\"{{city.picture}}\" alt=\"Card image cap\" style=\"width:auto; height:50%;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{city.name}}</h5>
                        <p class=\"text-center\">Affinity : {{city.visit_percent}}%</p>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12 text-center my-5 text-danger\">No cities suggested</div>
            {% endfor %}
        </div>
    </div>

{% endblock %}", "@App/suggested_cities.html.twig", "/Applications/MAMP/htdocs/SocialGraph/src/AppBundle/Resources/views/suggested_cities.html.twig");
    }
}
