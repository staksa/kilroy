<?php

/* resume.html */
class __TwigTemplate_f8229e8dc5d01d565de170d6d1a7a6de extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("partials/head.html")->display($context);
        // line 2
        echo "
<section class=\"main clearfix\">



</section><!--/ main -->


";
        // line 10
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "resume.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
