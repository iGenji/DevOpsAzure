<?php


use PHPUnit\Framework\TestCase;
require "vendor/autoload.php";
require "controllers/PositivityController.php";

class PositivityControllerTest extends TestCase
{

    public function test()
    {

        $this->assertEquals("test", "test");
    }
}
