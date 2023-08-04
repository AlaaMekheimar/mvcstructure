<?php

namespace MVC\models;
use Exception;
use MVC\core\model;
  use PDO;

 class usermodel extends model{
      public function login ($email,$password){
      
        $data=  model::connection()->row("SELECT * FROM `user` WHERE `email` =? and `password` = ?", [$email,$password]);
        return $data;
      }
      function register($name,$email,$password){
        $data=  model::connection()->insert('user', ['name' => $name, 'email' => $email,'password'=>$password]);
        return $data;
      }

 }