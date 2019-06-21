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
		} elseif( 
		          strlen($parameters) > 0 && 
		          strrev(substr( $parameters, 0, 5 )) == true && 
				  strlen(substr( $parameters, 0, 5 )) == 5 && 
				  str_replace('\\', '@', substr( $parameters, 0, 2 )) == '@@'
				) {
			$delimiter  = $parameters[2];
			$parameters = substr( $parameters, 5, strlen($parameters) );
			$parameters = explode($delimiter, $parameters);
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