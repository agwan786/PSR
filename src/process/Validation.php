<?php

namespace HR\ProcessOption\MyTrait;

trait Validation
{
    public function paramCheck($parameters = [])
    {
        foreach($parameters as $param){
			if(!is_numeric($param)){
				echo 'Data should be numeric!';exit;
			}
		}
		return true;
    }
}

?>