<?php
 var_dump($_POST);
 if (isset($_POST ["verzenden"])){
     if (!empty($_POST["naam"]) && (!empty($_POST["l"]) && (!empty($_POST["email"])&& (!empty($_POST["email"])) && (!empty($_POST["email"])){

 }

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1>Het Formulier</h1>
 <form method="post">
     <label>Voornaam</label>
     <input type="text" name="voornaam" id="voornaam"><br>
     <label>Achternaam</label>
     <input type="text" name="achternaam" id="achternaam"><br>
     <label>Leeftijd</label>
     <input type="number" name="leeftijd" id="leeftijd"><br>

     <p>Het Geslacht</p>
     <input type="radio" value="geslacht">Man<br>
     <input type="radio" value="geslacht">Vrouw<br>
     <input type="radio" value="geslacht">Anders<br>
     <br>
     <input type="submit" name="Submit" value="Verzenden">
 </form>

</body>
</html>
