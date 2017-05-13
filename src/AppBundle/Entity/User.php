<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="This email address is already in use")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id;
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $email;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(type="string", length=40)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $role;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Your password must be at least {{ limit }} characters long",
     *      maxMessage = "Your password cannot be longer than {{ limit }} characters"
     * )
     */
    protected $plainPassword;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $password;

    /**
     * @ORM\OneToMany(targetEntity="Members", mappedBy="user")
     */
    private $memberss;

    /**
     * @ORM\OneToMany(targetEntity="ToList", mappedBy="user", cascade={"remove"})
     */
    private $tolists;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $avatar;

    public function __construct()
    {
        $this->tolists = new ArrayCollection();
        $this->memberss = new ArrayCollection();
    }

    public function eraseCredentials()
    {
        return null;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role = null)
    {
        $this->role = $role;
    }

    public function getRoles()
    {
        return [$this->getRole()];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    public function getSalt()
    {
        return null;
    }

    /**
     * Add tolist
     *
     * @param \AppBundle\Entity\ToList $tolist
     *
     * @return User
     */
    public function addToList(\AppBundle\Entity\ToList $tolist)
    {
        $this->tolist[] = $tolist;

        return $this;
    }

    /**
     * Remove tolist
     *
     * @param \AppBundle\Entity\ToList $tolist
     */
    public function removeToLIst(\AppBundle\Entity\ToList $tolist)
    {
        $this->tolists->removeElement($tolist);

    }
    /**
     * Get to_lists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getToLists()
    {
        return $this->tolists;
    }

    /**
     * @return mixed
     */
    public function getMemberss()
    {
        return $this->memberss;
    }

//    /**
//     * @param mixed $memberss
//     */
//    public function setMemberss($memberss)
//    {
//        $this->memberss = $memberss;
//    }
//
//    /** @see \Serializable::serialize() */
//    public function serialize()
//    {
//        return serialize(array(
//            $this->id,
//            $this->name,
//            $this->password,
//            // see section on salt below
//            // $this->salt,
//        ));
//    }
//
//    /** @see \Serializable::unserialize() */
//    public function unserialize($serialized)
//    {
//        list (
//            $this->id,
//            $this->name,
//            $this->password,
//            // see section on salt below
//            // $this->salt
//            ) = unserialize($serialized);
//    }
}
