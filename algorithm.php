<?php

$input = $_POST['number'];
$alphas = range('A', 'Z');
$output = array();
//skip invalid input
if (preg_match('/^[0-9]+$/', $input) === false || (int)$input > count($alphas)) die('Invalid input');

for ($i = $input; $i >= 1; $i--) {
    $endKey = count($alphas) - 1;
    if ($i != $input) {
        $endKey -= $i;
    }

    $startKey = $endKey % $input;
    for ($j = $startKey; $j <= $endKey; $j += $input) {
        $output[] = $alphas[$j];
    }
}

//another solution
/*for ($i = 1; $i <= $input; $i++) {
    $tmp = $i;
    if ($i == $input) $tmp = 0;
    for ($j = count($alphas) - 1 - $tmp; $j >= 0; $j -= $input) {
        $output[] = $alphas[$j];
    }
}
krsort($output);*/

echo implode(',', $output);
