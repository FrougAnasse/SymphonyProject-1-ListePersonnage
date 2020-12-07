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

/* personnage/perso.html.twig */
class __TwigTemplate_704ca68abb629dcfb6890a4a592a7869758a03e3f5b197a8a25b6c2925776e9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnage/perso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnage/perso.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personnage/perso.html.twig", 1);
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

        echo "Personnages";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        // line 7
        echo "   Personnage ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "      <div class=\"row\">
         <div class=\"col-2\">
               <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/personnages/" . twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15)) . ".png")), "html", null, true);
        echo "\" alt=\"du personage ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
         </div>
         <div class=\"col\">
            <h2>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h2>
            <div>Sex :
                ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 20, $this->source); })()), "sexe", [], "any", false, false, false, 20)) {
            // line 21
            echo "                    Homme
                ";
        } else {
            // line 23
            echo "                    Femme
                ";
        }
        // line 25
        echo "            </div>
            <h2>Les caractéristique :</h2>
               <ul>
                  <li>Force : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 28, $this->source); })()), "caractéristique", [], "any", false, false, false, 28), "force", [], "any", false, false, false, 28), "html", null, true);
        echo "</li>
                  <li>Agilités : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 29, $this->source); })()), "caractéristique", [], "any", false, false, false, 29), "agilité", [], "any", false, false, false, 29), "html", null, true);
        echo "</li>
                  <li>intelligence : ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 30, $this->source); })()), "caractéristique", [], "any", false, false, false, 30), "intelligence", [], "any", false, false, false, 30), "html", null, true);
        echo "</li>
               </ul>
            
         </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "personnage/perso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 30,  148 => 29,  144 => 28,  139 => 25,  135 => 23,  131 => 21,  129 => 20,  124 => 18,  116 => 15,  112 => 13,  102 => 12,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personnages{% endblock %}


{% block monTitre %}
   Personnage {{perso.nom}}
{% endblock %}



{% block body %}
      <div class=\"row\">
         <div class=\"col-2\">
               <img src=\"{{asset('images/personnages/' ~ perso.nom ~ '.png' )}}\" alt=\"du personage {{perso.nom}}\">
         </div>
         <div class=\"col\">
            <h2>{{perso.nom}}</h2>
            <div>Sex :
                {% if perso.sexe %}
                    Homme
                {% else %}
                    Femme
                {% endif %}
            </div>
            <h2>Les caractéristique :</h2>
               <ul>
                  <li>Force : {{perso.caractéristique.force}}</li>
                  <li>Agilités : {{perso.caractéristique.agilité}}</li>
                  <li>intelligence : {{perso.caractéristique.intelligence}}</li>
               </ul>
            
         </div>
      </div>
{% endblock %}
", "personnage/perso.html.twig", "C:\\Users\\VolgoBox\\Desktop\\formation Symfony\\projetPersonage\\templates\\personnage\\perso.html.twig");
    }
}
