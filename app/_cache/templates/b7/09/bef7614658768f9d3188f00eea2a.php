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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 2
            echo "  <div class=\"image\">
    <img src=\"";
            // line 3
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url");
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title");
            echo "\" width=\"";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "width");
            echo "\" height=\"";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "height");
            echo "\">
    ";
            // line 4
            if ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description")) {
                // line 5
                echo "      <em>";
                echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description");
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
