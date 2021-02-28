<?php
?>
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


$chiocciola = '@';

$dot = '.';

if((strpos($email,$chiocciola) !== false && strpos($email, $dot) !== false) && (mb_strlen($name) > 3) && (is_numeric($age) === true)){
   $response = 'Accesso riuscito';
}else{
  $response = 'Accesso negato';
}



?>






<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="">
      <?php echo $response ?>
    </div>


  </body>
</html>
