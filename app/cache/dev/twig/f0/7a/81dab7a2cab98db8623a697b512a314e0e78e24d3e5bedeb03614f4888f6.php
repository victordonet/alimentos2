<?php

/* VDGAulasMentorAlimentosBundle:Default:buscarPorNombre.html.twig */
class __TwigTemplate_f07a81dab7a2cab98db8623a697b512a314e0e78e24d3e5bedeb03614f4888f6 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("VAMAB_buscar");
        echo "\" method=\"POST\">
    <table>
        <tr>
            <th>nombre alimento:</th>
            <td><input type=\"text\" name=\"nombre\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\">(puedes utilizar '%' como comod&iacute;n)</td>
            <td><input type=\"submit\" value=\"buscar\"></td>
        </tr>
    </table>
</form>
            
";
        // line 14
        if ((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado"))) {
            // line 15
            echo "    ";
            $this->env->loadTemplate("VDGAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig")->display(array_merge($context, array("alimentos" => (isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")))));
        }
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:buscarPorNombre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  48 => 14,  39 => 8,  31 => 4,  28 => 3,);
    }
}
