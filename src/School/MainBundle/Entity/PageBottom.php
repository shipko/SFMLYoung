<?php
// src/School/MainBundle/Entity/Pages.php
namespace School\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="page_bottom")
 */
class PageBottom
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $page;

    /**
     * @ORM\Column(type="string", length=25)
     */
    public $url;

	/**
     * @ORM\Column(type="string", length=30)
     */
    public $title;


    /**
     * @ORM\Column(type="string", length=45)
     */
    public $photo;

}