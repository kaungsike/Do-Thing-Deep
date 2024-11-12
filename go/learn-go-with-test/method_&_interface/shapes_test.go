package method

import "testing"

func TestPeremeter(t *testing.T) {
	got := Peremeter (10.0,10.0)

	want := 40.0

	if got != want {
		t.Errorf("got %.2f want 5.2f",got,want)
	}
}