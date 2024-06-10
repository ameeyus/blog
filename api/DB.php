<?php

namespace App;

class DB
{
    public $link;

    public  function __construct(){
        $this->link = new \mysqli("localhost","root","","pract_blog");
    }

    private function escape_all(&...$params)
    {
        foreach ($params as &$param) {
            $param = $this->link->real_escape_string($param);
        }
    }

    public function check_new_login($login)
    {
        $this->escape_all($login);
        $user = $this->link->query("SELECT * FROM `users` WHERE `Login` = '$login'");
        return$user && $user->num_rows;
    }

    public function add_user($login, $password, $name )
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $this->escape_all($login,$name);
        $this->link->query("INSERT INTO `users` (`Login`, `Password`, `Name`) VALUES ('$login', '$password', '$name')");

    }

    public function get_user_by_login($login){
        $this->escape_all($login);
        $user = $this->link->query("SELECT * FROM `users` WHERE `Login` = '$login'");
        if ($user && $user->num_rows){
            return $user->fetch_assoc();
        }
        return [];
    }

}