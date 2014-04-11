<?php
/**
 * Introduction to assertions
 */
class FirstTest extends PHPUnit_Framework_TestCase
{
    /**
     * Perform an asserTrue
     */
    public function testCanAssert()
    {
        $this->assertTrue(true);
    }

    /**
     * Perform assert equals
     */
    public function testNumbersAreEqual()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * assertEquals will fail 2 != 1
     */
    public function testNumbersAreNotEqual()
    {
        //This will fail
        $this->assertEquals(2, 1, '2 and 1 are not equals');
    }
}
