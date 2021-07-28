<?php

use php\ListNode;

include "../php/ListNode.php";

/**
 * 链表是否有环，leetcode-141
 * @param $head ListNode
 * @return bool
 */
function hasCycle($head)
{
    if (empty($head)) return false;
    $slow = $head;
    $fast = $head->next;
    while ($slow != $fast) {
        if ($slow->next == null or $fast->next == null) {
            return false;
        }
        $slow = $slow->next;
        $fast = $fast->next->next;
    }
    return true;
}

$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node4 = new ListNode(4);
$node5 = new ListNode(5);

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node2;

var_dump($node5);die;
$node5 = new ListNode();
var_dump(hasCycle($node1));