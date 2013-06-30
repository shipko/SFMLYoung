<?php

/* SchoolMainBundle:Default:teacher.html.twig */
class __TwigTemplate_33c56067c9671de1820808992f7b8056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SchoolMainBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Учитель | ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "array"), "name"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "array"), "surname"), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  
<div class=\"image\">
      <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/images/teachers/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "array"), "bigPhoto"), "html", null, true);
        echo "\" width=\"980\" >
    </div>
    <div class=\"text\" style=\"height: 350px; max-width: 500px;top:50px;right: 50px;\">
      <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "array"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "array"), "surname"), "html", null, true);
        echo "</h2>
      <h3>";
        // line 10
        if (($this->getAttribute($this->getContext($context, "array"), "type") == 1)) {
            echo "Учитель начальных классов";
        } else {
            echo "Учитель старших классов ";
        }
        echo "</h3>
      <article>
          ";
        // line 12
        echo $this->getAttribute($this->getContext($context, "array"), "about");
        echo "
      </article>
    </div>
  </section>
  <section class=\"item-menu\">
    <div class=\"items\">
      <ul id=\"tCarousel\" class=\"jcarousel-skin-tango\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "teachers"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "        <li>
          <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teachers", array("id" => $this->getAttribute($this->getContext($context, "item"), "href"))), "html", null, true);
            echo "\">
            <div class=\"item-image\">
              <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/images/teachers/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "smallPhoto"), "html", null, true);
            echo "\" height=\"130\">
            </div>
            <div class=\"item-text\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "surname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name"), "html", null, true);
            echo "</div>
          </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "      </ul>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "SchoolMainBundle:Default:teacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  95 => 25,  89 => 23,  84 => 21,  81 => 20,  77 => 19,  67 => 12,  58 => 10,  52 => 9,  45 => 6,  41 => 4,  38 => 3,  29 => 2,);
    }
}
