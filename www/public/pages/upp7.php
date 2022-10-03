

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person account</title>
</head>
<body>
    <header><h1>person account</h1></header>
    <main><article>
        <form method="post"> 
        <p>insert your forname</p>
        <input type="text" name="forName" >
        <br>
        <p>insert your aftername</p>
        <input type="text" name="afterName" >
        <br>
        <p>select username</p>
        <input type="text" name="userName">
        <br>
        <p>password</p>
        <input type="text" name="pass">
        <input type="submit" name="enter">
        </form>
    </article></main>
    <footer><h3>contact: abc@mail.com <br>like and support </h3></footer>


<?php
   // För att förenkla användandet av mb_ funktioner
   mb_internal_encoding("UTF-8");     



    if(isset($_POST['forName'])){ // Kontrollerar att data kommer 
        $forname = $_POST['forName'];

        if(!mb_check_encoding($forname)){
            header('Location: upp7.php');
        }
        
        $forname = htmlspecialchars($forname);
        // Eller $data = strip_tags($data);

        $forname = trim($forname);
        $forname = stripslashes($forname);

        header('Content-Type: text/html; charset=utf-8');
        echo("<h1> Wellcome $forname </h1>");

    }
    if(isset($_POST['afterName'])){ // Kontrollerar att data kommer 
        $aftername = $_POST['afterName'];

        if(!mb_check_encoding($aftername)){
            header('Location: upp7.php');
        }
        
        $aftername = htmlspecialchars($aftername);
        // Eller $data = strip_tags($data);

        $aftername = trim($aftername);
        $aftername = stripslashes($aftername);

        header('Content-Type: text/html; charset=utf-8');
        echo("<h1> $aftername</h1>");

    }
    if(isset($_POST['pass'])){ // Kontrollerar att data kommer 
        $pass = $_POST['pass'];

        if(!mb_check_encoding($pass)){
            header('Location: upp7.php');
        }
        
        $pass = htmlspecialchars($pass);
        // Eller $data = strip_tags($data);

        $pass = trim($pass);
        $pass = stripslashes($pass);

        header('Content-Type: text/html; charset=utf-8');
        echo"password: $pass";
    }
    
   
    if(isset($_POST['userName'])){ // Kontrollerar att data kommer 
        $userName = $_POST['userName'];

        if(!mb_check_encoding($userName)){
            header('Location: upp7.php');
        }
        
        $userName = htmlspecialchars($userName);
        // Eller $data = strip_tags($data);

        $userName = trim($userName);
        $userName = stripslashes($userName);

        header('Content-Type: text/html; charset=utf-8');
        echo" username: $userName ";
    }
  // $userName = $_POST['userName'];  // kan testa med och utan för att se om koden if satserna fungerar.

echo("<h1> check personal information</h1>");


?>
</body>
</html>