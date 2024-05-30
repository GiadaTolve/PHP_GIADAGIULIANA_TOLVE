<?php

/*Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

es.

  $users = [

     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],

  ];
 */


$PPL =[ 
    ['nome'=>'Giada', 'Cognome'=>'Tolve', 'Sesso'=>'F'],
    ['nome'=>'Simon', 'Cognome'=>'Basset', 'Sesso'=>'M'],
    ['nome'=>'Penelope', 'Cognome'=>'Featherington', 'Sesso'=>'F'],
    ['nome'=>'Eloise', 'Cognome'=>'Bridgerton', 'Sesso'=>'F'],
    ['nome'=>'Theo', 'Cognome'=>'Sharpe', 'Sesso'=>'M'],
    ['nome'=>'Freddie', 'Cognome'=>'Cruger', 'Sesso'=>'M'],
];

foreach($PPL as $persona){
    $nome = $persona['nome'];
    $cognome = $persona['Cognome'];
    $sesso = $persona['Sesso']; //esplicitiamo le variabili legate alle chiavi

    if($persona['Sesso']=== "F"){
        
        echo "Buongiorno Signora $cognome \n";
    }else{
        echo "Buongiorno Signor $cognome \n";
    }


}