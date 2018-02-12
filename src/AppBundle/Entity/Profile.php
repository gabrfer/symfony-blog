<?php

namespace AppBundle\Entity;

/**
 * Profile
 */
class Profile
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bio;

    /**
     * @var string
     */
    private $github;

    /**
     * @var string
     */
    private $bitbucket;

    /**
     * @var string
     */
    private $linkedin;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $instagram;

    /**
     * @var string
     */
    private $youtube;

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
     * Set bio.
     *
     * @param string $bio
     *
     * @return Profile
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio.
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set github.
     *
     * @param string $github
     *
     * @return Profile
     */
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }

    /**
     * Get github.
     *
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set bitbucket.
     *
     * @param string $bitbucket
     *
     * @return Profile
     */
    public function setBitbucket($bitbucket)
    {
        $this->bitbucket = $bitbucket;

        return $this;
    }

    /**
     * Get bitbucket.
     *
     * @return string
     */
    public function getBitbucket()
    {
        return $this->bitbucket;
    }

    /**
     * Set linkedin.
     *
     * @param string $linkedin
     *
     * @return Profile
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin.
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set twitter.
     *
     * @param string $twitter
     *
     * @return Profile
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter.
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set facebook.
     *
     * @param string $facebook
     *
     * @return Profile
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook.
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set instagram.
     *
     * @param string $instagram
     *
     * @return Profile
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram.
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set youtube.
     *
     * @param string $youtube
     *
     * @return Profile
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube.
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return Profile
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
