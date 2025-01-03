import React from "react";
import { useParams } from "react-router";
import Container from "../components/Container";
import Stars from "../components/Stars";
import Breadcrumb from "../components/Breadcrumb";
import useProductStore from "../store/useProductStore";
import useCartStore from "../store/useCartStore";

const ProductDetail = () => {
  const { productSlug } = useParams();

  console.log(productSlug);

  const { products } = useProductStore();

  const currentProduct = products.find(
    (product) => product.slug == productSlug
  );

  const { carts } = useCartStore();

  return (
    <Container>
      <Breadcrumb currentPageTitle={"Product Details"} />
      <div className="border border-black rounded gap-7 p-10 flex">
        <img src={currentProduct.image} className="w-[350px]" alt="" />
        <div className="h-[[350px] flex-grow flex flex-col">
          <h3 className="text-2xl font-bold mb-5">{currentProduct.title}</h3>
          <p className=" bg-gray-300 rounded mb-5 px-6 py-2 font-bold ">
            {currentProduct.category}
          </p>
          <p>{currentProduct.description}</p>
          <div className="flex mt-5 gap-2">
            <Stars
              key={currentProduct.id}
              id={currentProduct.id}
              rate={currentProduct.rating.rate.toFixed(0)}
            />
          </div>
          <div className="flex w-full items-center justify-between mt-auto">
            <p className="font-bold text-xl mt-auto">
              $ {currentProduct.price}
            </p>
            {carts.find((cart) => cart.productId == currentProduct.id) ? (
              <button className="border border-black px-4 py-1 rounded active:scale-95 duration-150 bg-black text-white">
                Added
              </button>
            ) : (
              <button className="border border-black px-4 py-1 rounded active:scale-95 duration-150">
                Add to cart
              </button>
            )}
          </div>
        </div>
      </div>
    </Container>
  );
};

export default ProductDetail;
