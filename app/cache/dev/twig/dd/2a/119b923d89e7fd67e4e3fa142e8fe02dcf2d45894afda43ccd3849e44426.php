<?php

/* VDGAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig */
class __TwigTemplate_dd2a119b923d89e7fd67e4e3fa142e8fe02dcf2d45894afda43ccd3849e44426 extends Twig_Template
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
        echo "    ";
        $this->env->loadTemplate("VDGAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig")->display(array_merge($context, array("alimentos" => (isset($context["alimentos"]) ? $context["alimentos"] : $this->getContext($context, "alimentos")))));
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
