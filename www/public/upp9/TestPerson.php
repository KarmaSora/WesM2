<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Testar Personklassen</title>
</head>
<body>
<?php
    include("Person.php");
    
    $person = new Person("Henrik", "Bygren", "ByHe","12345");
   // $person = new Person("Sheldon", "Cooper", "ShCo","1236"); //test
    // $person = new Person("Robin", "carlos", "RoCa","42134");  //test



    header('Content-Type: text/html; charset=utf-8');
    
    echo "<h1>" . $person->getFirstName() . " " . $person->getSurName() . "</h1>";
    echo "<p><strong>Användarnamn: </strong>" . $person->getUserName() . "</p>";
    echo "<p><strong>Lösenord: </strong>" . $person->getPassWord() . "</p>";
?>

</body>
</html>