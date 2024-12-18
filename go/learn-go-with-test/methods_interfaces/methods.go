package methodsinterfaces

import "math"

func Perimeter(width, height float64) float64 {
	return (width + height) * 2
}

type Rectangle struct {
	Width  float64
	Height float64
}

type Circle struct {
	Radius float64
}

type Triangle struct {
	Base float64
	Height float64
}

func (r Rectangle) Area() float64 {
	return r.Height * r.Width
}

func (r Circle) Area() float64 {
	return math.Pi * r.Radius* r.Radius
}

func (t Triangle) Area() float64 {
	return (t.Base * t.Height) *0.5
}