<?php
$names = array('puneeta','sahil','karan','puneet','shyam');
$find ='puneet';
foreach($names as $index=>$name){
	if($name==$find){
		echo "Index is = ".$index." and name is = ".$name;
	}
}


?>