<?php
    class FoShizzle
    {
        function changeLetters($input)
        {
            $input_words = explode(" ", $input);

            $output_words = array();

            foreach ($input_words as $word) {

                $output_letters = array();
                $letters_in_current_word = str_split($word);
                $letter_counter=0;

                foreach ($letters_in_current_word as $letter) {
                    if ($letter == "s" && $letter_counter != 0 ) {
                        array_push($output_letters, "z");
                    }
                    elseif($letter == "S") {
                        array_push($output_letters, $letter);
                    }
                    else {
                        array_push($output_letters, $letter);
                    }
                    ++$letter_counter;
                }

                $current_word = implode($output_letters);
                array_push($output_words, $current_word);
            }

            return implode($output_words, " ");
        }
    }
?>
