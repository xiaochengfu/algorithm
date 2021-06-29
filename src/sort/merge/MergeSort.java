package sort.merge;

import java.util.Arrays;

/**
 * 归并排序
 */
public class MergeSort {

    public static void main(String[] args) {
        int[] arr = new int[]{4,3,2,6,1};
        System.out.println(Arrays.toString(arr));
        mergeSort1(arr);
        System.out.println(Arrays.toString(arr));
    }

    // 递归方法实现
    public static void mergeSort1(int[] arr) {
        if (arr == null || arr.length < 2) {
            return;
        }
        process(arr, 0, arr.length - 1);
    }

    // arr[L...R]范围上，变成有序的
    // L...R    N    T(N) = 2*T(N/2) + O(N)  ->
    public static void process(int[] arr, int L, int R) {
        if (L == R) { // base case
            return;
        }
        System.out.println("process");
        int mid = L + ((R - L) >> 1);
        System.out.printf("L=%d,M=%d,R=%d\n",L,mid,R);
        process(arr, L, mid);
        process(arr, mid + 1, R);
        merge(arr, L, mid, R);
    }

    public static void merge(int[] arr, int L, int M, int R) {
        System.out.printf("merge %s \n",Arrays.toString(arr));
        System.out.printf("L=%d,M=%d,R=%d \n",L,M,R);
        int[] help = new int[R - L + 1];
        int i = 0;
        int p1 = L;
        int p2 = M + 1;
        while (p1 <= M && p2 <= R) {
            help[i++] = arr[p1] <= arr[p2] ? arr[p1++] : arr[p2++];
        }
        // 要么p1越界了，要么p2越界了
        while (p1 <= M) {
            help[i++] = arr[p1++];
        }
        while (p2 <= R) {
            help[i++] = arr[p2++];
        }
        for (i = 0; i < help.length; i++) {
            arr[L + i] = help[i];
        }
        System.out.printf("merged %s\n",Arrays.toString(arr));
    }
}
