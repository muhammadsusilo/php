<?php
$say = "Hello " . htmlspecialchars($_GET["name"]);
?>

<html>
   <head>
      <body>
         <h1><?= $say ?></h1>
      </body>
   </head>
</html>
