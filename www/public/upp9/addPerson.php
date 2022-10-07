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

  if(file_exists($file)){ // 1.
    $persons = unserialize(file_get_contents($file)); // 2.
  }else{
    echo "Filen finns inte!!!";
    exit;
  }

  $newPerson = new Person("Ann", "Jansson", "JaAn","ewrwer"); // 3.
  $persons[] = $newPerson; // 4.

  file_put_contents($file, serialize($persons));  // 5.
?>
</body>
</html>