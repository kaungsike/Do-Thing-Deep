package main

import (
	"testing"
)

func TestSum(t *testing.T) {
	t.Run("collection of 5 numbers", func(t *testing.T) {
		numbers := [5]int{1, 2, 3, 4, 5}

		sum := Sum(numbers)
		want := 15

		if sum != want {
			t.Errorf("got %d but want %d, source %v", sum, want, numbers)
		}
	})

	// t.Run("collection of any size", func(t *testing.T) {
	// 	numbers := []int{1, 2, 3}

	// 	got := Sum([5]int(numbers))
	// 	want := 6

	// 	if got != want {
	// 		t.Errorf("got %d but want %d, source %v", got, want, numbers)
	// 	}
	// })
}
