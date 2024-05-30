<?php
/*Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array*/

$nums = [22, 50, 8, 4, 53, 82,53, 4, 10];
$sommapari = 0; //recipiente dei numeri pari
$contaPari = 0; //counter numeri pari

foreach ($nums as $numero) {
    if ($numero % 2 === 0) {
        $sommaPari += $numero;
        $contaPari++;
    }
}
// Con l'IF controllo tramite il modulo se il numero è pari chiedendo in risposta un risultato IDENTICAL a zero. Se la condizione è true, allora vien sommato agli altri numeri (sommaPari) ed il Counter viene incrementato di 1. 


if ($contaPari > 0) {
    $mediaPari = $sommaPari / $contaPari;
    echo "La media dei numeri pari è: $mediaPari\n";
} else {
    echo "Non sono stati trovati numeri pari nell'array.\n";
}

//Se è presente un valore maggiore di zero vuol dire che son stati trovati dei pari, e che sono stati sommati offrendo una media (echo la media è), se non v'è un numero maggiore di zero invece, non sono stati trovati pari, che non sono stati sommati. E fornisce un risultato fallimentare. 

