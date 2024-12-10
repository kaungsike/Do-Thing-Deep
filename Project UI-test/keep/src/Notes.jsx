import React, { useState } from "react";
import useNoteStore from "./store/useNoteStore";

const Notes = ({ noteBox: { id, title, about } }) => {
  const [noteTitle, setNoteTitle] = useState(title);

  const { notes, editTitle } = useNoteStore();

  const handleTitel = () => {
    setNoteTitle(e.target.value);
  };
  
  const handleEdit = () => {
    editTitle(id,noteTitle)
    console.log(title);
    
  }
  console.log(notes);
  return (
    <div className="border border-cyan-600 p-5 rounded">
      <input
        type="text"
        onChange={(e) => setNoteTitle(e.target.value)}
        className="bg-neutral-100 outline-none"
        value={noteTitle}
      />
      <button onClick={handleEdit}
        type="button"
        className="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 "
      >
        Soft
      </button>
      <p>{about}</p>
    </div>
  );
};

export default Notes;
