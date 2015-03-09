<?php
    class FoShizzle
    {
        function changeLetters($input)
        {
            $input_words = explode(" ", $input);

            $output_letters = array();
            $output_words = array();

            $i=0;

            foreach ($input_words as $word) {
                $input_letters = str_split($word);

                foreach ($input_letters as $letter) {
                    if ($letter == "s" && $i != 0 ) {
                        array_push($output_letters, "z");
                    }
                    elseif($letter == "S") {
                        array_push($output_letters, $letter);
                    }
                    else {
                        array_push($output_letters, $letter);
                    }
                    ++$i;

                }

                $one_word = implode($output_letters);


            }

            array_push($output_words, $one_word);
            return implode($output_words);
        }
    }
?>
