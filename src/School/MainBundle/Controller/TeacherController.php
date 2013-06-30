<?php

namespace School\MainBundle\Controller;

use Acme\StoreBundle\Entity\Teachers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeacherController extends Controller
{
    public function indexAction($id)
    {
        $teachers = $this->getDoctrine()
        ->getRepository('SchoolMainBundle:Teachers')
        ->findAll();

        if ($id == "all")
            $array = $this->getDoctrine()
            ->getRepository('SchoolMainBundle:Teachers')
            ->findOneById(1);
        else
            $array = $this->getDoctrine()
            ->getRepository('SchoolMainBundle:Teachers')
            ->findOneByHref($id);

        if (!$teachers || !$array) {
            throw $this->createNotFoundException('Учитель не найден');
        }
        //print_r($array);
        return $this->render('SchoolMainBundle:Default:teacher.html.twig',
            array(
                'teachers' => $teachers, 
                'array' => $array
                )
         );
    }
}
