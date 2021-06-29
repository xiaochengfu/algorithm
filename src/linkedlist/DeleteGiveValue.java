package linkedlist;

/**
 * 链表翻转
 */
public class DeleteGiveValue {

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
        Node node0 = new Node(3);
        Node node1 = new Node(1);
        Node node2 = new Node(2);
        Node node3 = new Node(3);
        Node node4 = new Node(4);
        Node node5 = new Node(5);

        node4.next = node5;
        node3.next = node4;
        node2.next = node3;
        node1.next = node2;
        node0.next = node1;

        //链表 3 1->2->3->4->5->null
        //      h
        System.out.println(node0);
        //删除链表中给定的值,例如3，删除后 1->2->4->5->null

        Node resultNode = removeValue(node0, 3);
        System.out.println(resultNode);
    }

    public static Node removeValue(Node head, int num) {
        while (head != null) {
            if (head.value != num) {
                break;
            }
            head = head.next;
        }
        //链表 3 1->2->3->4->5->null
        //               c
        //               p
        // head来到 第一个不需要删的位置
        Node pre = head;
        Node cur = head;
        //
        while (cur != null) {
            if (cur.value == num) {
                pre.next = cur.next;
            } else {
                pre = cur;
            }
            cur = cur.next;
        }
        return head;
    }

}
