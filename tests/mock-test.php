<?php
// Basic test using early binding in static methods (self::)
require dirname(__FILE__) . '/../application/CalculatorMock.php';
var_dump(CalculatorMock::doOperation('add', 2, 2));