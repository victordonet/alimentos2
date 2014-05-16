<?php

/* VDGAulasMentorAlimentosBundle:Default:formInsertar.html.twig */
class __TwigTemplate_11a3b96e73fdbaf110fb8192eb0acf7174b64f3401e6ffac45171f4fd6e1a355 extends Twig_Template
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
        if (array_key_exists("mensaje", $context)) {
            // line 5
            echo "        <b><span style=\"color: red;\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</span></b>
    ";
        }
        // line 7
        echo "    <form name=\"formInsertar\" action=\"";
        echo $this->env->getExtension('routing')->getPath("VAMAB_insertar");
        echo "\" method=\"POST\">
        <h3>Insertar nuevo alimento</h3>
        <table>
            <tr><td colspan=\"2\" align=\"center\"><p>* Los valores deben referirse a 100 g del alimento</p></td></tr>
            <tr>
                <th align=\"right\">Nombre</th>
                <td><input type=\"text\" name=\"nombre\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th align=\"right\">Energ&iacute;a (Kcal)</th>
                <td><input type=\"text\" name=\"energia\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["energia"]) ? $context["energia"] : $this->getContext($context, "energia")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th align=\"right\">Proteina (g)</th>
                <td><input type=\"text\" name=\"proteina\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["proteina"]) ? $context["proteina"] : $this->getContext($context, "proteina")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th align=\"right\">H. de carbono (g)</th>
                <td><input type=\"text\" name=\"hc\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["hc"]) ? $context["hc"] : $this->getContext($context, "hc")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th align=\"right\">Fibra (g)</th>
                <td><input type=\"text\" name=\"fibra\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["fibra"]) ? $context["fibra"] : $this->getContext($context, "fibra")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th align=\"right\">Grasa total (g)</th>
                <td><input type=\"text\" name=\"grasa\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["grasa"]) ? $context["grasa"] : $this->getContext($context, "grasa")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"insertar\" name=\"insertar\" /></td>
            </tr>
        </table>
    </form>

";
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:formInsertar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  78 => 29,  71 => 25,  64 => 21,  57 => 17,  50 => 13,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
