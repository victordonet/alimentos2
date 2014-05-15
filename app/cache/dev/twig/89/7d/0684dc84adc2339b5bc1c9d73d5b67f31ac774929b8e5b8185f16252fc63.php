<?php

/* VDGAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig */
class __TwigTemplate_897d0684dc84adc2339b5bc1c9d73d5b67f31ac774929b8e5b8185f16252fc63 extends Twig_Template
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
        echo "<table>
    <tr>
        <th>alimento (por 100g)</th>
        <th>energ&iacute;a (Kcal)</th>
        <th>proteina (g)</th>
        <th>Hidratos de Carbono (g)</th>
        <th>fibra (g)</th>
        <th>grasa (g)</th>
    </tr>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alimentos"]) ? $context["alimentos"] : $this->getContext($context, "alimentos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["alimento"]) {
            // line 11
            echo "    <tr>
        <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VAMAB_ver", array("id" => $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "id"))), "html", null, true);
            echo "\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "nombre"), "html", null, true);
            echo "</a></td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "energia"), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "proteina"), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "hidratocarbono"), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "fibra"), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimento"]) ? $context["alimento"] : $this->getContext($context, "alimento")), "grasatotal"), "html", null, true);
            echo "</td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        <tr><td colspan=\"6\" align=\"center\">No se ha encontrado ningún alimento</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alimento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "VDGAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  70 => 21,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  35 => 11,  30 => 10,  19 => 1,);
    }
}
