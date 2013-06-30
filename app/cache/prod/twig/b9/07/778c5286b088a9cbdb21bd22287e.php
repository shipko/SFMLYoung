<?php

/* SchoolMainBundle:Default:layout.html.twig */
class __TwigTemplate_b907778c5286b088a9cbdb21bd22287e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
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
\t    function mycarousel_initCallback(carousel)
      {
          // Disable autoscrolling if the user clicks the prev or next button.
          carousel.buttonNext.bind('click', function() {
              carousel.startAuto(0);
          });

          carousel.buttonPrev.bind('click', function() {
              carousel.startAuto(0);
          });

          // Pause autoscrolling if the user moves with the cursor over the clip.
          carousel.clip.hover(function() {
              carousel.stopAuto();
          }, function() {
              carousel.startAuto();
          });
      };
      \$('#tCarousel').jcarousel();
      
      \$('#pCarousel').jcarousel({ scroll: 1, auto: 15, wrap: 'last', initCallback: mycarousel_initCallback }); 
\t});

\t</script>
 </head>
 <body>
 \t<header>
 \t\t\t<div class=\"images\">
 \t\t\t\t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_main_homepage"), "html", null, true);
        echo "\">
          <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/images/logo.png"), "html", null, true);
        echo "\"  height=\"40\">
 \t\t\t  </a>
      </div>
 \t\t\t<nav class=\"menu\">
 \t\t\t\t<ul>
\t \t\t\t\t<li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages", array("first" => "about")), "html", null, true);
        echo "\">О лицее</a></li>
          <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teachers_default"), "html", null, true);
        echo "\">Педагоги</a></li>
          <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages", array("first" => "parents")), "html", null, true);
        echo "\">Родителям</a></li>
\t \t\t\t\t<li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages", array("first" => "pupils")), "html", null, true);
        echo "\">Ученику</a></li>
 \t\t\t\t</ul>
 \t\t\t</nav>
 \t</header> \t
 \t<section class=\"content\">
 \t";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo " \t\t
 \t</section>
 \t<footer>
 \t\t© sfml.tom.ru 2012 | <a href=\"http://vk.com/mukovkin\">Муковкин Дмитрий</a>
 \t</footer>
 </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Главная";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
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
        return array (  126 => 57,  123 => 56,  117 => 5,  107 => 58,  105 => 56,  97 => 51,  93 => 50,  89 => 49,  85 => 48,  77 => 43,  73 => 42,  38 => 10,  31 => 6,  27 => 5,  21 => 1,);
    }
}
