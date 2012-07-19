<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e06f198f71f3b70bc815d9f9c88d87a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  30 => 4,  136 => 40,  133 => 39,  126 => 31,  123 => 30,  116 => 33,  114 => 30,  111 => 29,  108 => 28,  102 => 6,  95 => 47,  90 => 45,  87 => 44,  81 => 41,  79 => 39,  75 => 37,  73 => 28,  64 => 24,  47 => 13,  35 => 7,  31 => 6,  27 => 3,  21 => 1,  85 => 43,  80 => 29,  76 => 27,  70 => 27,  65 => 22,  61 => 23,  59 => 22,  52 => 15,  43 => 12,  40 => 7,  34 => 5,  28 => 3,);
    }
}
