<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PainPoint
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PainPoint
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /** @ORM\OneToMany(targetEntity="AppBundle\Entity\PainPointUserAssignment", mappedBy="painPoint", cascade={"persist", "remove"}) */
    protected $painPointUserAssignments; 

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
     * Set type
     *
     * @param string $type
     * @return PainPoint
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->painPointUserAssignments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add painPointUserAssignments
     *
     * @param \AppBundle\Entity\PainPointUserAssignment $painPointUserAssignments
     * @return PainPoint
     */
    public function addPainPointUserAssignment(\AppBundle\Entity\PainPointUserAssignment $painPointUserAssignments)
    {
        $this->painPointUserAssignments[] = $painPointUserAssignments;

        return $this;
    }

    /**
     * Remove painPointUserAssignments
     *
     * @param \AppBundle\Entity\PainPointUserAssignment $painPointUserAssignments
     */
    public function removePainPointUserAssignment(\AppBundle\Entity\PainPointUserAssignment $painPointUserAssignments)
    {
        $this->painPointUserAssignments->removeElement($painPointUserAssignments);
    }

    /**
     * Get painPointUserAssignments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPainPointUserAssignments()
    {
        return $this->painPointUserAssignments;
    }
}
