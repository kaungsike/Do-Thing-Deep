import React from "react";
import Cart from "./Cart";
import { Link } from "react-router";
import useCartStore from "../store/useCartStore";
import useProductStore from "../store/useProductStore";

const CartSection = () => {
  const { carts } = useCartStore();

  const { products } = useProductStore();

  const total = carts.reduce((pv, cv) => {
    console.log(cv);
    const product = products.find(({ id }) => id == cv.productId);
    const cost = cv.quantity * product.price;
    return pv + cost;
  }, 0);

  const tax = total * 0.02;

  const netTotal = total + tax;

  return (
    <section className="flex-grow flex flex-col min-h-[700px]">
      <div>
        {carts.length == 0 && (
          <div className="w-full flex flex-col items-center justify-center">
            <img className="h-[450px]" src="./src/empty.svg" alt="" />
            <p className="font-bold">There is no product in your cart</p>
          </div>
        )}

        {carts.map((cart) => {
          return <Cart key={cart.id} cart={cart} />;
        })}
      </div>

      <div className="border-t border-t-black p-5 mt-auto flex flex-col items-end gap-5">
        <div className="flex gap-10">
          <div className="flex flex-col items-center">
            <p className="font-bold text-lg">Total</p>
            <p>$ {total.toFixed(3)}</p>
          </div>
          <div className="flex flex-col items-center">
            <p className="font-bold text-lg">Tax ( 2% )</p>
            <p>$ {tax.toFixed(3)}</p>
          </div>
          <div className="flex flex-col items-center">
            <p className="font-bold text-lg">Cost Total</p>
            <p className="font-bold text-2xl">$ {netTotal.toFixed(3)}</p>
          </div>
        </div>
        <Link className="border border-black rounded px-6 py-2 active:scale-95 duration-150">
          Order Now
        </Link>
      </div>
    </section>
  );
};

export default CartSection;
