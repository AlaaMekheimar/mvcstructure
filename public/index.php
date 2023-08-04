<?php
use MVC\core\app;
define ("DS",DIRECTORY_SEPARATOR);
define ("ROOT",dirname(__DIR__));
define("APP",ROOT.DS."app");
define("VENDOR",ROOT.DS."vendor");
define("CORE",APP.DS."core");
define("MODELS",APP.DS."models");
define("VIEWS",APP.DS."views");
define("CONTROLLERS",APP.DS."controllers");

//config
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","userlogin");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://localhost/mvc-login/public/");

require_once (VENDOR.DS."autoload.php");
$obj = new app;
