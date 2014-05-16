<?php

/* VDGAulasMentorAlimentosBundle:Default:buscarCombinada.html.twig */
class __TwigTemplate_d9dc75280f1d7994c60ed7dcfb689c65e7ff7a3df8583ded7b1e5b1dad68a776 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscarCombinada");
        echo "\" method=\"POST\">
    <h3>Busqueda COMBINADA</h3>
    <table>
        <tr><td colspan=\"2\" align=\"center\"><p>(puedes utilizar '%' como comod&iacute;n)</p></td></tr>
        <tr>
            <th align=\"right\">Nombre:</th>
            <td><input type=\"text\" name=\"nombre\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <th align=\"right\">Energ&iacutea:</th>
            <td><input type=\"text\" name=\"energia\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["energia"]) ? $context["energia"] : $this->getContext($context, "energia")), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <th align=\"right\">Proteina:</th>
            <td><input type=\"text\" name=\"proteina\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["proteina"]) ? $context["proteina"] : $this->getContext($context, "proteina")), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <th align=\"right\">Hidratos de carbono:</th>
            <td><input type=\"text\" name=\"hc\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["hc"]) ? $context["hc"] : $this->getContext($context, "hc")), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <th align=\"right\">fibra:</th>
            <td><input type=\"text\" name=\"fibra\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["fibra"]) ? $context["fibra"] : $this->getContext($context, "fibra")), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <th align=\"right\">grasa:</th>
            <td><input type=\"text\" name=\"grasa\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["grasa"]) ? $context["grasa"] : $this->getContext($context, "grasa")), "html", null, true);
        echo "\"></td>
        </tr>
        <tr><td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"buscar\"></td></tr>
    </table>
</form>
            
";
        // line 36
        if ((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado"))) {
            // line 37
            echo "    ";
            $this->env->loadTemplate("VDGAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig")->display(array_merge($context, array("alimentos" => (isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")))));
        }
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:buscarCombinada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  85 => 36,  76 => 30,  69 => 26,  62 => 22,  55 => 18,  48 => 14,  41 => 10,  31 => 4,  28 => 3,);
    }
}
