package methodsinterfaces

import "testing"

func TestPerimeter(t *testing.T) {
	r := Rectangle{10.0, 10.0}
	got := Perimeter(r)
	want := 40.0

	if got != want {
		t.Errorf("got %.2f want %.2f", got, want)
	}
}

func TestArea (t *testing.T) {

	checkarea := func (t testing.TB,shape Shape,want float64)  {
		t.Helper()
		got := shape.Area()

		if got != want {
			t.Errorf("got %g,want %g",got ,want)
		}
	}

	t.Run("rectangle" ,func(t *testing.T) {
		r := Rectangle{12.0,6.0}
		checkarea(t,r,72.0)
	})

	t.Run("circle",func (t *testing.T) {
		c := Circle{10}
		checkarea(t,c,314.1592653589793)
	})

}
