<?php
    require_once "src/Scrabble.php";

    class scrabbleScore extends PHPUnit_Framework_TestCase
    {
        function test_scrabbleScore_singleLetterValue()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "A";

            //Act
            $result = $test_Scrabble->scrabbleScore($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_scrabbleScore_differentLetterValue()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "D";

            //Act
            $result = $test_Scrabble->scrabbleScore($input);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_scrabbleScore_multipleLetterValue()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "FhVf";

            //Act
            $result = $test_Scrabble->scrabbleScore($input);

            //Assert
            $this->assertEquals(16, $result);
        }

        function test_scrabbleScore_differentMultipleLetterValue()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "AppLe";

            //Act
            $result = $test_Scrabble->scrabbleScore($input);

            //Assert
            $this->assertEquals(9, $result);
        }


    }
 ?>
