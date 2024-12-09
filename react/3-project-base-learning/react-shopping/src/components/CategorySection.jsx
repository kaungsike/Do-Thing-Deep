import React from "react";
import CategoryButton from "./CategoryButton";
import Container from "./Container";

const CategorySection = () => {
  const title = "Product Categories";

  const categories = [
    "electronics",
    "jewelery",
    "men's clothing",
    "women's clothing",
  ];

  return (
    <div className="w-full">
      {" "}
      <Container>
        <p className="text-2xl mb-5">{title}</p>
        <div className="w-full">
          <CategoryButton catgoryName="all" current={true} />
          {categories.map((category) => (
            <CategoryButton
              key={category}
              current={false}
              catgoryName={category}
            />
          ))}
        </div>{" "}
      </Container>
    </div>
  );
};

export default CategorySection;
