package interation

import "testing"

func Repeat(character string) string {
	var repeated string

	for i := 0; i < 4; i++ {
		repeated += character
	}

	return repeated
}

func BenchmarkRepeat(b *testing.B) {
	for i := 0; i < b.N; i++ {
		Repeat("a")
	}
}

func TestRepeat(t *testing.T) {
	repeated := Repeat("a")
	expected := "aaaa"

	if repeated != expected {
		t.Errorf("expect %q but got %q", expected, repeated)
	}
}
