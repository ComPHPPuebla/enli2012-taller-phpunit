<?php
require dirname(__FILE__) . '/../application/Factorial.php';

/**
 * Test class that uses Data Providers and tests Exceptions
 */
class   FactorialProvidersTest
extends PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider generateNumbers
	 */
	public function testPositiveNumbers($number, $expectedFactorial)
	{
		$factorial = new Factorial();
		$this->assertEquals($expectedFactorial, $factorial->calculate($number));
	}
	
	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testThrowsExceptionWithNegativeNumbers()
	{
		$factorial = new Factorial();
		$factorial->calculate(-2);
	}
	
	public function testThrowsExceptionWithNegativeNumberUsignAssert()
	{
		$this->setExpectedException('\InvalidArgumentException');
		$factorial = new Factorial();
		$factorial->calculate(-5);
	}
	
	/**
	 * Provider method that generates numbers for testing Factorial
	 */
	public function generateNumbers()
	{
		return array(
			array(0, 1), 
			array(1, 1),
			array(4, 24),
			array(10, 3628800),
		);
	}
	
}