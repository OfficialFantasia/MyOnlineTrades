<?php

/* default/index.html.twig */
class __TwigTemplate_e9894560904522df871ee4d0541e75435e458a813e4507513b44c6235a57b513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d00e95dea3054640683ae9ab4e44929f35451daa570fb439e0886affc408f9fc = $this->env->getExtension("native_profiler");
        $__internal_d00e95dea3054640683ae9ab4e44929f35451daa570fb439e0886affc408f9fc->enter($__internal_d00e95dea3054640683ae9ab4e44929f35451daa570fb439e0886affc408f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d00e95dea3054640683ae9ab4e44929f35451daa570fb439e0886affc408f9fc->leave($__internal_d00e95dea3054640683ae9ab4e44929f35451daa570fb439e0886affc408f9fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6e2389181bcb4786df194f497b91e13c6d43365237df36faa58e3a43beeec7c = $this->env->getExtension("native_profiler");
        $__internal_c6e2389181bcb4786df194f497b91e13c6d43365237df36faa58e3a43beeec7c->enter($__internal_c6e2389181bcb4786df194f497b91e13c6d43365237df36faa58e3a43beeec7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_c6e2389181bcb4786df194f497b91e13c6d43365237df36faa58e3a43beeec7c->leave($__internal_c6e2389181bcb4786df194f497b91e13c6d43365237df36faa58e3a43beeec7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de488817cdfa42a77bde846c06c5645cba18ed880ad72a2f339951163c8b918d = $this->env->getExtension("native_profiler");
        $__internal_de488817cdfa42a77bde846c06c5645cba18ed880ad72a2f339951163c8b918d->enter($__internal_de488817cdfa42a77bde846c06c5645cba18ed880ad72a2f339951163c8b918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <div class=\"navbar-brand\">MyOnlineTrades</div>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a>Home</a></li>
                    <li><a>Add Trade</a></li>
                </ul>
            </div>

        </div>
    </nav>
";
        
        $__internal_de488817cdfa42a77bde846c06c5645cba18ed880ad72a2f339951163c8b918d->leave($__internal_de488817cdfa42a77bde846c06c5645cba18ed880ad72a2f339951163c8b918d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Home{% endblock %}*/
/* */
/* {% block body %}*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <div class="navbar-brand">MyOnlineTrades</div>*/
/*             </div>*/
/*             <div id="navbar" class="collapse navbar-collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a>Home</a></li>*/
/*                     <li><a>Add Trade</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </nav>*/
/* {% endblock %}*/
/* */
