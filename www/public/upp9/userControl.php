<?php
    // För att förenkla användandet av mb_ funktioner
    mb_internal_encoding("UTF-8");     

if(!isset($_POST['user'])){
    header("location: login.html");
    exit;
}
include('../../userArray.php');
print("test av code");

if(isset($_POST['user'])){ // Kontrollerar att data kommer 
    $user = $_POST['user'];

    if(!mb_check_encoding($user)){
        header('Location: index.html');
    }
    
    $user = htmlspecialchars($user);
    // Eller $data = strip_tags($data);

    $user = trim($user);
    $user = stripslashes($user);

    header('Content-Type: text/html; charset=utf-8');
    echo $user;
}


if(isset($_POST['pwd'])){ // Kontrollerar att data kommer 
    $pwd = $_POST['pwd'];

    if(!mb_check_encoding($pwd)){
        header('Location: index.html');
    }
    
    $pwd = htmlspecialchars($pwd);
    // Eller $data = strip_tags($data);

    $pwd = trim($pwd);
    $pwd = stripslashes($pwd);

    header('Content-Type: text/html; charset=utf-8');
    echo $pwd;
}


for($i=0; $i<count($userArray); $i++){
    if($user == $userArray[$i]["user"] && $pwd == $userArray[$i] ["pwd"]){
        header("location: userPage.php" . "?name=" . $userArray[$i]["name"]);
        exit;
    }
}
header("location: login.html");

?>
<!-- redirekta till personRead.php-->