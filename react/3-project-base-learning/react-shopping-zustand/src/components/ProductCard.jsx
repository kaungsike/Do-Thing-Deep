import React from "react";
import Stars from "./Stars";
import useCartStore from "../store/useCartStore";
import { useNavigate } from "react-router";
import toast from "react-hot-toast";

const ProductCard = ({ product }) => {

  const {addCart,carts} = useCartStore();

  const nevigate = useNavigate();

  const handleAdded = (e) => {
    e.stopPropagation();
    toast.success("Item is already added!",)
  }

  const handleAdd = (e) => {
    e.stopPropagation();
    const newCart = {
      id : Date.now(),
      productId : product.id,
      quantity : 1
    }
    addCart(newCart)
    console.log("Added");
  }

  const handleOpenDetail = () => {
    nevigate(`/product-detail/${product.id}`)
  }

  return (
    <div
    onClick={handleOpenDetail}
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

        {carts.find((cart) => cart.productId == product.id) ? (
          <button onClick={handleAdded} className="border px-3 active:scale-95 duration-150 text-white bg-black py-1 border-black rounded">
            Added
          </button>
        ) : (
          <button onClick={handleAdd} className="border px-3 active:scale-95 duration-150 py-1 border-black rounded">
            Add to cart
          </button>
        )}
      </div>
    </div>
  );
};

export default ProductCard;
