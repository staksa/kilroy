<?php

/* project.html */
class __TwigTemplate_e88cbdff4870b55193e7e0eadd1d31ea extends Twig_Template
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
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo ", ";
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
    <div id=\"container\" class=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id");
        echo "\">
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
        <p class=\"date col one\">";
        // line 20
        echo twig_date_format_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date"), "Y, M-");
        echo "</p>
        <div class=\"description col six\">
          <h2 class=\"col six\"><a href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</a></h2>
          ";
        // line 23
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
        </div>
        <hr>
        <p id=\"project-count\" class=\"col one\"><em>&#8470;</em> ";
        // line 26
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "index");
        echo "/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings_count");
        echo "</p>
        <p id=\"gallery-count\" class=\"col one\">
          <em>&#8470;</em> <span>1/1</span>
        </p>
        <div id=\"gallery-navigation\" class=\"col three\">
          <p><a href=\"#\" id=\"next-image\">Next image</a> <em>&rarr;</em></p>
          <p><a href=\"#\" id=\"previous-image\">Previous image</a> <em>&larr;</em></p>
        </div>
        <div class=\"col four\">
          ";
        // line 35
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings")) {
            // line 36
            echo "            ";
            $this->env->loadTemplate("partials/next-page.html")->display($context);
            // line 37
            echo "            ";
            $this->env->loadTemplate("partials/previous-page.html")->display($context);
            // line 38
            echo "          ";
        }
        // line 39
        echo "        </div>
        ";
        // line 40
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 41
        echo "      </div>
      <hr>
      <p id=\"footer\" class=\"col six\">&copy; Copyright ";
        // line 43
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " <a class=\"atom-rss\" href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/?/feed/\">RSS</a><br>
        <em>Content managed by <a href=\"http://www.staceyapp.com\">stacey</a></em></p>
    </div>
    <script type=\"text/javascript\" charset=\"utf-8\">
      document.getElementsByTagName('body')[0].className += ' js-enabled';
    </script>
    <script src=\"";
        // line 49
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/jquery-1.3.2.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 50
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/gallery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 51
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/init-gallery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "project.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
