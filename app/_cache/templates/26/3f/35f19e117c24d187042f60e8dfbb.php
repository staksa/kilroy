<?php

/* partials/nav_social.html */
class __TwigTemplate_263f35f19e117c24d187042f60e8dfbb extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p class=\"nav-social\">Find me Here</p>
\t<ul>
\t\t<li>
\t\t\t<a href=\"http://www.facebook.com/arek.komarnicki\"><img src=\"";
        // line 4
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/img/facebook.png\" alt=\"facebook\"></a>
\t\t\t<a href=\"http://plus.google.com/111893046260780461288\"><img src=\"";
        // line 5
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/img/google.png\" alt=\"google\"></a>
\t\t\t<a href=\"http://www.github.com/arekom\"><img src=\"";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/img/git.png\" alt=\"git\"></a>
\t\t\t<a href=\"http://www.twitter.com/arekom_\"><img src=\"";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/img/twitter.png\" alt=\"twitter\"></a>
\t\t\t<a href=\"http://pinterest.com/arekkomarnicki/\"><img src=\"";
        // line 8
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/img/pinterest.png\" alt=\"pinterest\"></a>
\t\t</li>
\t</ul>";
    }

    public function getTemplateName()
    {
        return "partials/nav_social.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
