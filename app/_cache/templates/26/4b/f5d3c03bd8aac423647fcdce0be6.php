<?php

/* partials/assets/html.html */
class __TwigTemplate_264bf5d3c03bd8aac423647fcdce0be6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "html"));
        foreach ($context['_seq'] as $context["_key"] => $context["html"]) {
            // line 2
            echo "  ";
            echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "content");
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['html'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/assets/html.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
