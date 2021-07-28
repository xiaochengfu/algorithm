<?php

$str = 'abcdabcbb';

function getNoRepeatLong($s){
    $n = strlen($s);
    if ($n <= 1) return $n;
    // 维护一个滑动窗口，窗口内为无重复字符的最长子串
    // 以 pwwkew 为例，遍历整个字符串
    // left 为滑动窗口起点索引， i 为滑动窗口终点索引
    // hash 记录当前滑动窗口内的字母，键为 字母，值为 索引
    // 全局 max 记录窗口最大长度
    // left=i=0, 窗口内只有一个字母 p, length=1, hash=['p' => 0]
    // left=0, i=1, 索引 1 对应的字母 w 不在 hash 内，窗口向右滑动, length=2, hash=['p' => 0, 'w' => 1]
    // left=0, right=2, 索引 2 对应的字母 w 在 hash 内,窗口起点要更新为上一个 w 的索引的下一个位置,left=hash['w'] + 1.
    // 同时， hash['w'] 更新为新的索引 ，指向最后一个 w, hash=['p' => 0, 'w' => 2]
    $left = 0;
    $hash = [];
    $max = 0;
    for ($i = 0; $i < $n; $i++) {
        $char = $s[$i];
        if (isset($hash[$char])){
            //窗口起点要更新为上一个 w 的索引的下一个位置,left=hash['w'] + 1，但要和目前的left位置做下比较，目录的left位置可能不是当前字符的位置
            $left = max($left, $hash[$char] + 1);
        }
        // 提前结束遍历
//        if ($left + $max >= $n) break;

        $hash[$char] = $i;
        $max = max($max, $i - $left + 1);
    }
    return $max;
}

/**
 * [
 * a=>0,
 *
 * ]
 */

var_dump(getNoRepeatLong($str));