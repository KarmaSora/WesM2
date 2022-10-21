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

$newFirstName = $_POST['firstname'];
$newAfterName = $_POST['afterName'];
$newUser =  $_POST['Username'];
$newPwd = $_POST['pwd'];

$property["firsrtName"] = $newFristwName;
$property["afterName"] = $newAfterName;
$property["Username"] = $newUser;
$property["pwd"] = $newPwd;


include(' Location: person.dat');


$userArray[]['firsrtName'] = $file['newFirstName'];
$userArray[]['name'] = $file['newFirstName'];





?>