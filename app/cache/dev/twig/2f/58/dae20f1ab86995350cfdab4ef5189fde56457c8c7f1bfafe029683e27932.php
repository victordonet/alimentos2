<?php

/* VDGAulasMentorAlimentosBundle:Default:verAlimento.html.twig */
class __TwigTemplate_2f58dae20f1ab86995350cfdab4ef5189fde56457c8c7f1bfafe029683e27932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VDGAulasMentorAlimentosBundle:Default:layout.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VDGAulasMentorAlimentosBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "    <h3>
        <a href=\"http://es.wikipedia.org/wiki/";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\" 
           class=\"clsVentanaIFrame clsBoton\" rel=\"Wikipedia\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "</a>
    </h3>
    <table border=\"1\">
        <tr>
            <td>Energ&iacute;a</td>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["energia"]) ? $context["energia"] : $this->getContext($context, "energia")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Proteina</td>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["proteina"]) ? $context["proteina"] : $this->getContext($context, "proteina")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Hidratos de Carbono</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["hidratocarbono"]) ? $context["hidratocarbono"] : $this->getContext($context, "hidratocarbono")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Fibra</td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["fibra"]) ? $context["fibra"] : $this->getContext($context, "fibra")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Grasa total</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["grasatotal"]) ? $context["grasatotal"] : $this->getContext($context, "grasatotal")), "html", null, true);
        echo "</td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:verAlimento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  67 => 22,  60 => 18,  53 => 14,  46 => 10,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
