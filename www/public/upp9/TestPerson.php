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

    header('Content-Type: text/html; charset=utf-8');
    
    echo "<h1>" . $person->getFirstName() . " " . $person->getSurName() . "</h1>";
    echo "<p><strong>Användarnamn: </strong>" . $person->getUserName() . "</p>";
    echo "<p><strong>Lösenord: </strong>" . $person->getPassWord() . "</p>";
?>

</body>
</html>