<?php

    require_once "src/FoShizzle.php";

    class FoShizzleTest extends PHPUnit_Framework_TestCase
    {
        function testFoShizzleOneLetter()
        {
            //Arrange
            $test_fo_shizzle_one_letter = new FoShizzle;
            $input = "s";

            //Act
            $result = $test_fo_shizzle_one_letter->changeLetters($input);

            //Assert
            $this->assertEquals("z", $result);
        }
    }
?>
