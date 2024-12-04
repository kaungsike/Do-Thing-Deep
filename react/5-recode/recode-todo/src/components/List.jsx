import React, { useContext } from "react";
import Context from "../context/Context";

const List = ({ note: { id, job, isDone } }) => {
  const { deleteNotes ,checkNotes} = useContext(Context);

  const handleDelete = () => {
    if (confirm("Are you sure you want to delete?")) {
      deleteNotes(id);
    }
  };

  const handleChecked = () => {
    checkNotes(id)
  }


  return (
    <div className="border border-black flex items-center justify-between rounded w-full px-4 py-2">
      <div className="flex items-center gap-2">
        <input onChange={handleChecked} checked={isDone} type="checkbox" />
        <p>{job}</p>
      </div>
      <button
        onClick={handleDelete}
        className="border active:scale-95 duration-150 text-sm text-red-600 bg-red-200 border-red-400 px-2 py-1 rounded"
      >
        Delete
      </button>
    </div>
  );
};

export default List;
