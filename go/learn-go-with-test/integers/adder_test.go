package integers

import (
	"fmt"
	"testing"
)
// Add require two integers and return the sum of them
func Add(x, y int) int {
	return x + y
}

func ExampleAdd () {
	sum := Add(3,5)

	fmt.Println(sum)
	// output : 8
}

func TestAdder(t *testing.T) {
	sum := Add(2, 2)
	expect := 4

	if sum != expect {
		t.Errorf("expect '%d' but got '%d'", expect, sum)
	} else {
		fmt.Println("Good job!")
	}
}
