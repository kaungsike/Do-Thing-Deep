import React, { useContext, useState } from "react";
import Context from "../context/Context";

const ListCreateForm = () => {
  const [input, setInput] = useState("");

  const { addNotes,deleteNotes } = useContext(Context);

  const handleAdd = () => {
    const newNote = {
      id: Date.now(),
      job: input,
      isDone: false,
    };
    addNotes(newNote);
    setInput("");
  };

  return (
    <div className="flex items-center mt-7">
      <input
        value={input}
        onChange={(e) => setInput(e.target.value)}
        className="border flex-grow px-4 py-2 text-lg outline-none border-black rounded-l"
        type="text"
      />
      <button
        onClick={handleAdd}
        className="border text-white bg-black active:scale-95 duration-150 border-black border-l-0 rounded-r px-4 py-2 h-[46px]"
      >
        Add
      </button>
    </div>
  );
};

export default ListCreateForm;
