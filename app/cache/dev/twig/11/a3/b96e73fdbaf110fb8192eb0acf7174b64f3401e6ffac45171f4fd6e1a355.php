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
        echo "    <br/>
    <form name=\"formInsertar\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("VAMAB_insertar");
        echo "\" method=\"POST\">
        <table>
            <tr><td colspan=\"2\" align=\"center\">* Los valores deben referirse a 100 g del alimento</td></tr>
            <tr>
                <th>Nombre</th>
                <td><input type=\"text\" name=\"nombre\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th>Energ&iacute;a (Kcal)</th>
                <td><input type=\"text\" name=\"energia\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["energia"]) ? $context["energia"] : $this->getContext($context, "energia")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th>Proteina (g)</th>
                <td><input type=\"text\" name=\"proteina\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["proteina"]) ? $context["proteina"] : $this->getContext($context, "proteina")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th>H. de carbono (g)</th>
                <td><input type=\"text\" name=\"hc\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["hc"]) ? $context["hc"] : $this->getContext($context, "hc")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th>Fibra (g)</th>
                <td><input type=\"text\" name=\"fibra\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["fibra"]) ? $context["fibra"] : $this->getContext($context, "fibra")), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th>Grasa total (g)</th>
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
        return array (  86 => 33,  79 => 29,  72 => 25,  65 => 21,  58 => 17,  51 => 13,  43 => 8,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
