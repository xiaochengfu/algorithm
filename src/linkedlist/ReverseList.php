<?php
use php\ListNode;

include "../php/ListNode.php";

function reverseList(ListNode $head){
    $pre = null;
    $next = null;
    //head 1->2->3->null
    while ($head != null){
        //改变head的next指向，改变前保存// head
        $next = $head->next;        // 1->2->3->null   next =  2->3->null
        //将head的next指向新节点pre   //      head
        $head->next = $pre;        //   pre<-1 2->3->null  指向新节点后，后面的节点就丢了，所以第一步先记录
        //让pre成为头          //
        $pre = $head;             //   pre<-1         next =  2->3->null
        //head 向后一位，继续遍历               pre
        $head = $next;            //   null<-1         head  2->3->null
    }
    return $pre;
}

$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node4 = new ListNode(4);
$node5 = new ListNode(5);

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node5;

var_dump(reverseList($node1));