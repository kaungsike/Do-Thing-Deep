package main

import "fmt"
const spanish = "Spanish"
const myanmar = "Myanmar"
const englishHelloPrefix = "Hello, "
const spanishHelloPrefix = "Hola, "
const myanmarhHelloPrefix = "Minkalrbr, "


func Hello(name,language string) string {
	if name == "" {
		name = "World"
	}
	if language == spanish {
		return spanishHelloPrefix + name
	}
	if language == myanmar {
		return myanmarhHelloPrefix + name
	}
	return englishHelloPrefix + name
}

func main() {
	fmt.Println(Hello("world",""))
}
