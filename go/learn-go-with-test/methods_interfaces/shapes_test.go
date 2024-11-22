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
		shape Shape
		want float64
	} {
		{Rectangle{10,20},200.0},
		{Circle{10},314.1592653589793},
	}

	for _,area := range areaTests {
		got := area.shape.Area()
		
		if got != area.want {
			t.Errorf("got %g, want %g",got,area.want)
		}
	}

}
