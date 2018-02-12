<?php

namespace AppBundle\Entity;

/**
 * CategoryProject
 */
class CategoryProject
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $assignData = 'CURRENT_TIMESTAMP';

    /**
     * @var \AppBundle\Entity\Category
     */
    private $category;

    /**
     * @var \AppBundle\Entity\Project
     */
    private $project;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set assignData.
     *
     * @param \DateTime $assignData
     *
     * @return CategoryProject
     */
    public function setAssignData($assignData)
    {
        $this->assignData = $assignData;

        return $this;
    }

    /**
     * Get assignData.
     *
     * @return \DateTime
     */
    public function getAssignData()
    {
        return $this->assignData;
    }

    /**
     * Set category.
     *
     * @param \AppBundle\Entity\Category|null $category
     *
     * @return CategoryProject
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \AppBundle\Entity\Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set project.
     *
     * @param \AppBundle\Entity\Project|null $project
     *
     * @return CategoryProject
     */
    public function setProject(\AppBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project.
     *
     * @return \AppBundle\Entity\Project|null
     */
    public function getProject()
    {
        return $this->project;
    }
}
