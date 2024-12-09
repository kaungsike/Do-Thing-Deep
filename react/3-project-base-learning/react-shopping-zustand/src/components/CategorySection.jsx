import React from "react";
import CategoryButton from "./CategoryButton";
import Container from "./Container";
import useCategoryStore from "../store/useCategoryStore";

const CategorySection = () => {
  const title = "Product Categories";

  const { categories } = useCategoryStore();

  console.log(categories);
  return (
    <div className="w-full">
      <Container>
        <p className="text-2xl mb-5">{title}</p>
        <div className="w-full">
          {categories.map((category) => (
            <CategoryButton key={category.id} category={category} />
          ))}
        </div>
      </Container>
    </div>
  );
};

export default CategorySection;
