<?php 
$property["name"] = "Karam";
$property["age"] = "18";
$property["phone"] = "0742069666";
$property["user"] = "Karma";
$property["pwd"] = "12345";

$userArray[] = $property;

$property["name"] = "raymond";
$property["age"] = "36";
$property["phone"] = "7492945324";
$property["user"] = "reddington";
$property["pwd"] = "blackList";

$userArray[] = $property;

$property["name"] = "Amanda";
$property["age"] = "21";
$property["phone"] = "07124565432";
$property["user"] = "A";
$property["pwd"] = "L";

$userArray[] = $property;

$newUser =  $_POST['Username'];
$newName = $_POST['name'];
$newPwd = $_POST['pwd'];

$property["name"] = $newName;
$property["user"] = $newUser;
$property["pwd"] = $newPwd;

$userArray[] = $property;





?>