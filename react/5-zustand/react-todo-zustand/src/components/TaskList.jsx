import React, { useContext, useState } from "react";
import Task from "./Task";
import useTaskStore from "../store/useTaskStore";
// import TaskContext from "../context/TaskContext";

const TaskList = () => {
  // const {tasks} = useContext(TaskContext);

  const {tasks} = useTaskStore();

  // console.log(tasks);

  return (
    <div>
      <div className="mb-5 flex items-center justify-between">
        <p className="text-lg">Task Lists</p>
        <p className="text-lg">
          ( Done {tasks.filter((task) => task.isDone).length} / Total{" "}
          {tasks.length} )
        </p>
      </div>
      <div className="flex flex-col gap-2">
        {tasks.map((task) => (
          <Task key={task.id} task={task} />
        ))}
      </div>
    </div>
  );
};

export default TaskList;
