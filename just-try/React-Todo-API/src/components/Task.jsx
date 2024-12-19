import React from "react";

const Task = ({ task: { id, job, isDone }, removeTask , doneTask }) => {
  const handleDelete = () => {
    if (confirm("Are you sure to delete?")) {
      removeTask(id,isDone);
    }
  };

  const handleCheckBox = () => {
    doneTask(id)
  };

  return (
    <div className="border border-black p-2.5 flex rounded items-center justify-between">
      <div className="flex items-center gap-2">
        <input onChange={handleCheckBox} checked={isDone} type="checkbox" />
        <p>{job}</p>
      </div>
      <div>
        <button
          onClick={handleDelete}
          className="border text-sm border-red-300 bg-red-200 px-2 rounded py-1"
        >
          Delete
        </button>
      </div>
    </div>
  );
};

export default Task;
