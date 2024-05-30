<?php

$temperature = [
    "Venezia" => 16, "Bari" => 32,
    "Roma" => 28, "Napoli" => 30,
    "Milano" => 4, "Palermo" => 14,
    "Torino" => 24, "Roccaraso" => -5000,
    "Lecce" => 27, "Genova" => 30,
    "Catania" => 11, "Cosenza" => 9,
  ];

  foreach ($temperature as $citta => $temperatura) {
    $condizioniMeteo = "";

    if ($temperatura <= 15) {
        $condizioniMeteo = "fa' freddo";
    } else if ($temperatura > 16 && $temperatura < 50) {
        $condizioniMeteo = "fa' caldo";
    } else if ($temperatura >= 50) { // Aggiunta la parentesi di chiusura
        $condizioniMeteo = "fa' molto caldo";
    }

    echo "A $citta fa' $condizioniMeteo con $temperatura °c  \n";
}



// piccolo reminder: se echo lo metti fuori dal foreach stampa solo l'ultimo elemento presente. 