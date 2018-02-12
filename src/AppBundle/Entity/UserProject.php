<?php

namespace AppBundle\Entity;

/**
 * UserProject
 */
class UserProject
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
     * @var \AppBundle\Entity\User
     */
    private $user;

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
     * @return UserProject
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
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return UserProject
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \AppBundle\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set project.
     *
     * @param \AppBundle\Entity\Project|null $project
     *
     * @return UserProject
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
