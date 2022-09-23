<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WES-M2</title>
</head>
<body>
    
<header>
<h1>HELL O World</h1>
</header>
<main>
<p>arrayTest</p>
</main>

<footer>

</footer>


<?php


$page["head"] = "<h1>Välkommen</h1>";
$page["main"] = "<p>Detta är innehållet på min sida</p>";
$page["footer"] = "<hr><p>Min sidfoot</p>";


$properties = array("head" => $page["head"], "main" => $page["main"], "footer" => $page["footer"] );

foreach($properties as $key => $value){

    echo($key . " : " . $value . "<br>");
}


?>

</body>
</html>