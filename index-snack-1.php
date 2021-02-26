<?php
?>

<!-- Creiamo un array 'matches' contenente altri array
i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php

$matches = [
  "matches1" => [
    "teamCasa" => "Olimpia Milano",
    "teamOspiti" => "Cantù",
    "puntiCasa" => "55",
    "puntiOspiti" => "60",
  ],
  "matches2" => [
    "teamCasa" => "Virtus Bologna",
    "teamOspiti" => "Treviso",
    "puntiCasa" => "90",
    "puntiOspiti" => "89",
  ],
  "matches3" => [
    "teamCasa" => "Reggiana",
    "teamOspiti" => "Dinamo Sassari",
    "puntiCasa" => "80",
    "puntiOspiti" => "113"
  ]
];
echo $matches["matches1"]["teamCasa"] . ' - ' . $matches["matches1"]["teamOspiti"] . ' | ' . $matches["matches1"]["puntiCasa"] . ' - ' . $matches["matches1"]["puntiOspiti"] . '<br/><br/>';
echo $matches["matches2"]["teamCasa"] . ' - ' . $matches["matches2"]["teamOspiti"] . ' | ' . $matches["matches2"]["puntiCasa"] . ' - ' . $matches["matches2"]["puntiOspiti"] . '<br/><br/>';
echo $matches["matches3"]["teamCasa"] . ' - ' . $matches["matches3"]["teamOspiti"] . ' | ' . $matches["matches3"]["puntiCasa"] . ' - ' . $matches["matches3"]["puntiOspiti"] . '<br/><br/>';
?>


<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Matches</title>
  </head>
  <body>



  </body>
</html>
