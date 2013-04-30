<?php

/* blog.html */
class __TwigTemplate_20daaf4bd5d165fd71607bad7b2cd5d1 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("partials/head.html")->display($context);
        // line 2
        echo "
<section class=\"main clearfix\">
\t
\t<div class=\"wrapper\">\t
\t\t
\t\t<article>
\t\t";
        // line 8
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 9
            echo "
\t\t";
            // line 10
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if ($this->getAttribute($_child_, "children")) {
                // line 11
                echo "
\t\t";
                // line 12
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_child_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 13
                    echo "\t\t
\t\t\t<article>

\t\t\t\t\t<h2><a href=\"";
                    // line 16
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "page_title");
                    echo "</a></h2>

\t\t\t\t\t\t<p class=\"meta\">by <a href=\"#\">";
                    // line 18
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "author");
                    echo "</a> on <a href=\"#\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "date");
                    echo "</a> with <a href=\"";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "#disqus_thread\">Comments</a></p>

\t\t\t\t";
                    // line 20
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "intro");
                    echo "

\t\t\t\t\t<p><a href=\"";
                    // line 22
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\">Read more..</a></p>

\t\t\t<hr>

\t\t\t</article>

\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 29
                echo "\t\t";
            }
            // line 30
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "\t\t</article>
\t</div> <!--/ wrapper -->
</section><!--/ main -->

";
        // line 35
        $this->env->loadTemplate("partials/footer.html")->display($context);
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
