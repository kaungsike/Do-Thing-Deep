import React from "react";
import Stars from "./Stars";

const ProductCard = ({ product }) => {

  return (
    <div className="border items-start border-black p-3 rounded flex flex-col">
      <img className="h-[130px]" src={product.image} alt="" />

      <hr className="border-black mt-3 mb-2 w-full" />

      <p className="line-clamp-2 mb-3">{product.title}</p>
      <div className="flex mt-auto">
            <Stars ket={product.id} rate={product.rating.rate.toFixed(0)}/>
      </div>
      <div className="items-center w-full mt-auto flex justify-between">
        <p>$ {product.price}</p>

        <button className="border px-3 active:scale-95 duration-150 py-1 border-black rounded">
          Add to cart
        </button>
      </div>
    </div>
  );
};

export default ProductCard;
