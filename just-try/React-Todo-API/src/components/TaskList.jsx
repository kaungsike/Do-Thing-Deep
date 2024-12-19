import React, { useState } from "react";
import Task from "./Task";

const TaskList = ({ tasks, removeTask, doneTask }) => {
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
          <Task
            doneTask={doneTask}
            removeTask={removeTask}
            key={task.id}
            task={task}
          />
        ))}
      </div>
    </div>
  );
};

export default TaskList;
