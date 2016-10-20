<?php
header ('Content-Type:text/plain'); //telling browser that this is text file

$a=[1, 'two', 3, 'four'];

foreach($a as $value){
    //echo $value. "\t";
}

//break; 
//break n; exit from n loops 

$list=[
    '<a> - anchor',
    '<p> - paragraph',
    '<ul> - unordered list',
    '<table> - table'
];
foreach($list as $partOfList){
    $explodeValues=explode(' - ',$partOfList);
    echo $explodeValues[0]."\t".$explodeValues[1]."\r\n";
    //echo htmlspecialchars($explodeValues[0]."\t".$explodeValues[1]."<br />");
}



//php manual