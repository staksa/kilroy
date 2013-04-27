<?php

/* partials/next-page.html */
class __TwigTemplate_0f5ad1b0355ff050656f5093be702804 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_sibling"));
        foreach ($context['_seq'] as $context["_key"] => $context["sibling"]) {
            // line 2
            echo "  <p><a href=\"";
            echo $this->getAttribute((isset($context["sibling"]) ? $context["sibling"] : null), "url");
            echo "\">Next project</a>: &rarr; ";
            echo $this->getAttribute((isset($context["sibling"]) ? $context["sibling"] : null), "title");
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sibling'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/next-page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
