<?php
   // För att förenkla användandet av mb_ funktioner
   mb_internal_encoding("UTF-8");     



 
    if(isset($_POST['forName'])){ // Kontrollerar att data kommer 
        $forname = $_POST['forName'];

        if(!mb_check_encoding($forname)){
            header('Location: personID.php');
        }
        
        $forname = htmlspecialchars($forname);
        // Eller $data = strip_tags($data);

        $forname = trim($forname);
        $forname = stripslashes($forname);

        header('Content-Type: text/html; charset=utf-8');
    }
    if(isset($_POST['afterName'])){ // Kontrollerar att data kommer 
        $aftername = $_POST['afterName'];

        if(!mb_check_encoding($aftername)){
            header('Location: personID.php');
        }
        
        $aftername = htmlspecialchars($aftername);
        // Eller $data = strip_tags($data);

        $aftername = trim($aftername);
        $aftername = stripslashes($aftername);

        header('Content-Type: text/html; charset=utf-8');
    }
    if(isset($_POST['pass'])){ // Kontrollerar att data kommer 
        $pass = $_POST['pass'];

        if(!mb_check_encoding($pass)){
            header('Location: personID.php');
        }
        
        $pass = htmlspecialchars($pass);
        // Eller $data = strip_tags($data);

        $pass = trim($pass);
        $pass = stripslashes($pass);

        header('Content-Type: text/html; charset=utf-8');
    }
    
   
    if(isset($_POST['userName'])){ // Kontrollerar att data kommer 
        $userName = $_POST['userName'];

        if(!mb_check_encoding($userName)){
            header('Location: personID.php');
        }
        
        $userName = htmlspecialchars($userName);
        // Eller $data = strip_tags($data);

        $userName = trim($userName);
        $userName = stripslashes($userName);

        header('Content-Type: text/html; charset=utf-8');
    }
  // $userName = $_POST['userName'];  // kan testa med och utan

echo("<h1> Wellcome $forname $aftername</h1>");
echo("<h1> check personal information</h1>");
echo("<p> name: $forname $aftername username: $userName password: $pass</p>");


?>