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

        

    }
 ?>
