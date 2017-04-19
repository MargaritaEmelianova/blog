<?php
define('SALT_LENGTH', 9);
class users
{

    private $login;
    private $email;
    private $fullname;


    function __construct($n, $email, $fn)
    {
        $this->login = $n;
        $this->email = $email;
        $this->fullname = $fn;
    }

    public function setName($newName)
    {
        $this->fullname = $newName;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->fullname;
    }


    public static function login($db, $login_post)
    {

        $stmt = $db->prepare("SELECT fistname, surname, hash FROM users WHERE login = : login");
        $stmt->bindParam(':login', $login_post, PDO::PARAM_STR);
        $stmt->execute();
        if ($rad = $stmt->fetch()) {
            $hash = $rad["hash"];
            $firstname = $rad["firstname"];
            $surname = $rad["surname"];
        }
        if (password_verify($_POST['password'], $hash)) {
            $_SESSION['signed in'] = true;
            $_SESSION['user'] = new Users($login_post, $firstname . " " . $surname);
            return true;
        } else return false;


    }
}