<?php
 require_once"frog.php";
 require_once"ape.php";
require_once'animal.php';
 $sheep = new Animal("shaun");
 echo "name : " . $sheep->get_name();
echo "<br/> Legs : ". $sheep ->get_legs();
echo "<br> cold blooded : " .  $sheep->get_blood();

$kodok = new Frog("katak");
$kodok -> getfrogname();
$kodok -> getfroglegs();
$kodok -> getfrogblood();
$kodok->getfrogjump();

$ape = new Ape ("sun gokong");
$ape->getapename();
$ape->getapelegs();
$ape->getapeblood();
$ape->getapeyell();


?>