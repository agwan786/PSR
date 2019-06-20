<?php

namespace HR\ProcessOption\MyClass;

use HR\PaymentOption\Payment;

class Calculation extends Payment
{
	
	public function __construct()
	{
        parent::__construct();
	}

	public function calculation(
	    $action, 
	    $params
	) {
		if($action != ''){
                if($this->validateRequest(
			        $action, 
				    $params
			    )
			) {				
				return $this->{$action}($params);
			}
		}else{
			echo "No action provided";	
		}
	}	
}

?>