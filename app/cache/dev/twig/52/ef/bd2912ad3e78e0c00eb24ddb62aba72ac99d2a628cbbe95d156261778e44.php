<?php

/* VDGAulasMentorAlimentosBundle:Default:buscarPorEnergia.html.twig */
class __TwigTemplate_52efbd2912ad3e78e0c00eb24ddb62aba72ac99d2a628cbbe95d156261778e44 extends Twig_Template
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
        echo "<form name=\"formBusqueda\" action=\"";
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscarEnergia");
        echo "\" method=\"POST\">
    <h3>Busqueda por ENERG&IacuteA del alimento</h3>
    <table>
        <tr><td colspan=\"2\" align=\"center\"><p>(puedes utilizar '%' como comod&iacute;n)</p></td></tr>
        <tr>
            <th>Energ&iacutea del alimento:</th>
            <td><input type=\"text\" name=\"energia\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["energia"]) ? $context["energia"] : $this->getContext($context, "energia")), "html", null, true);
        echo "\"></td>
            <td><input type=\"submit\" value=\"buscar\"></td>
        </tr>
    </table>
</form>
            
";
        // line 16
        if ((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado"))) {
            // line 17
            echo "    ";
            $this->env->loadTemplate("VDGAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig")->display(array_merge($context, array("alimentos" => (isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")))));
        }
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:buscarPorEnergia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  41 => 10,  31 => 4,  28 => 3,);
    }
}
