<?php

namespace PuzzleDetective\PuzzleBundle\Entity;

/**
 * VariableGroup
 */
class VariableGroup
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $variables;

    /**
     * @var \PuzzleDetective\PuzzleBundle\Entity\Puzzle
     */
    private $puzzle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->variables = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return VariableGroup
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
     * @return VariableGroup
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
     * @return VariableGroup
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
     * @return VariableGroup
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
     * Add variable
     *
     * @param \PuzzleDetective\PuzzleBundle\Entity\Variable $variable
     *
     * @return VariableGroup
     */
    public function addVariable(\PuzzleDetective\PuzzleBundle\Entity\Variable $variable)
    {
        $variable->setVariableGroup($this);
        $this->variables[] = $variable;

        return $this;
    }

    /**
     * Remove variable
     *
     * @param \PuzzleDetective\PuzzleBundle\Entity\Variable $variable
     */
    public function removeVariable(\PuzzleDetective\PuzzleBundle\Entity\Variable $variable)
    {
        $this->variables->removeElement($variable);
    }

    /**
     * Get variables
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * Set puzzle
     *
     * @param \PuzzleDetective\PuzzleBundle\Entity\Puzzle $puzzle
     *
     * @return VariableGroup
     */
    public function setPuzzle(\PuzzleDetective\PuzzleBundle\Entity\Puzzle $puzzle)
    {
        $this->puzzle = $puzzle;

        return $this;
    }

    /**
     * Get puzzle
     *
     * @return \PuzzleDetective\PuzzleBundle\Entity\Puzzle
     */
    public function getPuzzle()
    {
        return $this->puzzle;
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
