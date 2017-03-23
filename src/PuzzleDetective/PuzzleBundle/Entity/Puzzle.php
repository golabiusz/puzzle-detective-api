<?php

namespace PuzzleDetective\PuzzleBundle\Entity;

/**
 * Puzzle
 */
class Puzzle
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
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $information;

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
    private $variableGroups;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->variableGroups = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Puzzle
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
     * Set description
     *
     * @param string $description
     *
     * @return Puzzle
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
     * Set information
     *
     * @param string $information
     *
     * @return Puzzle
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Puzzle
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
     * @return Puzzle
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
     * Add variableGroup
     *
     * @param \PuzzleDetective\PuzzleBundle\Entity\VariableGroup $variableGroup
     *
     * @return Puzzle
     */
    public function addVariableGroup(\PuzzleDetective\PuzzleBundle\Entity\VariableGroup $variableGroup)
    {
        $variableGroup->setPuzzle($this);
        $this->variableGroups[] = $variableGroup;

        return $this;
    }

    /**
     * Remove variableGroup
     *
     * @param \PuzzleDetective\PuzzleBundle\Entity\VariableGroup $variableGroup
     */
    public function removeVariableGroup(\PuzzleDetective\PuzzleBundle\Entity\VariableGroup $variableGroup)
    {
        $this->variableGroups->removeElement($variableGroup);
    }

    /**
     * Get variableGroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVariableGroups()
    {
        return $this->variableGroups;
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
