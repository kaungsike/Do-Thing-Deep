import React, { useState } from "react";
import { tailChase } from "ldrs";

const CreateTask = ({ addTask ,sendLoading }) => {
  const [task, setTask] = useState("");

  const handleAdd = () => {
    const newTask = {
      id: Date.now(),
      job: task,
      isDone: false,
    };

    addTask(newTask);
    setTask("");
  };

  tailChase.register();

  return (
    <div className="flex w-full items-center h-[42px] justify-between">
      <input
        value={task}
        onChange={(e) => setTask(e.target.value)}
        className="border font-bold flex-grow border-black  rounded-l outline-none px-4 bg-white py-2"
        type="text"
      />

      <button
        onClick={handleAdd}
        className="border active:scale-95 flex items-center justify-center duration-150 h-[42px] border-black px-4 rounded-r"
      >
        {
          sendLoading ? (<l-tail-chase className="" size="20" speed="1.75" color="gray"></l-tail-chase>) : "Save" 
        }
      </button>
    </div>
  );
};

export default CreateTask;
