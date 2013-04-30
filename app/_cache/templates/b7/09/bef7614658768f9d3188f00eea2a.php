<?php

/* partials/assets/images.html */
class __TwigTemplate_b709bef7614658768f9d3188f00eea2a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 2
            echo "  <div class=\"image\">
    <img src=\"";
            // line 3
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "url");
            echo "\" alt=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "title");
            echo "\" width=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "width");
            echo "\" height=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "height");
            echo "\">
    ";
            // line 4
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if ($this->getAttribute($_image_, "description")) {
                // line 5
                echo "      <em>";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo $this->getAttribute($_image_, "description");
                echo "</em>
    ";
            }
            // line 7
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/assets/images.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
