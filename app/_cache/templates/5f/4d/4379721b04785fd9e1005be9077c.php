<?php

/* partials/assets/media.html */
class __TwigTemplate_5f4d4379721b04785fd9e1005be9077c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"media\">
  ";
        // line 2
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "images")) {
            // line 3
            echo "    ";
            $this->env->loadTemplate("partials/assets/images.html")->display($context);
            // line 4
            echo "  ";
        }
        // line 5
        echo "
  ";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "video")) {
            // line 7
            echo "    ";
            $this->env->loadTemplate("partials/assets/video.html")->display($context);
            // line 8
            echo "  ";
        }
        // line 9
        echo "
  ";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "swf")) {
            // line 11
            echo "    ";
            $this->env->loadTemplate("partials/assets/swf.html")->display($context);
            // line 12
            echo "  ";
        }
        // line 13
        echo "
  ";
        // line 14
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "html")) {
            // line 15
            echo "    ";
            $this->env->loadTemplate("partials/assets/html.html")->display($context);
            // line 16
            echo "  ";
        }
        // line 17
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "partials/assets/media.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
