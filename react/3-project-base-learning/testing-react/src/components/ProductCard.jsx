import React from "react";
import Stars from "./Stars";
import { Link } from "react-router";
import carts from "../data/carts";

const ProductCard = ({ product }) => {
  return (
    <Link
      to={`/product-detail/${product.id}`}
      className="border items-start border-black p-3 rounded flex flex-col"
    >
      <img className="h-[130px]" src={product.image} alt="" />

      <hr className="border-black mt-3 mb-2 w-full" />

      <p className="line-clamp-2 mb-3">{product.title}</p>
      <div className="flex mt-auto">
        <Stars id={product.id} rate={product.rating.rate.toFixed(0)} />
      </div>
      <div className="items-center w-full mt-auto flex justify-between">
        <p>$ {product.price}</p>

        {carts.find((cart) => cart.product.id == product.id) ? (
          <button className="border px-3 active:scale-95 duration-150 text-white bg-black py-1 border-black rounded">
            Added
          </button>
        ) : (
          <button className="border px-3 active:scale-95 duration-150 py-1 border-black rounded">
            Add to cart
          </button>
        )}
      </div>
    </Link>
  );
};

export default ProductCard;
