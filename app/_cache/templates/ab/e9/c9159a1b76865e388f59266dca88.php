<?php

/* index.html */
class __TwigTemplate_abe9c9159a1b76865e388f59266dca88 extends Twig_Template
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
<section class=\"hero\">

\t<div class=\"wrapper\">

\t\t<h2>I'd Like to Introduce You to a Friend of Mine</h2>
\t\t
\t</div> <!--/ wrapper -->

</section>

<section class=\"main clearfix\">

\t<div class=\"wrapper\">\t

\t\t<aside class=\"sidebar\">
\t\t
\t\t\t";
        // line 19
        $this->env->loadTemplate("partials/nav_articles.html")->display($context);
        // line 20
        echo "\t\t
\t\t</aside><!--/ sidebar -->
\t
\t\t<div class=\"tasters\">\t

\t\t\t";
        // line 25
        $this->env->loadTemplate("partials/list_articles.html")->display($context);
        // line 26
        echo "\t\t\t
\t\t</div><!--/ tasters -->\t
\t
\t</div> <!--/ wrapper -->

</section><!--/ main -->

";
        // line 33
        $this->env->loadTemplate("partials/footer.html")->display($context);
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
