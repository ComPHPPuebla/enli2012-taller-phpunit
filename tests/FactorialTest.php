<?php
require dirname(__FILE__) . '/../application/Factorial.php';

/**
 * First tests
 */
class   FactorialTest 
extends PHPUnit_Framework_TestCase
{
	public function testFactorialForOne()
	{
		$factorial = new Factorial();
		$factorialForOne = $factorial->calculate(1);
		$this->assertEquals(1, $factorialForOne);
	}
	
	public function testFactorialForFour()
	{
		$factorial = new Factorial();
		$factorialForFour = $factorial->calculate(4);
		$this->assertEquals(24, $factorialForFour);
	}
	
	public function testFactorialForTen()
	{
		$factorial = new Factorial();
		$factorialForTen = $factorial->calculate(10);
		$this->assertEquals(3628800, $factorialForTen);
	}
}