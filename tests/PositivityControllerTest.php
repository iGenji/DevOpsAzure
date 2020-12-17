<?php


use PHPUnit\Framework\TestCase;
require "vendor/autoload.php";
require "controllers/PositivityController.php";

class PositivityControllerTest extends TestCase
{

    private $positivityController;

    protected function setUp()
    {
        parent::setUp();
        $this->positivityController = new PositivityController();
    }

    public function test()
    {
        $this->assertEquals("test", "test");
    }

    public function test_countPositivity_givenBon_shouldReturnCorrect(){


        $actual = $this->positivityController->countPositivity("bon");



        $this->assertEquals("Correct", $actual);
    }


    public function test_countPositivity_givenMatin_shouldReturnNeutre(){

        $actual = $this->positivityController->countPositivity("matin");

        $this->assertEquals("Neutre", $actual);
    }


}
