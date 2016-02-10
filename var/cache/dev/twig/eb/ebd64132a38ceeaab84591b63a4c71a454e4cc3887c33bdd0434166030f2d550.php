<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e8d7bd0b8fcc4bbac60d1045b4304deaeb86003ab23b6fc39dcf48279a9fd372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e0cc1fa31ed67dd4b5d6522d4753035772d8e95aef108c76447087fef202bc0 = $this->env->getExtension("native_profiler");
        $__internal_7e0cc1fa31ed67dd4b5d6522d4753035772d8e95aef108c76447087fef202bc0->enter($__internal_7e0cc1fa31ed67dd4b5d6522d4753035772d8e95aef108c76447087fef202bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0cc1fa31ed67dd4b5d6522d4753035772d8e95aef108c76447087fef202bc0->leave($__internal_7e0cc1fa31ed67dd4b5d6522d4753035772d8e95aef108c76447087fef202bc0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41a7011cbf8612496569ad0bd0c3a1232c1fe6929eea44d2ef0554199c186446 = $this->env->getExtension("native_profiler");
        $__internal_41a7011cbf8612496569ad0bd0c3a1232c1fe6929eea44d2ef0554199c186446->enter($__internal_41a7011cbf8612496569ad0bd0c3a1232c1fe6929eea44d2ef0554199c186446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_41a7011cbf8612496569ad0bd0c3a1232c1fe6929eea44d2ef0554199c186446->leave($__internal_41a7011cbf8612496569ad0bd0c3a1232c1fe6929eea44d2ef0554199c186446_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b19fe9d669dafb655fa40627c10aeb0c9dff2dc4d4811619d45ecc96d5313d0 = $this->env->getExtension("native_profiler");
        $__internal_5b19fe9d669dafb655fa40627c10aeb0c9dff2dc4d4811619d45ecc96d5313d0->enter($__internal_5b19fe9d669dafb655fa40627c10aeb0c9dff2dc4d4811619d45ecc96d5313d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b19fe9d669dafb655fa40627c10aeb0c9dff2dc4d4811619d45ecc96d5313d0->leave($__internal_5b19fe9d669dafb655fa40627c10aeb0c9dff2dc4d4811619d45ecc96d5313d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ade4acf9e3e3c36b6ab3284c82fcf82de69b359cc0b56769919e6570f14fb17d = $this->env->getExtension("native_profiler");
        $__internal_ade4acf9e3e3c36b6ab3284c82fcf82de69b359cc0b56769919e6570f14fb17d->enter($__internal_ade4acf9e3e3c36b6ab3284c82fcf82de69b359cc0b56769919e6570f14fb17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ade4acf9e3e3c36b6ab3284c82fcf82de69b359cc0b56769919e6570f14fb17d->leave($__internal_ade4acf9e3e3c36b6ab3284c82fcf82de69b359cc0b56769919e6570f14fb17d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
