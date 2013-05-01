<?php

/* page.html */
class __TwigTemplate_bcc80b882cb60bce731e01e1c9334e91 extends Twig_Template
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

\t\t\t<article>
\t\t
\t\t\t\t<h2>";
        // line 19
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "page_title");
        echo "</h2>
\t\t\t\t\t\t
\t\t\t\t";
        // line 21
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "

\t\t\t\t";
        // line 23
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 24
        echo "\t\t\t\t\t\t\t\t
\t\t\t</article>
\t\t\t
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
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
