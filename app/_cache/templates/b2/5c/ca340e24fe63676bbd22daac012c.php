<?php

/* partials/link_next.html */
class __TwigTemplate_b25cca340e24fe63676bbd22daac012c extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "next_sibling"));
        foreach ($context['_seq'] as $context["_key"] => $context["sibling"]) {
            // line 2
            echo "\t<span class=\"link_next\"><a href=\"";
            if (isset($context["sibling"])) { $_sibling_ = $context["sibling"]; } else { $_sibling_ = null; }
            echo $this->getAttribute($_sibling_, "url");
            echo "\">";
            if (isset($context["sibling"])) { $_sibling_ = $context["sibling"]; } else { $_sibling_ = null; }
            echo $this->getAttribute($_sibling_, "page_title");
            echo "</a> &rarr;</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sibling'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/link_next.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
