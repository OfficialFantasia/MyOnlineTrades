<?php

/* base.html.twig */
class __TwigTemplate_79b8526896db30006db6d88820b1b3bbfd9700918b3aced658ea2c08718630a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2894958ba365bc873ad1b3b0fece2d867445e1f5e7d0183922141c3f67357fc1 = $this->env->getExtension("native_profiler");
        $__internal_2894958ba365bc873ad1b3b0fece2d867445e1f5e7d0183922141c3f67357fc1->enter($__internal_2894958ba365bc873ad1b3b0fece2d867445e1f5e7d0183922141c3f67357fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>MyOnlineTrades - ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "    </body>
</html>
";
        
        $__internal_2894958ba365bc873ad1b3b0fece2d867445e1f5e7d0183922141c3f67357fc1->leave($__internal_2894958ba365bc873ad1b3b0fece2d867445e1f5e7d0183922141c3f67357fc1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_90b4eb080adc88122b47de3f5defd1b86750a804b92d1875a691f8402b6686e0 = $this->env->getExtension("native_profiler");
        $__internal_90b4eb080adc88122b47de3f5defd1b86750a804b92d1875a691f8402b6686e0->enter($__internal_90b4eb080adc88122b47de3f5defd1b86750a804b92d1875a691f8402b6686e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_90b4eb080adc88122b47de3f5defd1b86750a804b92d1875a691f8402b6686e0->leave($__internal_90b4eb080adc88122b47de3f5defd1b86750a804b92d1875a691f8402b6686e0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e357a70673a27fd0f39355ca8d3e33d7ab208e166600722ad1a57945fa92e8d5 = $this->env->getExtension("native_profiler");
        $__internal_e357a70673a27fd0f39355ca8d3e33d7ab208e166600722ad1a57945fa92e8d5->enter($__internal_e357a70673a27fd0f39355ca8d3e33d7ab208e166600722ad1a57945fa92e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e357a70673a27fd0f39355ca8d3e33d7ab208e166600722ad1a57945fa92e8d5->leave($__internal_e357a70673a27fd0f39355ca8d3e33d7ab208e166600722ad1a57945fa92e8d5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  54 => 4,  45 => 10,  43 => 9,  37 => 6,  33 => 5,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>MyOnlineTrades - {% block title %}{% endblock %}</title>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
