import React from "react";

const TaskLoading = () => {
  return (
    <div className="border border-gray-300 p-2.5 flex rounded items-center justify-between">
      <div className="flex items-center gap-2">
        <div className="w-[15px] h-[15px] bg-gray-300 rounded"></div>
        <div className="w-[185px] h-[24px] bg-gray-300 rounded"></div>
      </div>
      <div>
        <div className="border h-[30px] w-[58px] text-sm  bg-gray-300 px-2 rounded py-1"></div>
      </div>
    </div>
  );
};

export default TaskLoading;
