<?php

$array = [4, 3, 2, 6, 1];
print_r($array);
$result = selectSort($array);
print_r($result);

function selectSort(array $array)
{
    $length = count($array);
    if ($length < 2) return $array;

    for ($i = 0; $i < $length; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$minIndex] > $array[$j]) {
                $minIndex = $j;
            }
        }
        swap($array, $i, $minIndex);
    }
    return $array;
}

function swap(&$array, $i, $j)
{
    $tmp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $tmp;
}

