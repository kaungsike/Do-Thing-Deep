import React, { useState } from "react";
import TaskContext from "./TaskContext";

const TaskProvider = ({ children }) => {
  const [tasks, setTasks] = useState([
    { id: 1, job: "Complete SAD homework", isDone: false },
    { id: 2, job: "Install php", isDone: true },
    { id: 3, job: "Sleep early", isDone: false },
    { id: 4, job: "Learn react", isDone: false },
  ]);

  const addTask = (newTask) => {
    setTasks([...tasks, newTask]);
  };

  const removeTask = (id) => {
    setTasks(tasks.filter((task) => task.id != id));
  };

  const doneTask = (id) => {
    setTasks(
      tasks.map((task) =>
        task.id == id ? { ...task, isDone: !task.isDone } : task
      )
    );
  };

  return <TaskContext.Provider value={{tasks,addTask,removeTask,doneTask}}>{children}</TaskContext.Provider>;
};

export default TaskProvider;
