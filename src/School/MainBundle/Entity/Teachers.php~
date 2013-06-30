<?php
// src/School/MainBundle/Entity/Teachers.php
namespace School\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="teachers")
 */
class Teachers
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
    protected $name;

	/**
     * @ORM\Column(type="string", length=30)
     */
    protected $surname;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $href;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $big_photo;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $small_photo;

    /**
     * @ORM\Column(type="integer")
     */
    protected $type;

    /**
     * @ORM\Column(type="text")
     */
    protected $about;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Teachers
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Teachers
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set big_photo
     *
     * @param string $bigPhoto
     * @return Teachers
     */
    public function setBigPhoto($bigPhoto)
    {
        $this->big_photo = $bigPhoto;
    
        return $this;
    }

    /**
     * Get big_photo
     *
     * @return string 
     */
    public function getBigPhoto()
    {
        return $this->big_photo;
    }

    /**
     * Set small_photo
     *
     * @param string $smallPhoto
     * @return Teachers
     */
    public function setSmallPhoto($smallPhoto)
    {
        $this->small_photo = $smallPhoto;
    
        return $this;
    }

    /**
     * Get small_photo
     *
     * @return string 
     */
    public function getSmallPhoto()
    {
        return $this->small_photo;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Teachers
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return Teachers
     */
    public function setAbout($about)
    {
        $this->about = $about;
    
        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set href
     *
     * @param string $href
     * @return Teachers
     */
    public function setHref($href)
    {
        $this->href = $href;
    
        return $this;
    }

    /**
     * Get href
     *
     * @return string 
     */
    public function getHref()
    {
        return $this->href;
    }
}