import React, { useState } from "react";
import { create } from "zustand";
import useListStore from "../store/useListStore";

const listCreateForm = () => {

  const [job,setJob] = useState("");

  const {createList} = useListStore();

  const handleAdd = () => {
    const newList = {
      id : Date.now(),
      job : `${job}`,
      isDone : false
    }
    createList(newList)
  }

  return (
    <div className="flex items-center mt-7 mb-5">
      <input
      value={job}
      onChange={(e) => setJob(e.target.value)}
        className="flex-grow border border-gray-400 rounded-l outline-none px-4 py-2.5"
        type="text"
        name=""
        id=""
      />
      <button onClick={handleAdd} className="border border-gray-400 bg-gray-400 text-white px-4 py-2.5 mb-0 active:scale-90 duration-150 rounded-r">
        Add
      </button>
    </div>
  );
};

export default listCreateForm;
