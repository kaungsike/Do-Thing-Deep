import { create } from "zustand";

const useCartStore = create((set) => ({
  carts: [
    {
      id: 1,
      productId: 2,
      quantity: 3,
    },
    {
      id: 2,
      productId: 7,
      quantity: 1,
    },
    {
      id: 3,
      productId: 5,
      quantity: 1,
    },
  ],
  increaseQuantity: (id) =>
    set((state) => ({
      carts: state.carts.map((cart) =>
        cart.id === id ? { ...cart, quantity: cart.quantity + 1 } : cart
      ),
    })),
  decreaseQuantity: (id) =>
    set((state) => ({
      carts: state.carts.map((cart) =>
        cart.id === id ? { ...cart, quantity: cart.quantity - 1 } : cart
      ),
    })),
  removeCart: (id) =>
    set((state) => ({
      carts: state.carts.filter((cart) => cart.id !== id),
    })),
  addCart: (newCart) =>
    set((state) => ({
      carts: [...state.carts, newCart],
    })),
}));

export default useCartStore;
