package main

import (
	"reflect"
	"testing"
)

func TestSum(t *testing.T) {

	checkMessage := func(t testing.TB, got, want []int) {
		t.Helper()
		if !reflect.DeepEqual(got, want) {
			t.Errorf("got %v, want %v", got, want)
		}
	}

	// t.Run("collection of 5 numbers", func(t *testing.T) {
	// 	numbers := []int{1, 2, 3, 4, 5}

	// 	got := Sum(numbers)
	// 	want := 15

	// 	checkMessage(t, got, want)
	// })

	// t.Run("collection of any size", func(t *testing.T) {
	// 	numbers := []int{1, 2, 3}

	// 	got := Sum([]int(numbers))
	// 	want := 6

	// 	checkMessage(t, got, want)
	// })

	t.Run("safely sum empty slices", func(t *testing.T) {
		got := SumAllTails([]int{}, []int{3, 4, 5})

		want := []int{0, 9}

		checkMessage(t, got, want)
	})
}

func TestSumAllTails(t *testing.T) {

	got := SumAllTails([]int{1, 2}, []int{0, 9})
	want := []int{2, 9}

	if !reflect.DeepEqual(got, want) {
		t.Errorf("got %v want %v", got, want)
	}
}
