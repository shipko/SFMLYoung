<?php
// src/School/MainBundle/Entity/Pages.php
namespace School\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="page")
 */
class Page
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    public $title;


    /**
     * @ORM\Column(type="string", length=45)
     */
    public $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $meta;

    /**
     * @ORM\Column(type="text")
     */
    public $descr;

}