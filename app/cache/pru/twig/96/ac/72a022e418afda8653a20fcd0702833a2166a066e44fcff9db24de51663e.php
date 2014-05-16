<?php

/* VDGAulasMentorAlimentosBundle:Default:cabecera.html.twig */
class __TwigTemplate_96ac72a022e418afda8653a20fcd0702833a2166a066e44fcff9db24de51663e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        <div id=\"cabecera\">
            <h1>Información de alimentos</h1>
        </div>
        <div id=\"menu\">
            <hr/>
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("VAMAB_homepage");
        echo "\">inicio</a> |
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("VAMAB_listar");
        echo "\">ver alimentos</a> |
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("VAMAB_insertar");
        echo "\">insertar alimento</a> |
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscar");
        echo "\">buscar por nombre</a> |
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscarEnergia");
        echo "\">buscar por energia</a> |
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscarCombinada");
        echo "\">búsqueda combinada</a>
            <hr/>
        </div>
";
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:cabecera.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,  96 => 19,  93 => 18,  90 => 17,  86 => 15,  83 => 14,  79 => 12,  76 => 11,  73 => 10,  69 => 17,  66 => 16,  64 => 14,  61 => 13,  58 => 10,  55 => 9,  49 => 7,  44 => 6,  41 => 5,  36 => 3,  33 => 2,);
    }
}
