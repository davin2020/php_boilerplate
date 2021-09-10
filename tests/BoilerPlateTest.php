<?php declare(strict_types=1);
require 'BoilerPlate.php';

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error;

class BoilerPlateTest extends TestCase
{
    private $boiler;

    protected function setUp()
    {
        $this->boiler = new BoilerPlate();
    }
 
    protected function tearDown()
    {
        $this->boiler = NULL;
    }
 
    //function names should match corresponding class method name - names should be descriptive as will get used by --testdox flag
    //test function might not return something, but function itself must, in order to be testable
    //name must start with word Test + Success or Failure or Malformed + function name, or can be stand alone method eg assertInstanceOf

    // Success Test = pass in good/valid input of correct data type
    public function testSuccess_AddSomething(): void
    {
        $result = $this->boiler->addSomething(2, 5);
        $this->assertEquals(7, $result);
    }
 
    // Failure Test = pass in correct data type that is outside of range, to test that this fails as expected (assumes a retricted range of inputs)
    public function testFailureExampleNumbersNotEquals(): void {
        $this->assertNotEquals(5, 9);
    }

    // Malformed Test = for when you expect an exception/error to be thrown
    public function  testMalformedAddingIntToArrayReturnsError()
    {
        $inputInt = 77;
        $inputArray = [];
        // must call the expectException() line before the $result line
        $this->expectException(TypeError::class);
        $result = $this->boiler->addSomething($inputInt, $inputArray);
    }
    
}