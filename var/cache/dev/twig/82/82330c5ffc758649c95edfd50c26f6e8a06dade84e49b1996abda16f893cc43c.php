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

/* @App/js/homepage.js.twig */
class __TwigTemplate_7d0945d1f80063b3a85279899352b64ea816839100e0a63d70492eb09e80e87a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/js/homepage.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/js/homepage.js.twig"));

        // line 1
        echo "<script>
    \$(document).ready(function() {
        person_detail.init();
    });

    let person_detail = {
        init: function() {
            \$('#friends_title').addClass('d-none');    
            \$('#cities_title').addClass('d-none');  
            \$('#current_person').html(\"the social graph to have everyone under control\").addClass('text-capitalize');
            \$('#initial_logo').removeClass('d-none');
            \$('#person_detail').off('click').on('click', function() {
                let person_id = \$('#persons option:selected').val();
                person_detail.populateData(person_id);
            });
        },

        populateData: function(id) {
            \$.ajax({
                url: \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("persons_statistic_url"), "js", null, true);
        echo "\",
                data : {\"id\" : id},
                type: \"GET\",
                success: function(res) {
                    \$('#friends_cards').html(\"\");
                    \$('#cities_cards').html(\"\");
                    \$('#current_person').html(`\${res['person'].name} \${res['person'].surname} Details`);
                    
                    res['friends_data'].forEach(friend=> {
                        \$('#friends_cards').append(`
                            <div class=\"card bg-info mb-3 mx-1\" style=\"min-width: 30%; max-width: 50%\">
                                <div class=\"card-header bg-warning\">\${friend.name} \${friend.surname}</div>
                                <div class=\"card-body bg-info\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item bg-info\">Age: \${friend.age == null ? 'ND' : friend.age}</li>
                                        <li class=\"list-group-item bg-info\">Gender: \${friend.gender}</li>
                                    </ul>
                                </div>
                            </div>
                        `);
                    });
                    
                    res['visit_data'].forEach(visit=> {
                        \$('#cities_cards').append(`
                            <div class=\"card mb-3 mx-1\" style=\"min-width: 30%; max-width: 50%\">
                                <img class=\"card-img-top img-thumbnail rounded\" src=\"\${visit.city_pic}\" alt=\"\${visit.city_name} image\" style=\"width:auto; height:40%;\">
                                <div class=\"card-body bg-info\">
                                    <h5 class=\"card-title\">\${visit.city_name}</h5>
                                    <div>Visit percentage: \${visit.percentage}%</div>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: \${visit.percentage}%\" aria-valuenow=\"\${visit.percentage}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>
                        `); 
                    });
                    \$('#friend_info').html(`
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("friends_suggestions_url"), "js", null, true);
        echo "/\${res['person'].id}\" class=\"btn btn-small btn-success\">See friends suggestions</a>
                    `);
                    \$('#city_info').html(`
                        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("cities_suggestions_url"), "js", null, true);
        echo "/\${res['person'].id}\" class=\"btn btn-small btn-success\">See cities suggestions</a>
                    `);  
                    \$('#friends_title').removeClass('d-none');    
                    \$('#cities_title').removeClass('d-none');
                    \$('#initial_logo').addClass('d-none');    
                },
                error: function(e) {
                    console.log(e);
                }
            })
        },
    }

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/js/homepage.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 60,  97 => 57,  57 => 20,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(document).ready(function() {
        person_detail.init();
    });

    let person_detail = {
        init: function() {
            \$('#friends_title').addClass('d-none');    
            \$('#cities_title').addClass('d-none');  
            \$('#current_person').html(\"the social graph to have everyone under control\").addClass('text-capitalize');
            \$('#initial_logo').removeClass('d-none');
            \$('#person_detail').off('click').on('click', function() {
                let person_id = \$('#persons option:selected').val();
                person_detail.populateData(person_id);
            });
        },

        populateData: function(id) {
            \$.ajax({
                url: \"{{ url('persons_statistic_url') }}\",
                data : {\"id\" : id},
                type: \"GET\",
                success: function(res) {
                    \$('#friends_cards').html(\"\");
                    \$('#cities_cards').html(\"\");
                    \$('#current_person').html(`\${res['person'].name} \${res['person'].surname} Details`);
                    
                    res['friends_data'].forEach(friend=> {
                        \$('#friends_cards').append(`
                            <div class=\"card bg-info mb-3 mx-1\" style=\"min-width: 30%; max-width: 50%\">
                                <div class=\"card-header bg-warning\">\${friend.name} \${friend.surname}</div>
                                <div class=\"card-body bg-info\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item bg-info\">Age: \${friend.age == null ? 'ND' : friend.age}</li>
                                        <li class=\"list-group-item bg-info\">Gender: \${friend.gender}</li>
                                    </ul>
                                </div>
                            </div>
                        `);
                    });
                    
                    res['visit_data'].forEach(visit=> {
                        \$('#cities_cards').append(`
                            <div class=\"card mb-3 mx-1\" style=\"min-width: 30%; max-width: 50%\">
                                <img class=\"card-img-top img-thumbnail rounded\" src=\"\${visit.city_pic}\" alt=\"\${visit.city_name} image\" style=\"width:auto; height:40%;\">
                                <div class=\"card-body bg-info\">
                                    <h5 class=\"card-title\">\${visit.city_name}</h5>
                                    <div>Visit percentage: \${visit.percentage}%</div>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: \${visit.percentage}%\" aria-valuenow=\"\${visit.percentage}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>
                        `); 
                    });
                    \$('#friend_info').html(`
                        <a href=\"{{ url('friends_suggestions_url') }}/\${res['person'].id}\" class=\"btn btn-small btn-success\">See friends suggestions</a>
                    `);
                    \$('#city_info').html(`
                        <a href=\"{{ url('cities_suggestions_url') }}/\${res['person'].id}\" class=\"btn btn-small btn-success\">See cities suggestions</a>
                    `);  
                    \$('#friends_title').removeClass('d-none');    
                    \$('#cities_title').removeClass('d-none');
                    \$('#initial_logo').addClass('d-none');    
                },
                error: function(e) {
                    console.log(e);
                }
            })
        },
    }

</script>", "@App/js/homepage.js.twig", "/Applications/MAMP/htdocs/SocialGraph/src/AppBundle/Resources/views/js/homepage.js.twig");
    }
}
