package methodsinterfaces

import "testing"

func TestPerimeter(t *testing.T) {
	got := Perimeter(10.0, 10.0)
	want := 40.0

	if got != want {
		t.Errorf("got %.2f, want %2f", got, want)
	}
}

func TestArea(t *testing.T) {

	areaTests := []struct {
		name string
		shape Shape
		want float64
	} {
		{name :"Rectangle",shape:Rectangle{10,20},want:200.0},
		{name : "Circle",shape:Circle{10},want:314.1592653589793},
		{name : "Triangle",shape :Triangle{12,6},want :36.0},
	}

	for _,area := range areaTests {
		t.Run(area.name,func(t *testing.T){
			got := area.shape.Area()
			
			if got != area.want {
				t.Errorf("%#v got %g want %g",area.shape,got,area.want)
			}
		})
	}

}
