<?php

function stringLength($str) {
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }
    return $len;
}


function findPattern($text, $pattern) {
    $count = 0;
    $text_length = stringLength($text);
    $pattern_length = stringLength($pattern);

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

echo findPattern($text, $pattern);  
?>
