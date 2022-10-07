<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Filhantering Läs</title>
</head>
<body>
<?php
   include("Person.php");

   $file = "person.dat";

   if(file_exists($file)){
      $personArray = unserialize(file_get_contents($file));
   }else{
      // Filen finns ej!! Kör om programmet “personWrite.php”
   }

   header('Content-Type: text/html; charset=utf-8');
   
   foreach($personArray as $person) {
      echo "<h1>" . $person->getFirstName() . " " . $person->getSurName() . "</h1>";
      echo "<p><strong>Användarnamn: </strong>" . $person->getUserName() . "</p>";
      echo "<p><strong>Lösenord: </strong>" . $person->getPassWord() . "</p>";
   }
?>
</body>
</html>