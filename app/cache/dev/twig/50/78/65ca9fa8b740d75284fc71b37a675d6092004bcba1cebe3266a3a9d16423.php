<?php

/* VDGAulasMentorAlimentosBundle:Default:index.html.twig */
class __TwigTemplate_507865ca9fa8b740d75284fc71b37a675d6092004bcba1cebe3266a3a9d16423 extends Twig_Template
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

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Inicio</h1>
    <h3>Hoy es ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "d/m/Y"), "html", null, true);
        echo "</h3>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
