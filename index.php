<?php
    spl_autoload_register(function($class_name){
        require 'classes/'.$class_name.'.php';});
    
    $h1 = new Holder("JACOB","Huguette","1925-02-21","Amiens");
    $a1 = new BankAccount("current account",542.27,"$",$h1);
    $a2 = new BankAccount("savings account",4502.64,"$",$h1);
    //echo $h1;
    /*echo $a1."<br>".$a2."<br>";
    $a1->creditAccount(14.25);
    echo $a1."<br>";
    $a2->debitAccount(512.22);          //several tests for my methods
    echo $a2."<br>";
    $a2->transfer(600,$a1);
    echo $a1."<br>".$a2."<br>";
    echo $h1->age()."<br>";
    echo $h1->getAccountsInfos();*/
    echo $h1->getHolderInfo();
    echo $a1->getAccountInfo();
?>