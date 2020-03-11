<?php

// Config File
require_once 'config.php';



// require_once('lib/Template.php');
// -------------------Autoloader------------------------
function __autoload($class_name){
    require_once 'lib/' . $class_name . '.php';
}


?>