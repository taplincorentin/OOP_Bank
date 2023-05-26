<?php
    spl_autoload_register(function($class_name){
        require 'classes/'.$class_name.'.php';});
    
    $h1 = new Holder("Jacob","Huguette","1925-02-21","Amiens");
    $b1 = new BankAccount("current account",542.27,"$",$h1);
    $b2 = new BankAccount("savings account",4102.64,"$",$h1);
    //echo $h1;
    echo $b1."<br>".$b2."<br>";
    $b1->creditAccount(14.25);
    echo $b1."<br>";
    $b2->debitAccount(7444.22);
    echo $b2."<br>";
?>