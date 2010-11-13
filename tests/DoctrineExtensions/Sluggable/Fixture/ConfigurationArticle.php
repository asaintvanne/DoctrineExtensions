<?php

namespace Sluggable\Fixture;

use DoctrineExtensions\Sluggable\Sluggable;

/**
 * @Entity
 */
class ConfigurationArticle implements Sluggable
{
    /** @Id @GeneratedValue @Column(type="integer") */
    private $id;

    /**
     * @Sluggable:Field
     * @Column(name="title", type="string", length=64)
     */
    private $title;

    /**
     * @Sluggable:Field
     * @Column(name="code", type="string", length=16)
     */
    private $code;
    
    /**
     * @Sluggable:Slug(updatable=false, unique=false)
     * @Column(name="slug", type="string", length=32)
     */
    private $slug;

    public function getId()
    {
        return $this->id;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }
    
    public function getSlug()
    {
        return $this->slug;
    }
}