<?php
/**
 * Test that demonstrates fixtures
 */
class   FactorialFixtureTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Factorial
     */
    protected $factorial;

    /**
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp()
    {
        $this->factorial = new Factorial();
    }

    /**
     * @see PHPUnit_Framework_TestCase::tearDown()
     */
    public function tearDown()
    {
        $this->factorial = null;
    }

    /**
     * @dataProvider generateNumbers
     */
    public function testPositiveNumbers($number, $expectedFactorial)
    {
        $this->assertEquals($expectedFactorial, $this->factorial->calculate($number));
    }

    public function testThrowsExceptionWithNegativeNumberUsignAssert()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->factorial->calculate(-5);
    }

    /**
     * Generate numbers for testing factorial
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
