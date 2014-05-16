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
        // line 13
        echo "    <div id=\"contenido\">
    ";
        // line 14
        $this->displayBlock('contenido', $context, $blocks);
        // line 16
        echo "    </div>
    ";
        // line 17
        $this->displayBlock('pie', $context, $blocks);
    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        $this->env->loadTemplate("VDGAulasMentorAlimentosBundle:Default:cabecera.html.twig")->display($context);
        // line 12
        echo "    ";
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "    ";
    }

    // line 17
    public function block_pie($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        $this->env->loadTemplate("VDGAulasMentorAlimentosBundle:Default:pie.html.twig")->display($context);
        // line 19
        echo "    ";
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
        return array (  96 => 19,  93 => 18,  90 => 17,  86 => 15,  83 => 14,  79 => 12,  76 => 11,  73 => 10,  69 => 17,  66 => 16,  64 => 14,  61 => 13,  58 => 10,  55 => 9,  49 => 7,  44 => 6,  41 => 5,  36 => 3,  33 => 2,);
    }
}
