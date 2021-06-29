package test;

import linkedlist.ReverseList;

import java.lang.reflect.Array;
import java.util.Arrays;

public class Test {
    public static void main(String[] args) {
        Node1 node1 = new Node1();
        Node2 node2 = new Node2();

        Node1 head = node1;
        System.out.println(head);
    }

    public static class Node1{
        int value = 1;
    }

    public static class Node2{
        int value = 2;
    }
}
