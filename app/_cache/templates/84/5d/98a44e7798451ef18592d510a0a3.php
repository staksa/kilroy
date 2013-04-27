<?php

/* default.html */
class __TwigTemplate_845d98a44e7798451ef18592d510a0a3 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
  \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
    <title>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "'s Portfolio </title>
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/?/feed/\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/css/screen.css\" type=\"text/css\" media=\"screen\">
  </head>
  <body>
    <div id=\"container\">
      <h1 class=\"col three\">
        <a href=\"";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</a>
        <strong>";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "profession");
        echo "</strong>
      </h1>
      <em class=\"col three\">";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "email");
        echo "</em>
      <hr>
      ";
        // line 18
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 19
        echo "      <div id=\"content\" class=\"col eight\">
        ";
        // line 20
        $this->env->loadTemplate("partials/navigation/category-lists.html")->display($context);
        // line 21
        echo "      </div>
      <hr>
      <p id=\"footer\" class=\"col six\">&copy; Copyright ";
        // line 23
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " <a class=\"atom-rss\" href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/?/feed/\">RSS</a><br>
        <em>Content managed by <a href=\"http://www.staceyapp.com\">stacey</a></em></p>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
