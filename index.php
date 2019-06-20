<?php

include_once('autoload.php');

if(isset($argv[1]) && $argv[1] != ''){
	$action = $argv[1];
	$params = [];
	if(isset($argv[2]) && $argv[2] != ''){
		if(strpos($argv[2], ',')){
			$params = explode(',', $argv[2]);
		}else{
			$params[] = $argv[2];
		}
	}

	$obj = new HR\ProcessOption\MyClass\Calculation();

	$result = $obj->calculation(
	    $action, 
		$params
	);
	echo $result;
}
