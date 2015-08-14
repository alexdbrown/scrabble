<?php
    class Scrabble
    {
        function scrabbleScore($input)
        {

            $dictionary = (file_get_contents("https://docs.oracle.com/javase/tutorial/collections/interfaces/examples/dictionary.txt"));
            $new_dictionary = explode("\n", $dictionary);

            // Lower case user word
            $word = strtolower($input);

            if (!in_array($word, $new_dictionary) || ($input === "")) {
                return "Sorry, that's not a real word. Nigel says try again.";
            } else {

                // Split up user word into individual letters
                $letters_in_array = str_split($word);

                // Assign letter values
                $alphabet = array("a" => 1, "b" => 3, "c" => 3, "d" => 2, "e" => 1,
                "f" => 4, "g" => 2, "h" => 4, "i" => 1, "j" => 8, "k" => 5, "l" => 1,
                "m" => 3, "n" => 1, "o" => 1, "p" => 3, "q" => 10, "r" => 1, "s" => 1,
                "t" => 1, "u" => 1, "v" => 4, "w" => 4, "x" => 8, "y" => 4, "z" => 10);

                $score = 0;

                foreach ($letters_in_array as $single_letter) {
                    $score += ($alphabet[$single_letter]);
                }

            }

            return $score;

        }

    }
    
 ?>
