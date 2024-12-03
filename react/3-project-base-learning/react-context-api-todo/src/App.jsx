import React, { useState } from "react";
import Heading from "./components/Heading";
import CreateTest from "./components/CreateTask";
import TestList from "./components/TaskList";
import TaskProvider from "./context/TaskProvider";

const App = () => {
  return (
    <TaskProvider>
      <div className="p-10 bg-gray-100 w-[500px] mx-auto mt-[100px] rounded ">
        <Heading />
        <CreateTest />
        <TestList />
      </div>
    </TaskProvider>
  );
};

export default App;
