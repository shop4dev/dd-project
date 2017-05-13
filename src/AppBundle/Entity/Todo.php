<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Todo
 *
 * @ORM\Table(name="todo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TodoRepository")
 */
class Todo
{
    /**
     * @ORM\ManyToOne(targetEntity="ToList", inversedBy="todos")
     * @ORM\JoinColumn(name="tolist_id", referencedColumnName="id")
     */
    private $tolist;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(
     *     message = "To do name value must not be blank"
     * )
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "To do name must be at least {{ limit }} characters long",
     *      maxMessage = "To do name cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     * @Assert\NotBlank(
     *     message = "To do category value must not be blank"
     * )
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "category name must be at least {{ limit }} characters long",
     *      maxMessage = "category name cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(name="category", type="string", length=50)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="datetime")
     */
    private $dueDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;


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
     * @return Todo
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
     * Set category
     *
     * @param string $category
     *
     * @return Todo
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Todo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set priority
     *
     * @param string $priority
     *
     * @return Todo
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

     /**
     * Set progress
     *
     * @param string $progress
     *
     * @return Todo
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return string
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set status
     *
     * @param string status
     *
     * @return Todo
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get progress
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return Todo
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return Todo
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set tolist
     *
     * @param \AppBundle\Entity\ToList $tolist
     *
     * @return Todo
     */
    public function setToList(\AppBundle\Entity\ToList $tolist = null)
    {
        $this->tolist = $tolist;

        return $this;
    }

    /**
     * Get tolist
     *
     * @return \AppBundle\Entity\ToList
     */
    public function getToList()
    {
        return $this->tolist;
    }
}
