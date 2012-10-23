<?php
/**
 * Calculate the factorial of an integer number
 */
class Factorial
{
	/**
	 * @param int $number
	 * @throws InvalidArgumentException
	 */
	public function calculate($number)
	{
		if ($number < 0) {
			$message = 'A positive number was expected';
			throw new InvalidArgumentException($message);
		} elseif ($number == 1 || $number == 0) {
			return 1;
		} else {
			return $number * $this->calculate($number -1);
		}
	}
}