<?php


$words1 = ['una', 'del', 'vita', 'colle','mi', 'rosso', ['oscura', 'era', "di", [ 'mezzo', [ 'cammin','Nel', [ 'selva','la', [ 'via', 'una', "in", ] ], ]  ],'ritrovai', 'per' ], 'retta']; 

$words2 = [ 
  'elemento1' => ", mi", 
  'elemento2' => 'nostra', 
  'elemento3' => [ 
                    'Virgilio', 
                    'smarrita', 
                    'ché' 
                  ] 
];


$pt1=$words1[6][3][1][1] . " " . $words1[6][3][0] . " " . $words1[1] ." ". $words1[6][3][1][0] . " ". $words1[6][2] . " " .$words2['elemento2'] ." ". $words1[2]." ". $words2['elemento1'] . " " . $words1[6][4];


$pt2=$words1[6][3][1][2][2][2] ." ". $words1[6][3][1][2][2][1] ." ". $words1[6][3][1][2][0] ." ".  $words1[6][0]." ".$words2["elemento3"][2] ." ". $words1[6][3][1][2][1] ." ". $words1[7]  ." ". $words1[6][3][1][2][2][0] ." ".  $words1[6][1] ." ". $words2["elemento3"][1]
;

$results= $pt1."\n".$pt2;
var_dump($results);

//\n = key per andare a capo (kinda br) " " = space