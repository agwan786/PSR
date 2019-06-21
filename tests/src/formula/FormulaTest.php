<?php

class FormulaTest extends PHPUnit_Framework_TestCase
{
	public function testAddReturn()
	{
		
		$formula = new \HR\ProcessOption\MyClass\Calculation();
		
		$expected = 3;
		
		$this->assertSame($expected, $formula->calculation('add', [1,2]));
		
	}
	
	public function testSubtractReturn()
	{
		
		$formula = new \HR\ProcessOption\MyClass\Calculation();
		
		$expected = -4;
		
		$this->assertSame($expected, $formula->calculation('subtract', [1,4]));
		
	}
	
	public function testMultiplyReturn()
	{
		
		$formula = new \HR\ProcessOption\MyClass\Calculation();
		
		$expected = 6;
		
		$this->assertSame($expected, $formula->calculation('multiply', [1,4]));
		
	}
}

?>