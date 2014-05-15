<?php

/* VDGAulasMentorAlimentosBundle:Default:layout.html.twig */
class __TwigTemplate_68760d9776ad55c05bc703149afb40cb0ddfcb10bc56e84072c2d895f4d136bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'cabecera' => array($this, 'block_cabecera'),
            'contenido' => array($this, 'block_contenido'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "     Informaci&oacute;n Alimentos
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vdgaulasmentoralimentos/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vdgaulasmentoralimentos/css/ventanas-modales.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayBlock('cabecera', $context, $blocks);
        // line 25
        echo "    <div id=\"contenido\">
    ";
        // line 26
        $this->displayBlock('contenido', $context, $blocks);
        // line 28
        echo "    </div>
    ";
        // line 29
        $this->displayBlock('pie', $context, $blocks);
    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        // line 11
        echo "        <div id=\"cabecera\">
            <h1>Información de alimentos</h1>
        </div>
        <div id=\"menu\">
            <hr/>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("VAMAB_homepage");
        echo "\">inicio</a> |
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("VAMAB_listar");
        echo "\">ver alimentos</a> |
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("VAMAB_insertar");
        echo "\">insertar alimento</a> |
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscar");
        echo "\">buscar por nombre</a> |
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscar");
        echo "\">buscar por energia</a> |
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscar");
        echo "\">búsqueda combinada</a>
            <hr/>
        </div>
    ";
    }

    // line 26
    public function block_contenido($context, array $blocks = array())
    {
        // line 27
        echo "    ";
    }

    // line 29
    public function block_pie($context, array $blocks = array())
    {
        // line 30
        echo "    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de p&aacute;gina -</div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  118 => 29,  114 => 27,  111 => 26,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  76 => 11,  73 => 10,  69 => 29,  66 => 28,  64 => 26,  61 => 25,  58 => 10,  55 => 9,  49 => 7,  44 => 6,  41 => 5,  36 => 3,  33 => 2,);
    }
}
