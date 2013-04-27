<?php

/* partials/navigation/children.html */
class __TwigTemplate_88773a5e41b586e2b82b5980077a11c6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children")) {
            // line 2
            echo "  <ol class=\"children\">
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 4
                echo "      <li>
        <a href=\"";
                // line 5
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                echo "\">";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "page_name");
                echo "</a>
        ";
                // line 6
                $this->env->loadTemplate("partials/navigation/children.html")->display(array_merge($context, array("page" => (isset($context["child"]) ? $context["child"] : null))));
                // line 7
                echo "      </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 9
            echo "  </ol>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/navigation/children.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
