<?php
namespace HR\ProcessOption\MyClass;

use HR\FormulaOption\Formula;

class Calculation extends Formula
{
	
	public function __construct()
	{
        parent::__construct();
	}

	public function calculation(
	    $action, 
	    $params
	) 
	{
		if($action != ''){
                if($this->validateRequest(
			        $action, 
				    $params
			    )
			) {				
				return $this->{$action}($params);
			}
		} else {
			echo "No action provided";	
		}
	}	
}

?>