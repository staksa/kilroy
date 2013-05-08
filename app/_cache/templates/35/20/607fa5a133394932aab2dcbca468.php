<?php

/* contact.html */
class __TwigTemplate_3520607fa5a133394932aab2dcbca468 extends Twig_Template
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
        echo "\t
<section class=\"main clearfix\">

\t<div class=\"wrapper\">\t

\t\t<aside class=\"sidebar\">
\t\t
\t\t\t";
        // line 9
        $this->env->loadTemplate("partials/nav_articles.html")->display($context);
        // line 10
        echo "
\t\t\t";
        // line 11
        $this->env->loadTemplate("partials/nav_social.html")->display($context);
        // line 12
        echo "\t\t
\t\t</aside><!--/ sidebar -->
\t
\t\t<div class=\"tasters\">\t

\t\t\t<!-- contact form here -->


\t\t
\t\t</div><!--/ tasters -->\t
\t
\t</div> <!--/ wrapper -->

</section><!--/ main -->


";
        // line 28
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "contact.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
