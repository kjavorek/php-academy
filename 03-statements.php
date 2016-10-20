<?php

$isTrue=true;
$isTrue=':]';
$isTrue=0;
$isTrue=[];
$isTrue=-10;
$isTrue=null;
$isTrue;//null

/*if($isTrue){
    echo "It's true\n";
}else { 
    echo "It's false\n"; 
}
*/
//var_dump("123abc"==123); //true
//var_dump(123=="123abc"); //true
//var_dump(1==1.0)==(true=='false'); //true
//var_dump(123==="123"); //false
//var_dump(123!=="123"); //true
//var_dump(123!="123"); //flase
$isTrue=true;
$result=$isTrue?'one':'two';
//var_dump($result);

$result=$isTrue?:false; //if isTrue==true return isTrue else return false
//var_dump($result);

//is_array(), is_number(), is_null(), is_int()

//var_dump(isset($var)); //defined, result true or false
var_dump(empty($var)); 
//
//PHP7
//$action=$_POST['action']?? 'default';

