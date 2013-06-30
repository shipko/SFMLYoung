<?php

/* SchoolMainBundle:Default:pages.html.twig */
class __TwigTemplate_992ead9e34239db509e065ae06b1d4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SchoolMainBundle:Default:layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<ul id=\"pCarousel\" class=\"jcarousel-skin-tango\">
\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listContent"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo " \t\t\t<li>
\t \t\t\t<div style=\"width: 980px; position: relative;\">
\t\t\t\t\t<div class=\"image\">
\t\t\t \t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/images/posters/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "photo"), "html", null, true);
            echo "\" >
\t\t\t \t\t</div>
\t\t\t \t\t<div class=\"text\" style=\"height: 350px; max-width: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "width"), "html", null, true);
            echo "px;top:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "top"), "html", null, true);
            echo "px; left: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "left"), "html", null, true);
            echo "px;\">
\t\t\t \t\t\t<h2>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "title"), "html", null, true);
            echo "</h2>
\t\t\t \t\t\t<article>
\t\t\t \t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "text"), "html", null, true);
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
        // line 20
        echo "\t \t</ul>
 \t</section>
 \t<section class=\"item-menu\">
 \t\t<div class=\"items\">
 \t\t\t<ul id=\"tCarousel\" class=\"jcarousel-skin-tango\">
\t \t\t\t<li>
\t \t\t\t\t<a href=\"teacher.php\">
\t\t \t\t\t\t<div class=\"item-image\">
\t\t \t\t\t\t\t<img src=\"./images/teach.jpg\" width=\"228\" height=\"130\">
\t\t \t\t\t\t</div>
\t\t \t\t\t\t<div class=\"item-text\">Педагогический состав</div>
\t \t\t\t\t</a>
\t \t\t\t</li>
\t \t\t\t<li>
\t \t\t\t\t<a href=\"fmh.html\">
\t\t \t\t\t\t<div class=\"item-image\">
\t\t \t\t\t\t\t<img src=\"http://sfml.tom.ru/tests/template/images/logo_new1.png\" width=\"130\" height=\"130\">
\t\t \t\t\t\t</div>
\t\t \t\t\t\t<div class=\"item-text\">Дополнительное образование</div>
\t \t\t\t\t</a>
\t \t\t\t</li>
\t \t\t\t<li>
\t \t\t\t\t<a href=\"fmh.html\">
\t\t \t\t\t\t<div class=\"item-image\">
\t\t \t\t\t\t\t<img src=\"http://sfml.tom.ru/images/pevez1.JPG\" width=\"243\" height=\"130\">
\t\t \t\t\t\t</div>
\t\t \t\t\t\t<div class=\"item-text\">Внеурочная деятельность</div>
\t \t\t\t\t</a>
\t \t\t\t</li>
\t \t\t\t<li>
\t \t\t\t\t<a href=\"fmh.html\">
\t\t \t\t\t\t<div class=\"item-image\">
\t\t \t\t\t\t\t<img src=\"http://cs5195.userapi.com/u11190388/149550909/m_d93b2339.jpg\" width=\"228\" height=\"130\">
\t\t \t\t\t\t</div>
\t\t \t\t\t\t<div class=\"item-text\">Инновации</div>
\t \t\t\t\t</a>
\t \t\t\t</li>
 \t\t\t</ul>
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
        return array (  74 => 20,  62 => 14,  57 => 12,  49 => 11,  43 => 9,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
