<?php

/* SchoolMainBundle:Default:pages.html.twig */
class __TwigTemplate_992ead9e34239db509e065ae06b1d4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SchoolMainBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'descr' => array($this, 'block_descr'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SchoolMainBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "meta"), "html", null, true);
    }

    // line 4
    public function block_descr($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "descr"), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<ul id=\"pCarousel\" class=\"jcarousel-skin-tango\">
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listContent"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo " \t\t\t<li>
\t \t\t\t<div style=\"width: 980px; position: relative;\">
\t\t\t\t\t<div class=\"image\">
\t\t\t \t\t\t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/images/posters/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "photo"), "html", null, true);
            echo "\" width=\"980\">
\t\t\t \t\t</div>
\t\t\t \t\t<div class=\"text\" style=\"height: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "height"), "html", null, true);
            echo "px; width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "width"), "html", null, true);
            echo "px;top:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "top"), "html", null, true);
            echo "px; left: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "left"), "html", null, true);
            echo "px;\">
\t\t\t \t\t\t<h2>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "title"), "html", null, true);
            echo "</h2>
\t\t\t \t\t\t<article>
\t\t\t \t\t\t\t";
            // line 17
            echo $this->getAttribute($this->getContext($context, "item"), "text");
            echo "
\t\t\t\t\t\t</article>
\t\t\t \t\t</div>
\t\t\t \t</div>
 \t\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "\t \t</ul>
 \t</section>
 \t<section class=\"item-menu\">
 \t\t<div class=\"items\">
 \t\t\t<ul id=\"tCarousel\" class=\"jcarousel-skin-tango\">
 \t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "bottom"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "\t\t \t\t\t<li ";
            if (($this->getAttribute($this->getContext($context, "page"), "realUrl") == $this->getAttribute($this->getContext($context, "item"), "url"))) {
                echo "class=\"active\"";
            }
            echo ">
\t \t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages_second", array("first" => $this->getAttribute($this->getContext($context, "firstPage"), "url"), "second" => $this->getAttribute($this->getContext($context, "item"), "url"))), "html", null, true);
            echo "\">
\t\t \t\t\t\t<div class=\"item-image\">
\t\t \t\t\t\t\t<img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/images/bottom/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "photo"), "html", null, true);
            echo "\" width=\"228\" height=\"130\">
\t\t \t\t\t\t</div>
\t\t \t\t\t\t<div class=\"item-text\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "title"), "html", null, true);
            echo "</div>
\t \t\t\t\t</a>
\t \t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo " \t\t\t</ul>
 \t\t</div>
";
    }

    public function getTemplateName()
    {
        return "SchoolMainBundle:Default:pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 38,  126 => 34,  120 => 32,  115 => 30,  108 => 29,  104 => 28,  97 => 23,  85 => 17,  80 => 15,  70 => 14,  64 => 12,  59 => 9,  55 => 8,  52 => 7,  49 => 6,  43 => 4,  37 => 3,  31 => 2,);
    }
}
