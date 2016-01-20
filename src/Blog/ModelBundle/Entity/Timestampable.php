<?php
namespace Blog\ModelBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Abstract Class Timestampable to generate created and updated behaviour
 *
 * @ORM\MappedSuperClass
 *
 */
abstract class Timestampable
{
    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
// constructor has been removed because value is taking from Gedmo/Timestampable
//    public function __construct()
//    {
//        $this->createdAt = new \DateTime();
//    }

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Timestampable
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updateddAt
     *
     * @param \DateTime $createdAt
     * @return Timestampable
     */
    public function setUpdatedAt($createdAt)
    {
        $this->updatedAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}