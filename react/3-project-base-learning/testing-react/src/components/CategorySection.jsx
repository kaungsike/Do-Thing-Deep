import React from "react";
import CategoryButton from "./CategoryButton";

const CategorySection = () => {
  const title = "Product Categories";

  const categories = [
    "electronics",
    "jewelery",
    "men's clothing",
    "women's clothing",
  ];

  return (
    <div>
      <p className="text-2xl mb-5">{title}</p>
      <div>
        <CategoryButton catgoryName='all' current={true}/>
        {categories.map((category) => (
            <CategoryButton key={category} current={false} catgoryName={category} />
        ))}
      </div>
    </div>
  );
};

export default CategorySection;
