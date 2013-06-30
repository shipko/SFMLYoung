<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // school_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'school_main_homepage');
            }

            return array (  '_controller' => 'School\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'school_main_homepage',);
        }

        if (0 === strpos($pathinfo, '/page')) {
            // pages
            if (preg_match('#^/page/(?P<first>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages')), array (  '_controller' => 'School\\MainBundle\\Controller\\PagesController::indexAction',));
            }

            // pages_second
            if (preg_match('#^/page/(?P<first>[^/]++)/(?P<second>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages_second')), array (  '_controller' => 'School\\MainBundle\\Controller\\PagesController::secondAction',));
            }

        }

        if (0 === strpos($pathinfo, '/teacher')) {
            // teachers
            if (preg_match('#^/teacher(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teachers')), array (  '_controller' => 'School\\MainBundle\\Controller\\TeacherController::indexAction',  'id' => 'all',));
            }

            // teachers_default
            if (rtrim($pathinfo, '/') === '/teacher') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'teachers_default');
                }

                return array (  '_controller' => 'School\\MainBundle\\Controller\\TeacherController::indexAction',  'id' => 'all',  '_route' => 'teachers_default',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
