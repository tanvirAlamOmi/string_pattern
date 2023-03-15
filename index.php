<?php

function my_strlen($str) {
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }
    return $len;
}


function find_pattern($text, $pattern) {
    $count = 0;
    $text_length = my_strlen($text);
    $pattern_length = my_strlen($pattern);

    for ($i = 0; $i < $text_length - $pattern_length + 1; $i++) {
        $j = 0;
        while ($j < $pattern_length && $text[$i + $j] == $pattern[$j]) {
            $j++;
        }
        if ($j == $pattern_length) {
            $count++;
        }
    }

    return $count;
}

$text = "tadadattaetadadadafa";
$pattern = "dada";

echo find_pattern($text, $pattern); // output: 3
?>
