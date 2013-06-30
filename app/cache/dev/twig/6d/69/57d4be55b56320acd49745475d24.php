<?php

/* SchoolMainBundle:Default:index.html.twig */
class __TwigTemplate_6d6957d4be55b56320acd49745475d24 extends Twig_Template
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
        echo "\t
\t
<div class=\"image\">
 \t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/school/images/berd.jpg"), "html", null, true);
        echo "\">
 \t\t</div>
 \t\t<div class=\"text\" style=\"max-width: 350px; top:80px;left: 40px;\">
 \t\t\t<h2>Добро пожаловать</h2>
 \t\t\t<article>
 \t\t\t\tПоздравляем Бердникову Валентину Григорьевну, учителя русского языка и литературы, с присвоением звания \"Заслуженный учитель Российской Федерации\". 
\"Это не просто учитель, это человек, который всего себя отдаёт для светлого и надёжного будущего своих учеников\". 
\t\t\t</article>
 \t\t</div>
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
        return "SchoolMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
