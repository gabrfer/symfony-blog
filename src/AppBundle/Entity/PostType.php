<?php

namespace AppBundle\Entity;

/**
 * PostType
 */
class PostType
{
    /**
     * @var int
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
     * @var \DateTime
     */
    private $createdDate = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $publishedDate;

    /**
     * @var int
     */
    private $active = '0';


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
     * Set name.
     *
     * @param string $name
     *
     * @return PostType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return PostType
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
     * Set createdDate.
     *
     * @param \DateTime $createdDate
     *
     * @return PostType
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
     * Set publishedDate.
     *
     * @param \DateTime|null $publishedDate
     *
     * @return PostType
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
     * Set active.
     *
     * @param int $active
     *
     * @return PostType
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
}
