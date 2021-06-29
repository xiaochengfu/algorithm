<?php

class Solution
{

    /**
     * 两数之和 leetcode-1
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $hasMap = [];
        foreach ($nums as $k => $value) {
            $r = $target - $value;
            if (isset($hasMap[$r])) {
                return [$hasMap[$r],$k];
            }else{
                $hasMap[$value] = $k;
            }
        }
        return [];
    }
}

$s = new Solution();
$num = [3,2,4];
var_dump($s->twoSum($num, 6));
