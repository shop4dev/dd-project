<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="teams")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $admin;

    /**
     * @ORM\OneToMany(targetEntity="Members", mappedBy="team", cascade={"remove"})
     */
    private $memberss;

    /**
     * @ORM\OneToMany(targetEntity="ToList", mappedBy="team", cascade={"remove"})
     */
    private $toLists;

    public function __construct()
    {
        $this->memberss = new ArrayCollection();
        $this->toLists = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Team
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
     * @return mixed
     */
    public function getMembers()
    {
        return $this->memberss;
    }

    /**
     * @param mixed $members
     */
    public function setMembers($memberss)
    {
        $this->memberss = $memberss;
    }

    /**
     * @return mixed
     */
    public function getToLists()
    {
        return $this->toLists;
    }

    /**
     * @param mixed $toLists
     */
    public function setToLists($toLists)
    {
        $this->toLists = $toLists;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }
}

