<?php
if(!isset($_GET['name'])){
    header("location: login.html");
    exit;
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET["name"]?></title>
</head>
<body>
    <h1> <?php echo $_GET["name"]?></h1>
</body>
</html>