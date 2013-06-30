<?php

namespace School\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SchoolMainBundle:Default:index.html.twig');
    }
}
