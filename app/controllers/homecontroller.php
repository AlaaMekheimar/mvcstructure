<?php
namespace MVC\controllers;

use MVC\core\controller;


class homecontroller extends controller{
    function index(){
        $this->view("home/index",['title'=>"home"]);
    }
}