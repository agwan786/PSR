<?php
namespace HR\ProcessOption\MyTrait;

trait Validation
{
    public function paramCheck($parameters = '')
    {
		if(strlen($parameters) > 0 && ctype_digit(substr( $parameters, 0, 1 ))) {
			if(strpos($parameters, '\n')){
				$parameters = str_replace('\n', ',', $parameters);				
			}else{
				if(strpos($parameters, ',') === false) {
				    echo 'Data should be numeric!';exit;
				}
			}
			$parameters = explode(',', $parameters);
		} elseif( strlen($parameters) > 0 && strrev(substr( $parameters, 0, 4 )) == true) {
			
		}
		
		if(is_array($parameters) && !empty($parameters)){
            foreach($parameters as $param) {
			    if(!is_numeric($param)) {
				    echo 'Data should be numeric!';exit;
			    }
		    }
		    return $parameters;
		}
		return false;
    }
}

?>