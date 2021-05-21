package sort.select;

import java.util.Arrays;

/**
 * 选择排序
 */
public class SelectSort {

    public static void main(String[] args) {
        int[] arr = new int[]{4, 3, 2, 6, 1};
        System.out.println(Arrays.toString(arr));
        int[] result = sort(arr);
        System.out.println(Arrays.toString(result));
    }

    public static int[] sort(int[] arr) {
        /*
         * [4,3,2,6,1]
         * 4,[3,2,6,1] =>1,3,2,6,4  比较第一位index[0]后
         * 1,3,[2,6,4] => 1,2,3,6,4 比较第一位index[1]后
         * 1,2,3 [6,4] => 1,2,3,4,6 比较第一位index[2]后
         * 1,2,3,4 [6] => 1,2,3,4,6
         */
        if (arr == null || arr.length < 2) {
            return arr;
        }
        for (int i = 0; i < arr.length; i++) {
            int minIndex = i;
            for (int j = i + 1; j < arr.length; j++) {
                if (arr[j] < arr[minIndex]) {
                    minIndex = j;
                }
            }
            //交互位置
            swap(arr, i, minIndex);
        }
        return arr;
    }

    //交换位置
    public static void swap(int[] arr, int i, int j) {
        int tmp = arr[i];
        arr[i] = arr[j];
        arr[j] = tmp;
    }
}
