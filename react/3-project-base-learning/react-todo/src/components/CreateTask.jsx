import React, { useState } from "react";

const CreateTask = ({addTask}) => {


  const [tsak, setTask] = useState("");

  const handleAdd = () => {
    addTask(tsak);
    setTask("")
  }



  return (
    <div className="felx w-full mb-4">
      <input
        value={tsak}
        onChange={(e) => setTask(e.target.value)}
        className="border font-bold w-[84.4%] border-black  rounded-l outline-none px-4 bg-white py-2"
        type="text"
      />
      <button onClick={handleAdd} className="border active:scale-95 duration-150 border-black px-4 py-2 rounded-r">
        Add
      </button>
    </div>
  );
};

export default CreateTask;
