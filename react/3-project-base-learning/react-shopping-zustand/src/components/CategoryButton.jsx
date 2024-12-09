import React from "react";
import useCategoryStore from "../store/useCategoryStore";

const CategoryButton = ({category : {id,name,isActive}}) => {

  const { activeCategory } = useCategoryStore();

  const handleClick = () => {
    activeCategory(id)
  }

  console.log(name);
  return (
    <button onClick={handleClick}
      className={`border xl:mb-0 mb-2 active:scale-95 duration-150 text-nowrap border-black px-6 py-2 mr-3 rounded ${isActive && 'bg-black text-white'}`}
    >
      {name}
    </button>
  );
};

export default CategoryButton;
