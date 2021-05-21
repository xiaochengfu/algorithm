<?php

$array = [4, 3, 2, 6, 1];
print_r($array);
$result = bubbleSort($array);
print_r($result);


/**
 * 冒泡排序
 * @param array $array
 * @return array
 */
function bubbleSort(array $array)
{
    for ($e = count($array) - 1; $e > 0; $e--) {
        for ($i = 0; $i < $e; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                swap($array, $i, $i + 1);
            }
        }
    }
    return $array;
}

function swap(&$array, $i, $j)
{
    $array[$i] = $array[$i] ^ $array[$j];
    $array[$j] = $array[$i] ^ $array[$j];
    $array[$i] = $array[$i] ^ $array[$j];
}