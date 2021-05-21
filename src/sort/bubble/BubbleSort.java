package sort.bubble;

import java.util.Arrays;

/**
 * 冒泡排序
 */
public class BubbleSort {
    public static void main(String[] args) {
        int[] arr = new int[]{4, 3, 2, 6, 1};
        System.out.println(Arrays.toString(arr));
        int[] result = bubblingSort(arr);
        System.out.println(Arrays.toString(result));
    }

    private static int[] bubblingSort(int[] array) {
        /*
         * 4,3,2,6,1 (0和1位置比较)4,3 交换位置 3,4,2,6,1
         * 3,4,2,6,1 (1和2位置比较)4,2 交换位置 3,2,4,6,1
         * 3,2,4,6,1 (2和3位置比较)4,6
         * 3,2,4,6,1 (3和4位置比较)6,1 交换位置 3,2,4,1,6 /因为最大的已经放到最后一位了，所有下次循环到n-1的位置结束就可以了
         */
        for (int e = array.length - 1; e > 0; e--) {
            for (int i = 0; i < e; i++) {
                if (array[i] > array[i + 1]) {
                    swap2(array, i, i + 1);
                }
            }
        }
        return array;
    }

    private static void swap(int[] array, int i, int j) {
        int tmp = array[i];
        array[i] = array[j];
        array[j] = tmp;
    }

    //异或运算来进行交换
    private static void swap2(int[] array, int i, int j) {
        array[i] = array[i] ^ array[j];
        array[j] = array[i] ^ array[j];
        array[i] = array[i] ^ array[j];
    }
}
