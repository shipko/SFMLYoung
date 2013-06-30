<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'school_main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'School\\MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'pages' => array (  0 =>   array (    0 => 'first',  ),  1 =>   array (    '_controller' => 'School\\MainBundle\\Controller\\PagesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'first',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),  ),  4 =>   array (  ),),
        'pages_second' => array (  0 =>   array (    0 => 'first',    1 => 'second',  ),  1 =>   array (    '_controller' => 'School\\MainBundle\\Controller\\PagesController::secondAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'second',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'first',    ),    2 =>     array (      0 => 'text',      1 => '/page',    ),  ),  4 =>   array (  ),),
        'teachers' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'School\\MainBundle\\Controller\\TeacherController::indexAction',    'id' => 'all',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/teacher',    ),  ),  4 =>   array (  ),),
        'teachers_default' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'School\\MainBundle\\Controller\\TeacherController::indexAction',    'id' => 'all',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/teacher/',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
