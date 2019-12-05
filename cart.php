<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Bal Kanker <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>
        <form action="cart.php" method="post" class= "">
          <input type="text" name="poomp" value="" required>
          <input type="submit" name="submit" value="Send it">
        </form>
<?php
session_start();
if (isset($_POST["submit"])) {
    $input = $_POST["poomp"];
      if ($input>0 && $input<4){
        $_SESSION['keuze'] = $input;
        echo "<h1>" . $input . "</h1>";
      }
      else {
        echo "<h1> Dit is geen beschikbare keuze </h1>";
      }}
else{
  if (isset($_SESSION['keuze']))
{
  echo "<h1>" . $_SESSION['keuze'] . "</h1>";
}}

?>
    </body>
</html>