<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->


<?php

$partite = array(
    array("casa" => "Olimpia Milano", "ospite" => "Cantù", "punti_casa" => 55, "punti_ospite" => 60),
    array("casa" => "Virtus Bologna", "ospite" => "Fortitudo Bologna", "punti_casa" => 70, "punti_ospite" => 65),
    array("casa" => "Happy Casa Brindisi", "ospite" => "Dinamo Sassari", "punti_casa" => 80, "punti_ospite" => 75),
);


foreach ($partite as $partita) {
    echo $partita['casa'] . '-' . $partita['ospite'] . '|' . $partita['punti_casa'] . "-" . $partita['punti_ospite'] . "<br>";
};

?>