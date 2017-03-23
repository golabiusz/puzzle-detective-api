<?php

namespace PuzzleDetective\PuzzleBundle\Entity;

/**
 * Variable
 */
class Variable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \PuzzleDetective\PuzzleBundle\Entity\VariableGroup
     */
    private $variableGroup;

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
     *
     * @return Variable
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
     * Set position
     *
     * @param integer $position
     *
     * @return Variable
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Variable
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Variable
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set variableGroup
     *
     * @param \PuzzleDetective\PuzzleBundle\Entity\VariableGroup $variableGroup
     *
     * @return Variable
     */
    public function setVariableGroup(\PuzzleDetective\PuzzleBundle\Entity\VariableGroup $variableGroup)
    {
        $this->variableGroup = $variableGroup;

        return $this;
    }

    /**
     * Get variableGroup
     *
     * @return \PuzzleDetective\PuzzleBundle\Entity\VariableGroup
     */
    public function getVariableGroup()
    {
        return $this->variableGroup;
    }

    /**
     * Returns text representation of entity.
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}
