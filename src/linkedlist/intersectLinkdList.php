<?php

use php\ListNode;

include "../php/ListNode.php";

/**
 * 相交链表 leetcode-160
 * @param $headA
 * @param $headB
 * @return null
 */
function intersectNode($headA, $headB)
{
    if ($headA == null || $headB == null) {
        return null;
    }
    $pA = $headA;
    $pB = $headB;
    while ($pA != $pB) {
        $pA = $pA == null ? $headB : $pA->next;
        $pB = $pB == null ? $headA : $pB->next;
    }
    return $pA;
}

/**
 * 1->2->3->
 *           5->6
 * 8->4->7->
 */
$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node5 = new ListNode(5);
$node6 = new ListNode(6);


$node8 = new ListNode(8);
$node4 = new ListNode(4);
$node7 = new ListNode(7);
$node5 = new ListNode(5);
$node6 = new ListNode(6);

$l1 = $node1;
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node5;
$node5->next = $node6;

$l2 = $node8;
$node8->next = $node4;
$node4->next = $node7;
$node7->next = $node5;
$node5->next = $node6;

var_dump(intersectNode($l1, $l2));