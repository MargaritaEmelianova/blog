<?php

class Articles
{
    public $id;
    public $title;
    public $image;
    public $text;
    public $publicatdate;
    public $views;

    function __construct()
    {
    }

    function getID()
    {
        return $this->id;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getImage()
    {
        return $this->image;
    }

    function getText()
    {
        return $this->text;
    }

    function getPubdate()
    {
        return $this->publicatdate;
    }

    function getViews()
    {
        return $this->views;
    }
}

?>