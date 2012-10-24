<?php
/**
 * Mock class used to test the static method doOperation with argument 'add' in class 
 * Calculator
 */
class CalculatorMock extends Calculator
{
	/**
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
	public static function add($a, $b)
	{
		return 2;
	}
}