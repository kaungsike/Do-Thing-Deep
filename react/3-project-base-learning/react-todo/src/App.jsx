import React, { useState } from "react";
import Heading from "./components/Heading";
import CreateTest from "./components/CreateTask";
import TestList from "./components/TaskList";

const App = () => {
  const [tasks, setTasks] = useState([
    "Complete SAD homework",
    "Install php",
    "Sleep early",
    "Learn react",
  ]);

  const addTask = (newTask) => {
    setTasks([...tasks, newTask]);
  };

  const removeTask = (toRemoveTask) => {
    setTasks(tasks.filter((task) => task != toRemoveTask));
  };

  return (
    <div className="p-10 bg-gray-100 w-[500px] mx-auto mt-[100px] rounded ">
      <Heading />
      <CreateTest addTask={addTask} />
      <TestList removeTask={removeTask} tasks={tasks} />
    </div>
  );
};

export default App;
