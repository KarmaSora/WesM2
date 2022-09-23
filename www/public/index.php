<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MK2</title>

</head>
<body>
   
<header><h1> this is M2 </h1></header>

<main>
   <h1>testing strip_tags</h1>
   <p> this here is a test of the striptag </p>
   <p>the results are as shown <b>here</b></p>
   <footer>
      <h1>E.N.D</h1>
   </footer>
</main>
</body>
</html>
<?php
echo("<Strong>hello World!<Strong/> ");
echo strip_tags("hello There" );
echo(" dsakldj ");


$i = 0.0;
$k = 0.0;
echo("<br/>");
for($i = 0; $i < 5; $i+=0.1){
   echo($i . "  ");
  }

echo("<br/>");
while($k < 5){
   echo ($k.  "  ");
   $k+=0.1;
   
}

?>