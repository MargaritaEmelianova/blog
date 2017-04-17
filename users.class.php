<?php

class users
{
    private $id;
    private $login;
    private $email;
    private $hash;
    private $firstname;
    private $surname;

    function __construct()
    {
    }

    function getID()
    {
        return $this->id;
    }

    function getLogin()
    {
        return $this->login;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getHash()
    {
        return $this->hash;
    }

    function getFirstname()
    {
        return $this->firstname;
    }

    function getSurname()
    {
        return $this->surname;
    }

}