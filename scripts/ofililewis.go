package main

import "fmt"


func main() {
	var person [4]string
	person[0] = "Lewis Ofili"
	person[1] = "HNG-00427"
	person[2] = "ofililewis@gmail.com"
	person[3] = "GO"

	fmt.Println("Hello World, this is " + person[0] + " with HNGi7 ID " + person[1] + " and email " + person[2] + " using " + person[3] + " for stage 2 task")

}
