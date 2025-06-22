package main


import "fmt"
func add(x, y int) int {
	return x + y
}

func mul(x, y int) int {
	return x * y
}

// This function accepts another function as an argument!
func aggregate(a, b, c int, arithmetic func(int, int) int) int {
	firstResult := arithmetic(a, b)
	secondResult := arithmetic(firstResult, c)
	return secondResult
}


func main() {
	sum := aggregate(2, 3, 4, add)       // 2 + 3 = 5, then 5 + 4 = 9
	product := aggregate(2, 3, 4, mul)   // 2 * 3 = 6, then 6 * 4 = 24

	fmt.Println("Sum:", sum)         // Output: Sum: 9
	fmt.Println("Product:", product) // Output: Product: 24
}
