package main

import (
	"fmt"
)

func main() {
	arr := []int{4, 3, 2, 6, 1}
	fmt.Print(arr)
	result := selectSort(arr)
	fmt.Println(result)
}

func selectSort(arr []int) []int {
	if len(arr) < 2 {
		return arr
	}
	for i := 0; i < len(arr); i++ {
		minIndex := i
		for j := i + 1; j < len(arr); j++ {
			if arr[minIndex] > arr[j] {
				minIndex = j
			}
		}
		swap(arr, i, minIndex)
	}
	return arr
}

func swap(arr []int, i int, j int) {
	tmp := arr[i]
	arr[i] = arr[j]
	arr[j] = tmp
}
