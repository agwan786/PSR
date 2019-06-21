<?php
namespace HR\FormulaOption;

use HR\ProcessOption\MyInterFace\Skelton;
use HR\ProcessOption\MyTrait\Validation;

abstract class Formula implements Skelton
{
	use Validation;
	
	public function __construct(){}
	
    abstract public function calculation($action, $params);	
	
	public function validateRequest($action, $params = [])
	{
        if (method_exists($this, $action)) {
            return $this->paramCheck($params);
        } else {
            echo "This action not available"; 
        }
	}
	
	public function add($params = [])
	{
		$sum = 0;
		if(!empty($params)){
			foreach($params as $param){
				$sum += $param;
			}
		}
		return $sum;
	}
	
	public function subtract($params = [])
	{
		$subtract = 0;
		if(!empty($params)) {
			for($i = 0; $i < count($params); $i++) {
				if($i == 0) {
					$subtract = $params[$i];
				} else {
					$subtract -= $params[$i];
				}
			}
		}
		return $subtract;
	}
	
	public function multiply($params = [])
	{
		$multiply = 1;
		if(!empty($params)) {
			foreach($params as $param) {
				$multiply *= $param;
			}
		}
		return $multiply;
	}
}

?>