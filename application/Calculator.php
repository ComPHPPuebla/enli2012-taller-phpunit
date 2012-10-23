<?php
/**
 * Perform basic math operations in static methods
 */
class Calculator
{
	/**
	 * @param string $operation
	 * @param float $a
	 * @param float $b
	 * @return float
	 * @throws InvalidArgumentException
	 */
	public static function doOperation($operation, $a, $b)
	{
		switch ($operation) {
			case 'add':
				return static::add($a, $b);
			case 'multiply':
				return static::multiply($a, $b);
			default:
				$message = "Expected 'add' or 'multiply'; '$operation' given";
				throw new InvalidArgumentException($message);
		}
	}
	
	/**
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
	public static function add($a, $b)
	{
		return $a + $b;
	}
	
	/**
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
	public static function multiply($a, $b)
	{
		return $a * $b;
	}
	
}