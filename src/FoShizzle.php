<?php
    class FoShizzle
    {
        function changeLetters($input)
        {
            $input_letters = str_split($input);
            $output_letters = array();

            $i=0;
            foreach ($input_letters as $letter) {
                if ($letter == "s" && $i != 0 ) {
                    array_push($output_letters, "z");
                }
                else {
                    array_push($output_letters, $letter);
                }
                ++$i;
            }

            return implode($output_letters);

        }
    }
?>
