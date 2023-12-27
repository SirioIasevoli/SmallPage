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

/* @App/homepage.html.twig */
class __TwigTemplate_1efaf95f1702c4b38f6a83795856732668d44352e7b972814f7c4dd2e9e8ebbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/homepage.html.twig"));

        // line 1
        $this->loadTemplate("@App/includes/layout.html.twig", "@App/homepage.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <main>
        <div class=\"container d-flex justify-content-between\">
            <div class=\"col-4\">
                <div class=\"col-12 d-flex flex-column align-items-start\">
                    <div class=\"form-group\">
                        <label for=\"persons\">Choose Person to Check</label>
                        <select id=\"persons\" class=\"form-control\">
                            <option selected>Choose...</option>
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? $this->getContext($context, "persons")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 13
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", []), "html", null, true);
            echo " </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                        </select>
                    </div>
                    <button class=\"btn btn-small btn-warning\" id=\"person_detail\">See Person's Details</button>
                </div>
            </div>
            <div class=\"col-8\" id=\"person_show\">
                <img src=\"https://1000logos.net/wp-content/uploads/2016/11/CIA-Emblem.png\" alt=\"cia logo\" class=\"img-fluid\" id=\"initial_logo\">
                <div class=\"col-8 offset-2 my-5\">
                    <h2 class=\"text-center\" id=\"current_person\"></h2>
                </div>
            
                <div class=\"col-12\">
                    <h2 class=\"text-center d-none\" id=\"friends_title\">All Friends Information</h2>
                    <div class=\"card-deck d-flex justify-content-center flex-wrap\" id=\"friends_cards\">
                    </div>
                    <div class=\"col-6 offset-3\" id=\"friend_info\"></div>
                </div>
                <div class=\"col-12\">
                    <h2 class=\"text-center d-none\" id=\"cities_title\">All Cities Information</h2>
                    <div class=\"card-deck d-flex justify-content-center flex-wrap\" id=\"cities_cards\">                        
                    </div>
                    <div class=\"col-6 offset-3\" id=\"city_info\"></div>
                </div>
            </div>
        
        </div>
    </main>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 47
        echo "    ";
        $this->loadTemplate("@App/js/homepage.js.twig", "@App/homepage.html.twig", 47)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 47,  133 => 46,  94 => 15,  81 => 13,  77 => 12,  67 => 4,  58 => 3,  48 => 46,  45 => 45,  43 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include \"@App/includes/layout.html.twig\" %}

{% block main %}
    <main>
        <div class=\"container d-flex justify-content-between\">
            <div class=\"col-4\">
                <div class=\"col-12 d-flex flex-column align-items-start\">
                    <div class=\"form-group\">
                        <label for=\"persons\">Choose Person to Check</label>
                        <select id=\"persons\" class=\"form-control\">
                            <option selected>Choose...</option>
                            {% for person in persons %}
                                <option value=\"{{person.id}}\">{{person.name}} {{person.surname}} </option>
                            {% endfor %}
                        </select>
                    </div>
                    <button class=\"btn btn-small btn-warning\" id=\"person_detail\">See Person's Details</button>
                </div>
            </div>
            <div class=\"col-8\" id=\"person_show\">
                <img src=\"https://1000logos.net/wp-content/uploads/2016/11/CIA-Emblem.png\" alt=\"cia logo\" class=\"img-fluid\" id=\"initial_logo\">
                <div class=\"col-8 offset-2 my-5\">
                    <h2 class=\"text-center\" id=\"current_person\"></h2>
                </div>
            
                <div class=\"col-12\">
                    <h2 class=\"text-center d-none\" id=\"friends_title\">All Friends Information</h2>
                    <div class=\"card-deck d-flex justify-content-center flex-wrap\" id=\"friends_cards\">
                    </div>
                    <div class=\"col-6 offset-3\" id=\"friend_info\"></div>
                </div>
                <div class=\"col-12\">
                    <h2 class=\"text-center d-none\" id=\"cities_title\">All Cities Information</h2>
                    <div class=\"card-deck d-flex justify-content-center flex-wrap\" id=\"cities_cards\">                        
                    </div>
                    <div class=\"col-6 offset-3\" id=\"city_info\"></div>
                </div>
            </div>
        
        </div>
    </main>
    

{% endblock %}

{% block javascript %}
    {% include \"@App/js/homepage.js.twig\" %}
{% endblock %}", "@App/homepage.html.twig", "/Applications/MAMP/htdocs/SocialGraph/src/AppBundle/Resources/views/homepage.html.twig");
    }
}
