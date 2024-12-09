import React from "react";
import Cart from "./Cart";
import { Link } from "react-router";
import carts from "../data/carts";

const CartSection = () => {


  let total = 0;

  return (
    <section className="flex-grow flex flex-col min-h-[700px]">
      <div>
        {carts.map((cart) => {
          total += cart.cost;
          return <Cart key={cart.id} cart={cart} />;
        })}
      </div>

      <div className="border-t border-t-black p-5 mt-auto flex flex-col items-end gap-5">
        <div className="flex gap-10">
          <div className="flex flex-col items-center">
            <p className="font-bold text-lg">Total</p>
            <p>$ {total}</p>
          </div>
          <div className="flex flex-col items-center">
            <p className="font-bold text-lg">Tax ( 2% )</p>
            <p>$ {total}</p>
          </div>
          <div className="flex flex-col items-center">
            <p className="font-bold text-lg">Cost Total</p>
            <p className="font-bold text-2xl">$ {total}</p>
          </div>
        </div>
        <Link className="border border-black rounded px-6 py-2 active:scale-95 duration-150">Order Now</Link>
      </div>
    </section>
  );
};

export default CartSection;
