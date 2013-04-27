<?php

/* partials/list_articles.html */
class __TwigTemplate_016b58704985199e628c9ba95d228024 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 2
            echo "  ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if ($this->getAttribute($_child_, "children")) {
                // line 3
                echo "
    ";
                // line 4
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_child_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 5
                    echo "    
\t\t<article>
\t\t
\t\t\t<h2><a href=\"";
                    // line 8
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "page_title");
                    echo "</a></h2>
\t\t\t
\t\t\t<p class=\"meta\">by <a href=\"#\">";
                    // line 10
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "author");
                    echo "</a> on <a href=\"#\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "date");
                    echo "</a> with <a href=\"";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "#disqus_thread\">4 comments</a></p>
\t\t\t
\t\t\t";
                    // line 12
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "intro");
                    echo "
\t\t\t
\t\t\t<p><a href=\"";
                    // line 14
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\">Read more..</a></p>
\t\t\t
\t\t\t<hr>
\t\t
\t\t</article>
\t\t\t\t\t   \t
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 21
                echo "
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/list_articles.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
