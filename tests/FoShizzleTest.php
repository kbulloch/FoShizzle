<?php

    require_once "src/FoShizzle.php";

    class FoShizzleTest extends PHPUnit_Framework_TestCase
    {
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

        function testFoShizzleStartS()
        {
            //Arrange
            $test_fo_shizzle_start_s = new FoShizzle;
            $input = "start";

            //Act
            $result = $test_fo_shizzle_start_s->changeLetters($input);

            //Assert
            $this->assertEquals("start", $result);
        }

        function testFoShizzleCapitalS()
        {
            //Arrange
            $test_fo_shizzle_capital_s = new FoShizzle;
            $input = "iS";

            //Act
            $result = $test_fo_shizzle_capital_s->changeLetters($input);

            //Assert
            $this->assertEquals("iS", $result);
        }

        function testFoShizzleMultiWords()
        {
            //Arrange
            $test_fo_shizzle_multi_words = new FoShizzle;
            $input = "Here are some words";

            //Act
            $result = $test_fo_shizzle_multi_words->changeLetters($input);

            //Assert
            $this->assertEquals("Here are some wordz", $result);
        }
    }
?>
