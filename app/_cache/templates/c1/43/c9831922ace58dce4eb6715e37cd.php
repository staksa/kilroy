<?php

/* partials/head.html */
class __TwigTemplate_c143c9831922ace58dce4eb6715e37cd extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang=\"en\"> <!--<![endif]-->
<head>

\t<!-- Metaaaa -->
\t<meta charset=\"utf-8\">
\t<title>";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo " | ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "page_title");
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 11
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "description");
        echo "\">
\t<meta name=\"author\" content=\"";
        // line 12
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "\">

\t<!-- Viewport -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<!-- CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/css/normalize.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/css/styles.css\">

\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->

\t<!-- Favicons -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 26
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/img/favicon.ico\" />
\t<link rel=\"apple-touch-icon\" href=\"";
        // line 27
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/img/apple-touch-icon.png\" />

</head>
<body>
\t
\t\t<header class=\"clearfix\">
\t\t
\t\t\t<div class=\"wrapper\">
\t\t
\t\t\t\t<h1 class=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 37
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "\">Demo</a>
\t\t\t\t</h1>
\t\t\t
\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 42
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 43
            echo "\t\t\t\t\t\t\t";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if ($this->getAttribute($_child_, "page_title")) {
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 44
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "url");
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "page_title");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 45
            echo "\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t
\t\t\t</div> <!--/ wrapper -->
\t\t\t
\t\t</header>\t";
    }

    public function getTemplateName()
    {
        return "partials/head.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
