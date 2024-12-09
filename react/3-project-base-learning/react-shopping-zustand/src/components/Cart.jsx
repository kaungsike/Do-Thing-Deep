import React from "react";
import useProductStore from "../store/useProductStore";
import useCartStore from "../store/useCartStore";

const Cart = ({ cart: { id, productId, quantity } }) => {
  const { products } = useProductStore();

  const { increaseQuantity, decreaseQuantity, removeCart } = useCartStore();

  const product = products.find((product) => product.id == productId);

  const cost = quantity * product.price;

  const handleIncreasement = () => {
    increaseQuantity(id);
  };

  const handleDecreasement = () => {
    if (quantity > 1) {
      decreaseQuantity(id);
    } else {
      confirm("Are you sure you want to remove this item?") && removeCart(id);
    }
  };

  return (
    <div className="border rounded p-5 grid grid-cols-6 mb-2">
      <div className="col-span-3 flex gap-4">
        <img src={product.image} className="h-[70px]" alt="" />
        <div>
          <p className="font-bold text-lg">{product.title}</p>
          <p>$ {product.price}</p>
        </div>
      </div>
      <div className="col-span-2 flex flex-col items-center">
        <p className="font-bold">Quantity</p>
        <div className="flex items-center gap-2 mt-3">
          <button
            onClick={handleIncreasement}
            className="active:scale-90 duration-150"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              strokeWidth={1.5}
              stroke="currentColor"
              className="size-6"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
              />
            </svg>
          </button>
          <span>{quantity}</span>
          <button
            onClick={handleDecreasement}
            className="active:scale-90 duration-150"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              strokeWidth={1.5}
              stroke="currentColor"
              className="size-6"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
              />
            </svg>
          </button>
        </div>
      </div>
      <div className="col-span-1 flex flex-col items-center">
        <p className="font-bold">Cost</p>
        <p className="mt-3">$ {cost}</p>
      </div>
    </div>
  );
};

export default Cart;
