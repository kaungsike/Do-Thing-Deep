import React from "react";

const CategoryButton = ({ catgoryName, current }) => {
  return (
    <button
      className={`border xl:mb-0 mb-2 active:scale-95 duration-150 text-nowrap border-black px-6 py-2 mr-3 rounded ${
        current && "bg-black text-white"
      }`}
    >
      {catgoryName}
    </button>
  );
};

export default CategoryButton;
