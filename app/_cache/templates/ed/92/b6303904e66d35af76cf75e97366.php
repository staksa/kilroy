<?php

/* post.html */
class __TwigTemplate_ed92b6303904e66d35af76cf75e97366 extends Twig_Template
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
        echo "\t\t
\t\t</aside><!--/ sidebar -->
\t
\t\t<div class=\"tasters\">\t

\t\t\t<article>
\t\t
\t\t\t\t<h2>";
        // line 17
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "page_title");
        echo "</h2>
\t\t\t\t
\t\t\t\t<p class=\"meta\">by <a href=\"#\">";
        // line 19
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "author");
        echo "</a> on <a href=\"#\">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "date");
        echo "</a> with <a href=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "url");
        echo "#disqus_thread\">Comments</a></p>
\t\t\t\t
\t\t\t\t";
        // line 21
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
\t\t\t\t
\t\t\t\t";
        // line 23
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 24
        echo "\t\t\t\t\t\t\t\t
\t\t\t</article>
\t\t\t\t\t\t
\t\t\t";
        // line 27
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "siblings")) {
            // line 28
            echo "            \t";
            $this->env->loadTemplate("partials/link_prev.html")->display($context);
            // line 29
            echo "            \t";
            $this->env->loadTemplate("partials/link_next.html")->display($context);
            // line 30
            echo "            ";
        }
        // line 31
        echo "            
\t\t\t<hr>
\t\t\t
\t\t\t<div id=\"disqus_thread\"></div>
\t        <noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
    \t\t<a href=\"http://disqus.com\" class=\"dsq-brlink\">comments powered by <span class=\"logo-disqus\">Disqus</span></a>\t\t
\t\t
\t\t</div><!--/ tasters -->\t
\t
\t</div> <!--/ wrapper -->

</section><!--/ main -->
\t\t
";
        // line 44
        $this->env->loadTemplate("partials/footer.html")->display($context);
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
