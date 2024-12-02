import React, { useState } from "react";

const ShowMyName = () => {
  const [name, setName] = useState("_ _ _");

  return (
    <div className="w-full flex flex-col items-center mt-[200px] gap-5">
      <h1 className="text-5xl">My name is {name}</h1>
      <div className="flex gap-5">
        <button
          onClick={() => setName("Mg")}
          className="border px-6 py-2 rounded active:scale-95 duration-150   border-black"
        >
          Mg
        </button>
        <button
          onClick={() => setName(name + " Kaung")}
          className="border px-6 py-2 rounded active:scale-95 duration-150   border-black"
        >
          Kaung
        </button>
        <button
          onClick={() => setName(name + " Sike")}
          className="border px-6 py-2 rounded active:scale-95 duration-150   border-black"
        >
          Sike
        </button>
      </div>
      <button
        onClick={() => setName("")}
        className="border px-6 py-2 rounded active:scale-95 duration-150   border-black"
      >
        Clear
      </button>
    </div>
  );
};

export default ShowMyName;
