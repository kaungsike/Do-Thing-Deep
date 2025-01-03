import React, { useState } from "react";
import Heading from "./components/Heading";
import CreateTest from "./components/CreateTask";
import TestList from "./components/TaskList";

const App = () => {
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
      tasks.map((task) => task.id==id? {...task, isDone : !task.isDone} : task)
    );
  };

  return (
    <div className="p-10 bg-gray-100 w-[500px] mx-auto mt-[100px] rounded ">
      <Heading />
      <CreateTest addTask={addTask} />
      <TestList doneTask={doneTask} removeTask={removeTask} tasks={tasks} />
    </div>
  );
};

export default App;
