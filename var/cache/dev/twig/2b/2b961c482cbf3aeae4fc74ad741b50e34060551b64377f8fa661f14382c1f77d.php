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

/* @App/suggested_friends.html.twig */
class __TwigTemplate_64087572ddd6f4807a16c6348cc6c448598fc4a3e1c32cc2bab6e9b68a5455d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/suggested_friends.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/suggested_friends.html.twig"));

        // line 1
        $this->loadTemplate("@App/includes/layout.html.twig", "@App/suggested_friends.html.twig", 1)->display($context);
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
        echo "    <main>
    <div class=\"container text-center\">
        <div class=\"col my-3\">
            <h2 class=\"text-center\">Friends Suggestion</h2>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("persons_url");
        echo "\" class=\"btn btn-small btn-warning\">Back to homepage</a>
        </div>
        <h3 class=\"text-center\">Suggested Friends (friends of 2+ friends)</h3>
        <div class=\"col-8 offset-2 d-flex justify-content-between\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["close_friends"] ?? $this->getContext($context, "close_friends")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            if ((isset($context["close_friends"]) || array_key_exists("close_friends", $context))) {
                // line 13
                echo "                <div class=\"card\" style=\"width: 18rem;\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item text-center\"> <h5>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "surname", []), "html", null, true);
                echo "</h5></li>
                        <li class=\"list-group-item\">Age: ";
                // line 16
                (((null === $this->getAttribute($context["friend"], "age", []))) ? (print ("ND")) : (print (twig_escape_filter($this->env, $this->getAttribute($context["friend"], "age", []), "html", null, true))));
                echo "</li>
                        <li class=\"list-group-item\">Gender: ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "gender", []), "html", null, true);
                echo "</li>
                    </ul>
                </div>
            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 21
            echo "                <div class=\"col-12 my-5 text-center text-danger\">No suggested friends</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
        <h3 class=\"text-center\">Friends of Friends (only one friend in common)</h3>
        
        <div class=\"col-8 offset-2 d-flex justify-content-between flex-wrap\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["friends"] ?? $this->getContext($context, "friends")));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 28
            echo "                <div class=\"card my-3\" style=\"width: 18rem;\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item text-center\"> <h5>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "surname", []), "html", null, true);
            echo "</h5></li>
                        <li class=\"list-group-item\">Age: ";
            // line 31
            (((null === $this->getAttribute($context["friend"], "age", []))) ? (print ("ND")) : (print (twig_escape_filter($this->env, $this->getAttribute($context["friend"], "age", []), "html", null, true))));
            echo "</li>
                        <li class=\"list-group-item\">Gender: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "gender", []), "html", null, true);
            echo "</li>
                    </ul>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>

        <h3 class=\"text-center\">Maybe known people (no direct suggestion)</h3>
        
        <div class=\"col-8 offset-2 d-flex justify-content-between flex-wrap\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["friends_of_friends"] ?? $this->getContext($context, "friends_of_friends")));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 42
            echo "                <div class=\"card my-3\" style=\"width: 18rem;\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item text-center\"> <h5>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "surname", []), "html", null, true);
            echo "</h5></li>
                        <li class=\"list-group-item\">Age: ";
            // line 45
            (((null === $this->getAttribute($context["friend"], "age", []))) ? (print ("ND")) : (print (twig_escape_filter($this->env, $this->getAttribute($context["friend"], "age", []), "html", null, true))));
            echo "</li>
                        <li class=\"list-group-item\">Gender: ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "gender", []), "html", null, true);
            echo "</li>
                    </ul>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    </div>
        
        
        
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/suggested_friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 50,  169 => 46,  165 => 45,  159 => 44,  155 => 42,  151 => 41,  144 => 36,  134 => 32,  130 => 31,  124 => 30,  120 => 28,  116 => 27,  110 => 23,  103 => 21,  93 => 17,  89 => 16,  83 => 15,  79 => 13,  73 => 12,  66 => 8,  60 => 4,  42 => 3,  39 => 2,  37 => 1,);
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
    <div class=\"container text-center\">
        <div class=\"col my-3\">
            <h2 class=\"text-center\">Friends Suggestion</h2>
            <a href=\"{{url('persons_url')}}\" class=\"btn btn-small btn-warning\">Back to homepage</a>
        </div>
        <h3 class=\"text-center\">Suggested Friends (friends of 2+ friends)</h3>
        <div class=\"col-8 offset-2 d-flex justify-content-between\">
            {% for friend in close_friends if close_friends is defined %}
                <div class=\"card\" style=\"width: 18rem;\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item text-center\"> <h5>{{friend.name}} {{ friend.surname}}</h5></li>
                        <li class=\"list-group-item\">Age: {{ friend.age is null ? 'ND' : friend.age }}</li>
                        <li class=\"list-group-item\">Gender: {{ friend.gender }}</li>
                    </ul>
                </div>
            {% else %}
                <div class=\"col-12 my-5 text-center text-danger\">No suggested friends</div>
            {% endfor %}
        </div>
        <h3 class=\"text-center\">Friends of Friends (only one friend in common)</h3>
        
        <div class=\"col-8 offset-2 d-flex justify-content-between flex-wrap\">
            {% for friend in friends %}
                <div class=\"card my-3\" style=\"width: 18rem;\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item text-center\"> <h5>{{friend.name}} {{ friend.surname}}</h5></li>
                        <li class=\"list-group-item\">Age: {{ friend.age is null ? 'ND' : friend.age }}</li>
                        <li class=\"list-group-item\">Gender: {{ friend.gender }}</li>
                    </ul>
                </div>
            {% endfor %}
        </div>

        <h3 class=\"text-center\">Maybe known people (no direct suggestion)</h3>
        
        <div class=\"col-8 offset-2 d-flex justify-content-between flex-wrap\">
            {% for friend in friends_of_friends %}
                <div class=\"card my-3\" style=\"width: 18rem;\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item text-center\"> <h5>{{friend.name}} {{ friend.surname}}</h5></li>
                        <li class=\"list-group-item\">Age: {{ friend.age is null ? 'ND' : friend.age }}</li>
                        <li class=\"list-group-item\">Gender: {{ friend.gender }}</li>
                    </ul>
                </div>
            {% endfor %}
        </div>
    </div>
        
        
        
    </main>

{% endblock %}", "@App/suggested_friends.html.twig", "/Applications/MAMP/htdocs/SocialGraph/src/AppBundle/Resources/views/suggested_friends.html.twig");
    }
}
