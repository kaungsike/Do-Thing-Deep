import React, { useState } from "react";

const Faq = ({ question : {id,question,answer,isOpen},handleOpen }) => {

  const handleToggle = () => {
    handleOpen(id)
  };

  return (
    <div className="w-full">
      <p
        onClick={handleToggle}
        className="border flex justify-between items-center select-none border-gray-400 p-3 active:scale-[98%] duration-200"
      >
        {question}{" "}
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          strokeWidth={1.5}
          stroke="currentColor"
          className={`size-4 duration-300 ${isOpen && 'rotate-180'}`}
        >
          <path
            strokeLinecap="round"
            strokeLinejoin="round"
            d="m4.5 15.75 7.5-7.5 7.5 7.5"
          />
        </svg>
      </p>
      <p
        className={`border scale-[99%] bg-gray-200 duration-150 border-gray-400 p-3 ${
          !isOpen && "hidden"
        }`}
      >
        {answer}
      </p>
    </div>
  );
};

export default Faq;
