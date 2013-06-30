<?php

/* SchoolMainBundle:Default:layout.html.twig */
class __TwigTemplate_b907778c5286b088a9cbdb21bd22287e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
 <head>
  <meta charset=\"utf-8\">
  <title>Главная</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/css/main.css"), "html", null, true);
        echo "\">
  <!--[if lt IE 9]> 
   <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script> 
  <![endif]-->
  <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\">

\t\$(document).ready(function() {
\t    \$('#tCarousel').jcarousel();
      \$('#pCarousel').jcarousel();
\t});

\t</script>
 </head>
 <body>
 \t<header>
 \t\t\t<div class=\"images\">
 \t\t\t\t<a href=\"index.php\">
          <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/images/logo.png"), "html", null, true);
        echo "\"  height=\"40\">
 \t\t\t  </a>
      </div>
 \t\t\t<nav class=\"menu\">
 \t\t\t\t<ul>
\t \t\t\t\t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages", array("first" => "about")), "html", null, true);
        echo "\">О лицее</a></li>
          <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages", array("first" => "news")), "html", null, true);
        echo "\">Новости</a></li>
          <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages", array("first" => "parents")), "html", null, true);
        echo "\">Родителям</a></li>
\t \t\t\t\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages", array("first" => "pupils")), "html", null, true);
        echo "\">Ученику</a></li>
 \t\t\t\t</ul>
 \t\t\t</nav>
 \t</header> \t
 \t<section class=\"content\">
 \t";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo " \t\t
 \t</section>
 \t<footer>
 \t\t© sfml.tom.ru 2012 | <a href=\"http://vk.com/mukovkin\">Муковкин Дмитрий</a>
 \t</footer>
 </body>
</html>";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "\t
\t";
    }

    public function getTemplateName()
    {
        return "SchoolMainBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  91 => 37,  81 => 39,  79 => 37,  71 => 32,  67 => 31,  59 => 29,  27 => 6,  20 => 1,  63 => 30,  51 => 24,  46 => 12,  38 => 6,  34 => 10,  31 => 4,  28 => 3,);
    }
}
