package sort.insert;

import java.util.Arrays;

/**
 * 插入排序
 */
public class InsertSort {
    public static void main(String[] args) {
        int[] array = new int[]{4, 3, 2, 6, 1};
        System.out.println(Arrays.toString(array));
        int[] result = insertSort(array);
        System.out.println(Arrays.toString(result));
    }

    public static int[] insertSort(int[] arr) {
        if (arr == null || arr.length < 2) {
            return arr;
        }
        /*
         * 4,3,2,6,1 假设第0位已是排好序的，从第1位3开始
         * 和第0位比较，3比4小，交换位置，前面没有了，终止 3,4,2,6,1
         * 再次来到第2位，和第1位比较，2比4小，交换位置，和第0位比较，2比3小，交换位置 2,3,4,6,1
         */
        for (int i = 0; i < arr.length - 1; i++) {
            for (int j = i + 1; j > 0; j--) {
                if (arr[j] < arr[j - 1]) {
                    swap(arr, j, j - 1);
                }
            }
        }
        return arr;
    }

    public static void swap(int[] arr, int i, int j) {
        arr[i] = arr[i] ^ arr[j];
        arr[j] = arr[i] ^ arr[j];
        arr[i] = arr[i] ^ arr[j];
    }
}



