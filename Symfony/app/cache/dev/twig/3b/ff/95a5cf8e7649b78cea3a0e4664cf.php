<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_3bff95a5cf8e7649b78cea3a0e4664cf extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "log"), "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  72 => 16,  55 => 14,  53 => 13,  42 => 10,  23 => 4,  104 => 24,  97 => 22,  88 => 19,  82 => 19,  78 => 17,  71 => 14,  67 => 12,  49 => 12,  38 => 6,  25 => 4,  22 => 3,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  135 => 50,  131 => 48,  129 => 47,  120 => 45,  117 => 44,  113 => 43,  103 => 36,  99 => 34,  94 => 31,  74 => 27,  62 => 24,  39 => 9,  32 => 11,  17 => 1,  92 => 20,  86 => 6,  77 => 28,  57 => 9,  46 => 14,  37 => 8,  33 => 7,  29 => 5,  24 => 3,  19 => 2,  44 => 11,  41 => 7,  30 => 4,  136 => 40,  133 => 39,  126 => 46,  123 => 30,  116 => 33,  114 => 30,  111 => 29,  108 => 28,  102 => 6,  95 => 21,  90 => 45,  87 => 44,  81 => 41,  79 => 40,  75 => 16,  73 => 28,  64 => 15,  47 => 19,  35 => 7,  31 => 4,  27 => 3,  21 => 1,  85 => 43,  80 => 29,  76 => 27,  70 => 26,  65 => 22,  61 => 23,  59 => 23,  52 => 15,  43 => 12,  40 => 7,  34 => 7,  28 => 3,);
    }
}
