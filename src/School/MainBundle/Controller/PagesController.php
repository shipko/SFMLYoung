<?php

namespace School\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function indexAction($first)
    {
    	$page = $this->getDoctrine()
        ->getRepository('SchoolMainBundle:Page')
        ->findOneByUrl($first);
        
        if (!$page) {
        	throw $this->createNotFoundException('Страница не найдена');
        }
        $page->realUrl = '0';
        $element = $this->getDoctrine()
        ->getRepository('SchoolMainBundle:PageElement')
        ->findByPage($page->id);

        if (!$element) {
            throw $this->createNotFoundException('Элементы не найдены');
        }

        $bottom = $this->getDoctrine()
        ->getRepository('SchoolMainBundle:PageBottom')
        ->findByPage($page->id);

        return $this->render('SchoolMainBundle:Default:pages.html.twig', 
            array(
                'firstPage' => $page,
                'listContent' => $element,
                'page' => $page,
                'bottom' => $bottom
                )
            );
    }

    public function secondAction($first,$second)
    {
        $page = $this->getDoctrine()
        ->getRepository('SchoolMainBundle:Page')
        ->findOneByUrl($first.'/'.$second);

        if (!$page) {
            throw $this->createNotFoundException('Страница не найдена');
        }

        $page->realUrl = $second;

        $firstPage = $this->getDoctrine()
        ->getRepository('SchoolMainBundle:Page')
        ->findOneByUrl($first);

        $element = $this->getDoctrine()
        ->getRepository('SchoolMainBundle:PageElement')
        ->findByPage($page->id);

        if (!$element) {
            throw $this->createNotFoundException('Элементы не найдены');
        }

        $bottom = $this->getDoctrine()
        ->getRepository('SchoolMainBundle:PageBottom')
        ->findByPage($firstPage->id);

        return $this->render('SchoolMainBundle:Default:pages.html.twig', 
            array(
                'firstPage' => $firstPage,
                'listContent' => $element,
                'page' => $page,
                'bottom' => $bottom
                )
            );
    }
}
