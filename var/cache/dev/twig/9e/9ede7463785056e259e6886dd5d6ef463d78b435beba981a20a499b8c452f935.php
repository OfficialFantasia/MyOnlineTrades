<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_75216fe6b85273a8a2eb75261ba254534cb467dfcf64cde26edec581fecf66e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2270dfedc5af669c773973dae2511bffea993d3f59f9aaf8adf0089b5ae2392 = $this->env->getExtension("native_profiler");
        $__internal_e2270dfedc5af669c773973dae2511bffea993d3f59f9aaf8adf0089b5ae2392->enter($__internal_e2270dfedc5af669c773973dae2511bffea993d3f59f9aaf8adf0089b5ae2392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2270dfedc5af669c773973dae2511bffea993d3f59f9aaf8adf0089b5ae2392->leave($__internal_e2270dfedc5af669c773973dae2511bffea993d3f59f9aaf8adf0089b5ae2392_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92c7b282627a249b11928b6d6d3f480e9fdba40669b0d2aa4706ad936edfdd2b = $this->env->getExtension("native_profiler");
        $__internal_92c7b282627a249b11928b6d6d3f480e9fdba40669b0d2aa4706ad936edfdd2b->enter($__internal_92c7b282627a249b11928b6d6d3f480e9fdba40669b0d2aa4706ad936edfdd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_92c7b282627a249b11928b6d6d3f480e9fdba40669b0d2aa4706ad936edfdd2b->leave($__internal_92c7b282627a249b11928b6d6d3f480e9fdba40669b0d2aa4706ad936edfdd2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3395e6409c94257ec475eca076d83f8fd658d68612ee771d6eb21ea7c0319264 = $this->env->getExtension("native_profiler");
        $__internal_3395e6409c94257ec475eca076d83f8fd658d68612ee771d6eb21ea7c0319264->enter($__internal_3395e6409c94257ec475eca076d83f8fd658d68612ee771d6eb21ea7c0319264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3395e6409c94257ec475eca076d83f8fd658d68612ee771d6eb21ea7c0319264->leave($__internal_3395e6409c94257ec475eca076d83f8fd658d68612ee771d6eb21ea7c0319264_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12dd9330eb34a7883599e7403fae47a1149c2758dc71e11233e934dd3e32c98 = $this->env->getExtension("native_profiler");
        $__internal_e12dd9330eb34a7883599e7403fae47a1149c2758dc71e11233e934dd3e32c98->enter($__internal_e12dd9330eb34a7883599e7403fae47a1149c2758dc71e11233e934dd3e32c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e12dd9330eb34a7883599e7403fae47a1149c2758dc71e11233e934dd3e32c98->leave($__internal_e12dd9330eb34a7883599e7403fae47a1149c2758dc71e11233e934dd3e32c98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
