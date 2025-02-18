import React, { useState } from "react";
import useCounterStore from "../store/useCounterStore";

const Counter = () => {
  // const [count,setCount] = useState(0);

  console.log(useCounterStore());

  const {count , reset ,increase ,decrease } = useCounterStore();

  const handleReset = () => {
    reset();
  }

  const handleIncrease = () => {
    increase();
  }

  const handleDecrease = () => {
    decrease();
  }

  return (
    <div className="flex items-center justify-center min-h-screen bg-gray-100">
      <div className="bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 className="text-2xl font-bold mb-4 text-gray-800">Counter</h1>
        <div className="flex items-center justify-center mb-4">
          <button
          
          onClick={handleDecrease}
          className="bg-red-500 text-white px-4 py-2 rounded-l-lg hover:bg-red-600 focus:outline-none">
            -
          </button>
          <div className="w-12 text-xl font-semibold text-gray-800 border-t border-b py-2">
            {count}
          </div>
          <button onClick={handleIncrease} className="bg-green-500 text-white px-4 py-2 rounded-r-lg hover:bg-green-600 focus:outline-none">
            +
          </button>
        </div>
        <button
        onClick={handleReset} 
        className="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">
          Reset
        </button>
      </div>
    </div>
  );
};

export default Counter;
