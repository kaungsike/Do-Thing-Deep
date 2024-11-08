package main

import (
	"flag"
	"fmt"
	"os"
)

func main() {
	csvFilename := flag.String("csv", "problem.csv", "a csv file in the format of 'question,answer' ")

	flag.Parse()
	file, err := os.Open(*csvFilename)

	if err != nil {
		exit(fmt.Sprintf("Fild to open the CSV fiel :%s\n", *csvFilename))
	}

	_ = file
}

func exit (msg string){
	fmt.Println(msg)
	os.Exit(1)
}