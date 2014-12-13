<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PainPointUserAssignment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PainPointUserAssignment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

   /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="painPointUserAssignments") 
    *  @ORM\JoinColumn(name="user", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $user;  

    /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\PainPoint", inversedBy="tagUserAssignments")
     *  @ORM\JoinColumn(name="painPoint", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $painPoint;        

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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return PainPointUserAssignment
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set painPoint
     *
     * @param \AppBundle\Entity\PainPoint $painPoint
     * @return PainPointUserAssignment
     */
    public function setPainPoint(\AppBundle\Entity\PainPoint $painPoint = null)
    {
        $this->painPoint = $painPoint;

        return $this;
    }

    /**
     * Get painPoint
     *
     * @return \AppBundle\Entity\PainPoint 
     */
    public function getPainPoint()
    {
        return $this->painPoint;
    }
}
