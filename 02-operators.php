<?php
$n=1;
$f=3.14;
//var_dump($n+$f);
$s="string";
//var_dump($n+$f+$s);
$b=true;
//var_dump($n+$f+$s+$b);
// $n+=10;
//exit;

$s='PHP akademija';
$s=$s.' u Osijeku.';
//var_dump($s);

$a=[
    1,
    2,
    'one'=>'a1',
    'two'=>'a2'
];
$b=[
    3,
    4,
    'two'=>'b2',
    'three'=>'b3'
];
/*
$b=[
    0=>3,
    1=>4,
    'two'=>'b2',
    'three'=>'b3'
];
*/
//var_dump($a+$b);
//var_dump(array_merge($a,$b)); //replace for strings, append for numeric keys
//var_dump(array_replace($a,$b));

