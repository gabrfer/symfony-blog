<?php

namespace AppBundle\Entity;

/**
 * PostComment
 */
class PostComment
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
     * @var \AppBundle\Entity\Comment
     */
    private $comment;


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
     * @return PostComment
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
     * @return PostComment
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
     * Set comment.
     *
     * @param \AppBundle\Entity\Comment|null $comment
     *
     * @return PostComment
     */
    public function setComment(\AppBundle\Entity\Comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return \AppBundle\Entity\Comment|null
     */
    public function getComment()
    {
        return $this->comment;
    }
}
