<?php
/**
 * Mocking and testing static methods
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testDoOperationCallAddMethodOnce()
    {
        $this->markTestSkipped('Static methods cannot be unit tested with PHPUnit\'s mocking frameowrk');

        $calculatorMock = $this->getMockClass(
            '\Calculator',     /* name of class to mock     */
            array('multiply') /* list of methods to mock   */
        );

        $calculatorMock::staticExpects($this->once())
                       ->method('add')
                       ->will($this->returnValue(4));

        $this->assertEquals(4, $calculatorMock::doOperation('add', 2, 2));
    }

    public function tesDoOperationCallMultiplyMethodOnce()
    {
        $this->markTestSkipped('Static methods cannot be unit tested with PHPUnit\'s mocking frameowrk');

        $calculatorMock = $this->getMockClass(
            '\Calculator',     /* name of class to mock     */
            array('multiply') /* list of methods to mock   */
        );

        $calculatorMock::staticExpects($this->once())
                       ->method('multiply')
                       ->will($this->returnValue(8));

        $this->assertEquals(8, $calculatorMock::doOperation('multiply', 4, 2));
    }
}
