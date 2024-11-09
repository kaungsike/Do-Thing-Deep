package main

import "testing"

func TestHello(t *testing.T) {
	t.Run("syaing hello to people", func(t *testing.T) {
		got := Hello("s","")
		want := "Hello, s"

		assertCorrectMessage(t, got, want)
	})

	t.Run("say 'Hello, World' when an empty string is supplied", func(t *testing.T) {
		got := Hello("","")
		want := "Hello, World"

		assertCorrectMessage(t, got, want)
	})

	t.Run("in Spanish", func(t *testing.T) {
		got := Hello("Elodie", "Spanish")
		want := "Hola, Elodie"
		assertCorrectMessage(t, got, want)
	})

	t.Run("in Myanmar", func(t *testing.T) {
		got := Hello("Ks", "Myanmar")
		want := "Minkalrbr, Ks"
		assertCorrectMessage(t, got, want)
	})
}


func assertCorrectMessage(t testing.TB, got, want string) {
	t.Helper()
	if got != want {
		t.Errorf("Got %q and want %q", got, want)
	}
}
