<?php

// Creiamo un array con le partite di basket
$partite = array(
    array("squadra_casa" => "Olimpia Milano", "squadra_ospite" => "Cantù", "punti_casa" => 55, "punti_ospite" => 60),
    array("squadra_casa" => "Roma", "squadra_ospite" => "Napoli", "punti_casa" => 70, "punti_ospite" => 65),
    array("squadra_casa" => "Torino", "squadra_ospite" => "Bologna", "punti_casa" => 62, "punti_ospite" => 58),
    array("squadra_casa" => "Los Angeles Lakers", "squadra_ospite" => "San Antonio Spurs", "punti_casa" => 125, "punti_ospite" => 2),
);

// Stampiamo a schermo le partite
foreach ($partite as $partita) {
    $output = $partita["squadra_casa"] . " - " . $partita["squadra_ospite"] . " | " . $partita["punti_casa"] . "-" . $partita["punti_ospite"];
    echo $output . "<br>";
}
