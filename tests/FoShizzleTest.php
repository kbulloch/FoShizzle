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

        function testFoShizzleMultiLetters()
        {
            //Arrange
            $test_fo_shizzle_multi_letters = new FoShizzle;
            $input = 'ss';

            //Act
            $result = $test_fo_shizzle_multi_letters->changeLetters($input);

            //Assert
            $this->assertEquals('zz', $result);
        }

        function testFoShizzleOneWord()
        {
            //Arrange
            $test_fo_shizzle_one_word = new FoShizzle;
            $input = "bass";

            //Act
            $result = $test_fo_shizzle_one_word->changeLetters($input);

            //Assert
            $this->assertEquals("bazz", $result);

        }
    }
?>
