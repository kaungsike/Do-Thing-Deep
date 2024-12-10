import React from "react";
import ProductCard from "./ProductCard";
import Container from "./Container";
import useProductStore from "../store/useProductStore";
import useCategoryStore from "../store/useCategoryStore";

const ProductSection = () => {
  const { products } = useProductStore();

  const { categories } = useCategoryStore();

  const currentCategory = categories.find((el) => el.isActive === true);

  return (
    <Container>
      <p className="underline mt-4 mb-5">Avaliable Products</p>
      <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-5 gap-10">
        {products
          .filter(
            (product) =>
              currentCategory.name == "all" ||
              product.category === currentCategory.name
          )
          .map((product) => (
            <ProductCard key={product.id} product={product} />
          ))}
      </div>
    </Container>
  );
};

export default ProductSection;
