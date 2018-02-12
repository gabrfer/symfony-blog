<?php

namespace AppBundle\Entity;

/**
 * PostPostType
 */
class PostPostType
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
     * @var \AppBundle\Entity\Post
     */
    private $post;

    /**
     * @var \AppBundle\Entity\PostType
     */
    private $postType;


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
     * @return PostPostType
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
     * Set post.
     *
     * @param \AppBundle\Entity\Post|null $post
     *
     * @return PostPostType
     */
    public function setPost(\AppBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post.
     *
     * @return \AppBundle\Entity\Post|null
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set postType.
     *
     * @param \AppBundle\Entity\PostType|null $postType
     *
     * @return PostPostType
     */
    public function setPostType(\AppBundle\Entity\PostType $postType = null)
    {
        $this->postType = $postType;

        return $this;
    }

    /**
     * Get postType.
     *
     * @return \AppBundle\Entity\PostType|null
     */
    public function getPostType()
    {
        return $this->postType;
    }
}
