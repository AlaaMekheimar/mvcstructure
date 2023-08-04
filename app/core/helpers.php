<?php

namespace MVC\core;
class helpers{
     static function redirect($path){
        header("LOCATION: http://localhost/mvc-login/public/".$path);
     }
}