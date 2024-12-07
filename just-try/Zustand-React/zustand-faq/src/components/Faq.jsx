import React from "react";
import useFaq from "../store/useFaq";

const Faq = ({ faq: { id, question, answer, isOpen } }) => {
  const { openFaq } = useFaq();

  const handelFaq = () => {
    openFaq(id);
  };

  return (
    <div>
      <button
        onClick={handelFaq}
        className="border active:scale-95 duration-200 flex items-center justify-between text-start w-full border-gray-400 p-3 rounded "
      >
        <p>{question}</p>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          strokeWidth={1.5}
          stroke="currentColor"
          className={`size-4 duration-200 ${isOpen && 'rotate-180'}`}
        >
          <path
            strokeLinecap="round"
            strokeLinejoin="round"
            d="m4.5 15.75 7.5-7.5 7.5 7.5"
          />
        </svg>
      </button>
      <p
        className={`border border-gray-400 p-3 rounded bg-gray-300 ${
          !isOpen && "hidden"
        }`}
      >
        {answer}
      </p>
    </div>
  );
};

export default Faq;
