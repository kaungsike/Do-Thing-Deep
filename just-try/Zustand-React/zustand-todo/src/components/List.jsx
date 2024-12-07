import React from "react";
import useListStore from "../store/useListStore";

const list = ({ list: { id, job, isDone } }) => {
  const { deleteList, checkList } = useListStore();

  const handleDelete = () => {
    deleteList(id);
  };

  const handleChecked = () => {
    checkList(id)
  }

  return (
    <div className="border border-gray-400 rounded flex items-center justify-between p-3">
      <div className="flex items-center gap-3">
        <input onChange={handleChecked} checked={isDone} type="checkbox" name="" id="" />
        <p>{job}</p>
      </div>
      <div>
        <button
          onClick={handleDelete}
          className="text-sm text-red-600 border border-red-500 bg-red-200 px-3 py-1.5 rounded active:scale-90 duration-150"
        >
          Delete
        </button>
      </div>
    </div>
  );
};

export default list;
