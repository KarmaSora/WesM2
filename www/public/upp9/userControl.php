<?php
    // För att förenkla användandet av mb_ funktioner
    mb_internal_encoding("UTF-8");     
    $file = "person.dat";

    if(file_exists($file))
    $personArray = unserialize(file_get_contents($file));


if(!isset($_POST['user'])){
    header("location: login.html");
    exit;
}

for($i=0; $i<count($personArray); $i++){
    if($user == $personArray[$i]->getUserName() && $pwd == $personArrayy[$i]->getPassWord()){
        header("location: userPage.php" . "?name=" . $personArray[$i]->getUserName());
        exit;
    }
}
header("location: login.html");

?>
<!-- redirekta till personRead.php-->