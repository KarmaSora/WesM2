<!DOCTYPE html>
<html lang="se">
<head>
    <meta charset="UTF-8">
    <title>Filhantering Skriv</title>
</head>
<body>

<?php
    include("Person.php");
    $personArray = array();
/*
    $personArray[] = new Person("Kalle", "Nilsson", "NiKa","1234523");
    $personArray[] = new Person("Henrik", "Bygren", "ByHe","2222223");
    $personArray[] = new Person("Eva", "Jansson", "JaEv","33333343");
    $personArray[] = new Person("Karam", "Matar", "KaMa","123321");
    $personArray[] = new Person("Ra", "Ra", "Ra","Ra");
*/
    $newFirstName = $_POST['firstName'];
    $newAfterName = $_POST['afterName'];
    $newUser =  $_POST['Username'];
    $newPwd = $_POST['pwd'];

   
 

    $file = "person.dat";
    if(file_exists($file)){
        $personArray = unserialize(file_get_contents($file));
        
        $personArray[] = new Person($newFirstName, $newAfterName, $newUser, $newPwd);
        
     }
     file_put_contents($file, serialize($personArray));



    // Färdigt! Resten av koden gör enbart en utskrift av innehållet.
    header('Content-Type: text/html; charset=utf-8');   

    for($i = 0; $i < count($personArray); $i++){
      echo "<h1>" . $personArray[$i]->getFirstName() . " " . $personArray[$i]->getSurName() . "</h1>";
      echo "<p><strong>Användarnamn: </strong>" . $personArray[$i]->getUserName() . "</p>";
      echo "<p><strong>Lösenord: </strong>" . $personArray[$i]->getPassWord() . "</p>";
      echo "<hr>";

   }
   

?>

<a href="login.html">Go to login page!</a>
</body>
</html>