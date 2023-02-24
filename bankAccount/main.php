<?php
require("Client.php");
require("Account.php");

$client1 = new Client("Gabriela", "Maureira");
$client2 = new Client("Ivan", "Maureira");

$client1 -> createAccount();
$client1 -> createAccount();


$client2 -> createAccount();
$client2 -> createAccount();

$clientList = array($client1, $client2);


// Double search

for($i=0; $i<count($clientList); $i++){
    print_r( $clientList[$i]);
        for($x=0; $x<count($clientList[$i]->getAccount()); $x++){
           print_r( $clientList[$i]->getAccount()[$x]);
        }
    
} 
