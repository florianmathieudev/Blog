<?php

class Article
{
    private $title;
    private $picture;
    private $content;
    private $tag;
    private $date;

    public function __construct($title, $picture, $content, $tag, $date)
    {
        $this->title = $title;
        $this->picture = $picture;
        $this->content = $content;
        $this->tag = $tag;
        $this->date = $date;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPicture()
    {
        return $this->picture ;
    }
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getcontent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getTag()
    {
        return $this->tag;
    }
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
}