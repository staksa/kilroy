<?php

/* partials/footer.html */
class __TwigTemplate_fd39524ef9c5128f77374b8a6af61435 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t
\t\t<footer>
\t
\t\t\t<div class=\"wrapper\">
\t
\t\t\t\t<p>&copy; Copyright ";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo " 2013 <a class=\"atom-rss\" href=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/feed\">RSS</a> Powered by <a href=\"http://www.staceyapp.com\">stacey</a>
\t\t\t
\t\t\t</div> <!--/ wrapper -->
\t
\t\t</footer>\t
\t\t
\t\t<!--required js-->
\t\t<script src=\"";
        // line 13
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/js/disqus.min.js\"></script>
</body>
</html>\t\t";
    }

    public function getTemplateName()
    {
        return "partials/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
