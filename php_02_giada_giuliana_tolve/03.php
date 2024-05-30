<?php

/*Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".
*/

for ($i = 1; $i <= 100; $i++) 
//inizializzo il mio numero; gli do la condizione di rottura; gli dico che operazione fare
{
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "HACKADEMY";
// Il modulo controlla che il numero (i) sia multiplo di 3, assicurandosi che restituisca 0 - && 5 === 0 fa la stessa cosa con il multiplo di 5.

    } elseif ($i % 3 === 0) {
        echo "PHP";
    } elseif ($i % 5 === 0) {
        echo "JAVASCRIPT";
    } else {
        echo $i;
    }
    echo "\n";
}
