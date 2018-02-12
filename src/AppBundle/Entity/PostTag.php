<?php

namespace AppBundle\Entity;

/**
 * PostTag
 */
class PostTag
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
     * @var \AppBundle\Entity\Tag
     */
    private $tag;


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
     * @return PostTag
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
     * @return PostTag
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
     * Set tag.
     *
     * @param \AppBundle\Entity\Tag|null $tag
     *
     * @return PostTag
     */
    public function setTag(\AppBundle\Entity\Tag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag.
     *
     * @return \AppBundle\Entity\Tag|null
     */
    public function getTag()
    {
        return $this->tag;
    }
}
