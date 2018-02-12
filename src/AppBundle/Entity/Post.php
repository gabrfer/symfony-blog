<?php

namespace AppBundle\Entity;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Post
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $sourceTitle;

    /**
     * @var int
     */
    private $important = '0';

    /**
     * @var \DateTime
     */
    private $createdDate = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     */
    private $active = '0';

    /**
     * @var \DateTime|null
     */
    private $publishedDate;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


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
     * Set title.
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Post
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set source.
     *
     * @param string $source
     *
     * @return Post
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set sourceTitle.
     *
     * @param string $sourceTitle
     *
     * @return Post
     */
    public function setSourceTitle($sourceTitle)
    {
        $this->sourceTitle = $sourceTitle;

        return $this;
    }

    /**
     * Get sourceTitle.
     *
     * @return string
     */
    public function getSourceTitle()
    {
        return $this->sourceTitle;
    }

    /**
     * Set important.
     *
     * @param int $important
     *
     * @return Post
     */
    public function setImportant($important)
    {
        $this->important = $important;

        return $this;
    }

    /**
     * Get important.
     *
     * @return int
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * Set createdDate.
     *
     * @param \DateTime $createdDate
     *
     * @return Post
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate.
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set active.
     *
     * @param int $active
     *
     * @return Post
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active.
     *
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set publishedDate.
     *
     * @param \DateTime|null $publishedDate
     *
     * @return Post
     */
    public function setPublishedDate($publishedDate = null)
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    /**
     * Get publishedDate.
     *
     * @return \DateTime|null
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return Post
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
}
