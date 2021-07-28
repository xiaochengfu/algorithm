<?php

use php\ListNode;

include "../php/ListNode.php";

/**
 * letcode-21
 * 将两个升序链表合并为一个新的 升序 链表并返回。新链表是通过拼接给定的两个链表的所有节点组成的。
 * 输入：l1 = [1,2,4], l2 = [1,3,4]
 * 输出：[1,1,2,3,4,4]
 *
 * 输入：l1 = [], l2 = []
 * 输出：[]
 *
 * 输入：l1 = [], l2 = [0]
 * 输出：[0]
 */
class Solution
{
    /**
     * @param $l1
     * @param $l2
     * @return null
     */
    function mergeTwoLists($l1, $l2)
    {
        $preHead = new ListNode(-1);
        $pre = $preHead;//定义一个哨兵，指针可以往后走
        while ($l1 != null && $l2 != null) {
            if ($l1->val <= $l2->val) {
                //谁小，将哨兵的指针指向谁, next的赋值操作相当于线条的连线
                $pre->next = $l1;
                //对应的链表指针往后移动，节点的赋值操作相当于指针的移动
                $l1 = $l1->next;
            } else {
                $pre->next = $l2;
                $l2 = $l2->next;
            }
            //哨兵节点的指针继续往后走
            $pre = $pre->next;
        }
        $pre->next = $l1 == null ? $l2 : $l1;
        return $preHead->next;
    }
}

$l1 = new ListNode(1);
$node2 = new ListNode(3);
$node3 = new ListNode(5);
$l1->next = $node2;
$node2->next = $node3;

$l2 = new ListNode(2);
$node5 = new ListNode(4);
$node6 = new ListNode(6);
$l2->next = $node5;
$node5->next = $node6;

//迭代实现
$result = (new Solution())->mergeTwoLists($l1, $l2);
print_r($result);
die;

echo '----------------对象赋值和克隆--------------------' . PHP_EOL;
//对象赋值测试
//一：对象赋值并未创建新的对象
$nodeX = new ListNode(1);
$nodeY = $nodeX;
$nodeY->next = 9;
var_dump($nodeX, $nodeY, $nodeX === $nodeY);//true

//二：clone对象时，创建了新的对象
$nodeX = new ListNode(1);
$nodeY = clone $nodeX;
$nodeY->next = 9;
var_dump($nodeX, $nodeY, $nodeX === $nodeY);//false
