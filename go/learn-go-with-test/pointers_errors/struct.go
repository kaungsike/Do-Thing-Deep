package pointerserrors

type Wallet struct {
	// balance is private variable 
	balance int
}

func (w Wallet) Deposite(ammount int) {
	w.balance += ammount
}

func (w Wallet) Balance() int {
	return w.balance
}