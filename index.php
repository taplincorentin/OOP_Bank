<?php
    spl_autoload_register(function($class_name){
        require 'classes/'.$class_name.'.php';});
    
    $h1 = new Holder("Dupont","Pierre","2000-04-25","Paris");
    echo $h1;
?>