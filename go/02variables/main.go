package main

import "fmt"

const Coin string= "btc"

func main() {
	var username string = "kaung"
	fmt.Println(username)
	fmt.Printf("Variable is type of : %T \n", username)

	var isLoggedIn bool = false
	fmt.Println(isLoggedIn)
	fmt.Printf("Variable is type of : %T \n", isLoggedIn)

	var smallValue uint8 = 255
	fmt.Println(smallValue)
	fmt.Printf("Variable is type of : %T \n", smallValue)

	// default value and some aliases

	var anotherVariable bool
	fmt.Println(anotherVariable)
	fmt.Printf("variable is type of : %T \n", anotherVariable)

	fmt.Println(Coin)
}
