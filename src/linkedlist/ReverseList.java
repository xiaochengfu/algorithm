package linkedlist;

/**
 * 链表翻转
 */
public class ReverseList {

    public static class Node {
        public int value;

        public Node next;

        public Node(int data) {
            value = data;
        }

        @Override
        public String toString() {
            return value + "->" + next;
        }
    }

    public static void main(String[] args) {
        Node node1 = new Node(1);
        Node node2 = new Node(2);
        Node node3 = new Node(3);
        Node node4 = new Node(4);
        Node node5 = new Node(5);

        node4.next = node5;
        node3.next = node4;
        node2.next = node3;
        node1.next = node2;

        //链表 1->2->3->4->5->null
        System.out.println(node1);
        //翻转后链表 5->4->3->2->1->null
        Node resultNode = reverseLinkedList(node1);
        System.out.println(resultNode);
    }

    private static Node reverseLinkedList(Node head) {
        Node pre = null;
        Node next = null;
        //null<-1   2->3->null
        //      pre h
        while (head != null) {
            //改变head的next指向，改变前保存
            next = head.next;
            //将head的next指向新节点pre
            head.next = pre;
            //将head指向pre
            pre = head;
            //head 向后一位，继续遍历
            head = next;
        }
        return pre;
    }


}
