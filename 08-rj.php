<?php

function csv_to_array($filename=''){
     if(!file_exists($filename) || !is_readable($filename)){
        return FALSE;
	 }
	 $zupanija=NULL;
	 $naselje=array();
	 $puArray=array();
	 $helpArray=array();
	 $postalOfficesByRegion=array();
     if (($handle = fopen($filename, 'r')) !== FALSE)
     {
         while (($row = fgetcsv($handle)) !== FALSE)
         {		
				if($row[5]==$zupanija){ 
					if($row[3]==$nazivPu){
						array_push($naselje,$row[4]);
					}else{
						
						$nazivPu=$row[3];
						$brojPu=$row[1];
			     		array_push($naselje,$row[4]);
					}
				}else{ 
					if($zupanija!==NULL){
						$puHelp=['name'=>$nazivPu,'zip'=>$brojPu,'area'=>$naselje];
						array_push($puArray,$puHelp);
						unset($puHelp);
						$puHelp = array();
						unset($naselje);
						$naselje = array();
						$zHelp=[$zupanija=>$puArray];
						$postalOfficesByRegion=array_merge($postalOfficesByRegion,$zHelp);
						unset($zHelp);
						$zHelp = array();
						}
					$zupanija=$row[5]; //Osjeèko-baranjska,...
					$nazivPu=$row[3]; //Osijek, Tenja,...
					$brojPu=$row[1]; //31000,31207,...
					foreach ($postalOfficesByRegion as $key => $value) {
						if($key==$zupanija){
							foreach ($value as $k => $v) {
								if($v==$nazivPu){
									foreach ($value as $k => $v) {
										if($k=='area'){
											$naselje=$v;
											array_push($naselje,$row[4]);
											$v=$naselje;
										}
									}
								}else{
									$naselje=$row[4];
									$puHelp=['name'=>$nazivPu,'zip'=>$brojPu,'area'=>$naselje];
									array_push($postalOfficesByRegion[$zupanija],$puHelp);
									// foreach ($postalOfficesByRegion as $key => $value) {
										// if($key==$zupanija){
											//$helpArray=$value;
											//array_push($helpArray,$puHelp);
											//$value=$helpArray;
											//unset($helpArray);
											//$helpArray = array();
										// }
									// }
									unset($puHelp);
									$puHelp = array();
								}
								unset($naselje);
								$naselje = array();
							}
						}else{
							array_push($naselje,$row[4]); //Brijest,Podravlje,Sarvaš...
						}
					}
				}
         }
		 fclose($handle);
     }
	 return $postalOfficesByRegion;
}

function groupPostalOffices(){
	$zup=NULL;
	$postalOffices=array();
	$grouped=array();
	global $csvToArray;
	foreach ($csvToArray as $key => $value) {
		$zup=$key;
		foreach ($value as $k => $v) {
			foreach ($v as $a => $b) {
				if($b!=NULL){
					if($a=='area'){
						array_push($postalOffices,$b);
					}
				}
			}
		}
		$grouped=array_merge($grouped,[$zup=>$postalOffices]);
		unset($postalOffices);
		$postalOffices = array();
	}
	return $grouped;
}

function getRegionName($area){
	global $csvToArray;
	$bingo=false;
	foreach ($csvToArray as $key => $value) {
		foreach ($value as $k => $v) {
			foreach ($v as $a => $b) {
				if($a=='area'){
					for($i=0;$i<sizeof($b);$i++){
						while($bingo===false){
							if($b[$i]==$area){
								$region=$key;
								$bingo=true;
							}
						}
					}
				}
			}
		}
	}
	return $region;
}

function sortArray(){
	global $csvToArray;
	$helpArray=array();
	$helpArray2=array();
	foreach($csvToArray as $key=>$value){
		for($i=0;$i<count($value);$i++){
			if($value[$i]!=0){
				$helpArray[$value[$i]['name']]=$value[$i];
			}
		}
		ksort($helpArray);
		var_dump($helpArray);
		$num=0;
		foreach($helpArray as $hKey=>$hValue){
			$helpArray2[$num]=$hValue;
			$num++;
		}
		for($i=0;$i<count($value);$i++){
			$value[$i]=$helpArray2[$i];
		}
		unset($helpArray);
		unset($helpArray2);
		foreach($value as $k=>$v){
			if($k=='area'){
				asort($v);
			}
		}
		$csvToArray[$key]=$value;
	}
	ksort($csvToArray);
	return $csvToArray;
}

//a)
$csvToArray=csv_to_array('postanski-uredi.csv');
//var_dump ($csvToArray);
//b)
$region=groupPostalOffices();
//var_dump ($region);
//c)
$result=getRegionName("Zagreb-Donji Grad");
//var_dump($result);
//d)
$sorted=sortArray();
//var_dump($sorted);
