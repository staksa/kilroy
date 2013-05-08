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

\t\t<!-- resume here -->
\t\t
\t\t<br><br>
\t\t<h2>Arek Komarnicki</h2>
\t\t<p>Front-End Software Engineer at Twitter. I have experience developing component-based architectures, site planning, and user interface design. Previously, I worked on projects for ASOS, Lyst, National Health Service, Arthritis Research UK, London 2012, Royal Mail, and UCL.
\t\tI contribute to Open Source Software projects, in particular as a core developer for HTML5 Boilerplate, and as the co-creator of Normalize.css</p>

\t\t<a href=\"";
        // line 24
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/documents/Head_First_Python.pdf\">Download my resume here</a>
\t\t





\t\t\t
\t\t</div><!--/ tasters -->\t
\t
\t</div> <!--/ wrapper -->

</section><!--/ main -->


";
        // line 39
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
