<?php


class Comment
{
    private $id;
    private $author;
    private $text;
    private $pubdate;
    private $articles_id;

    function __construct()
    {
    }

    function getID()
    {
        return $this->id;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getText()
    {
        return $this->text;
    }

    function getPubdate()
    {
        return $this->pubdate;
    }

    function getArticlesId()
    {
        return $this->articles_id;

    }

}