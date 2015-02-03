<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\Group as AbstractedGroup;

/**
 * User
 *
 * @ORM\Table(name="user_group")
 * @ORM\Entity()
 */
class Group extends AbstractedGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Represents a string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName() ?: '';
    }
}