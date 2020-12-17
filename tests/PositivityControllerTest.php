<?php


use PHPUnit\Framework\TestCase;
require "vendor/autoload.php";
require "controllers/PositivityController.php";

class PositivityControllerTest extends TestCase
{

    private $positivityController;

    protected function setUp():void
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

        $this->assertEquals("correct", $actual);
    }

    public function test_countPositivity_givenMatin_shouldReturnNeutre(){

        $actual = $this->positivityController->countPositivity("matin");

        $this->assertEquals("neutre", $actual);
    }

    public function test_countPositivity_given2PositiveWords_shouldReturnCorrect(){

        $message="bon parfait";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("correct", $actual);
    }

    public function test_countPositivity_given2PositiveWordsAndOneRandom_shouldReturnCorrect(){

        $message="bon parfait matin";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("correct", $actual);
    }

    public function test_countPositivity_given3PositiveWords_shouldReturnBon(){

        $message="bon parfait parfaite";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("bon", $actual);
    }

    public function test_countPositivity_given4PositiveWords_shouldReturnParfait()
    {
        $message = "bon bonne super cool";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("bon", $actual);
    }

    public function test_countPositivity_given5PositiveWords_shouldReturnParfait()
    {
        $message = "bon bonne super cool génial";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("très bon", $actual);
    }

    public function test_countPositivity_given6PositiveWords_shouldReturnParfait()
    {
        $message = "bon bonne super cool génial géniale";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("franchement positif", $actual);
    }

    public function test_countPositivity_given7PositiveWords_shouldReturnParfait()
    {
        $message = "bon bonne super cool génial géniale parfait";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("franchement positif", $actual);
    }

    public function test_countPositivity_given8PositiveWords_shouldReturnParfait()
    {
        $message = "bon bonne super cool génial géniale parfait parfaite ";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("franchement positif", $actual);
    }

    public function test_countPositivity_given9PositiveWords_shouldReturnParfait()
    {
        $message = "bon bonne super cool génial géniale parfait parfaite incroyable ";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("excellent", $actual);
    }

    public function test_countPositivity_given9PositiveWordsOneRandom_shouldReturnParfait()
    {
        $message = "bon matin super cool génial géniale parfait parfaite incroyable excellent";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("excellent", $actual);
    }

    public function test_countPositivity_given10PositiveWords_shouldReturnParfait(){

        $message="bon bonne super cool génial géniale parfait parfaite incroyable excellent";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("parfait", $actual);
    }

    public function test_countPositivity_given2PositiveWordsInAPhrase_shouldReturnCorrect(){

        $message="j'ai passé une bonne et excellente journée aujoud'hui";

        $actual = $this->positivityController->countPositivity($message);

        $this->assertEquals("correct", $actual);
    }






}
