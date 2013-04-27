<?php

/* partials/navigation/category-lists.html */
class __TwigTemplate_682b22bd7432fb38090da1062d5222ca extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 2
            echo "  ";
            if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children")) {
                // line 3
                echo "    <ul class=\"projects\">
    ";
                // line 4
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 5
                    echo "      <li class=\"col seven ";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "id");
                    echo "\">
        <p class=\"date col one\">";
                    // line 6
                    echo twig_date_format_filter($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "date"), "Y, M-");
                    echo "</p>
        <h2 class=\"col five\">
          ";
                    // line 8
                    if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb")) {
                        // line 9
                        echo "            <img src=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb"), "url");
                        echo "\" width=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb"), "width");
                        echo "\" height=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb"), "height");
                        echo "\" class=\"project-thumb\" alt=\"\">
          ";
                    }
                    // line 11
                    echo "          <a href=\"";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                    echo "\">";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
                    echo "</a>
        </h2>
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 15
                echo "    </ul>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/navigation/category-lists.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
