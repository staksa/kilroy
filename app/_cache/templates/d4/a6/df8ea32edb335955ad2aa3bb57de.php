<?php

/* partials/assets/pdfs.html */
class __TwigTemplate_d4a6df8ea32edb335955ad2aa3bb57de extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pdf")) {
            // line 2
            echo "  <p>
    <br><b>PDFS</b><br>
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pdf"));
            foreach ($context['_seq'] as $context["_key"] => $context["pdf"]) {
                // line 5
                echo "      <p><a href=\"";
                echo $this->getAttribute((isset($context["pdf"]) ? $context["pdf"] : null), "url");
                echo "\">";
                echo $this->getAttribute((isset($context["pdf"]) ? $context["pdf"] : null), "name");
                echo "</a></p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdf'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    public function getTemplateName()
    {
        return "partials/assets/pdfs.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
