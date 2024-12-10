import React from "react";
import Notes from "./Notes";
import useNoteStore from "./store/useNoteStore";

const App = () => {

  const {notes} = useNoteStore();

  return (
    <div className="min-h-screen bg-neutral-100">
      <div className="w-full h-[70px] justify-between bg-blue-800 flex items-center px-5 rounded-b-3xl">
        <h1 className="text-2xl font-bold text-neutral-100">Your Notes</h1>
        <div className="flex items-center gap-3">
          <p className="text-neutral-100">Add New</p>
          <button className="active:scale-90 duration-150">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              strokeWidth={1.5}
              stroke="currentColor"
              className="size-6 fill-neutral-100 stroke-neutral-100"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M12 4.5v15m7.5-7.5h-15"
              />
            </svg>
          </button>
        </div>
      </div>
      <div className="grid grid-cols-2 gap-5 p-5 bg-neutral-100">
        {notes.map((noteBox) => (
          <Notes key={noteBox.id} noteBox={noteBox} />
        ))}
      </div>
    </div>
  );
};

export default App;
