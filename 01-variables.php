<?php
header ('Content-Type:text/plain');
// # /**/ comments
$v=20;
echo $v;
var_dump($v); //can output any type
$v="String";
var_dump($v);
$ar=[1,2,3]; //new
// $ar=array[1,2,3];
var_dump("PHP akademija: {$ar}");
var_dump($ar);
$ar[]=7; //put 7 at the end
var_dump($ar);
$a2=[1,true,"nesto"];
$a3=['number'=>1,
     'string'=>"nesto"
    ];
echo($a3['string']);
var_dump($a3);
$a3[]=123; //key 0...
var_dump($a3);
echo($a3[0]); //output 123
$o=new stdClass(); //generic empty class
//only with classes case insensitive
$o->property='Just a property';
var_dump($o);
print_r($o,true); //true or false-optional, output
die(); 