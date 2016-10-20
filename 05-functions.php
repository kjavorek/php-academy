<?php

function test ($a, $b=2,$c)
    {
        return ($a**$b*$c);
        // ** potenciranje
    }
$c=test(5,null,5);
var_dump($c);

//PHP 7
/*
functiontest 2(array $a, int $b):int{ //return type is int
 *  * }
 *  */


/*Anonymous functions*/
$test4=function(){
    echo ":)";
};
$test4();