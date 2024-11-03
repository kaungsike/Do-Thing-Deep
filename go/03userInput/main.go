package main

import (
	"bufio"
	"fmt"
	"os"
)

func main() {
	welcome := "Welcome to user input"
	fmt.Println(welcome)

	reader := bufio.NewReader(os.Stdin)
	fmt.Println("Enter the rating for our pizza : ")

	input, _ := reader.ReadString('\n')
	fmt.Println("Thnak for reading, ",input)
	fmt.Printf("Type of this rating is %T, ",input)
}
