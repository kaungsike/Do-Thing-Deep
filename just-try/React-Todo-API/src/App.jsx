import React, { useEffect, useState } from "react";
import Heading from "./components/Heading";
import CreateTest from "./components/CreateTask";
import TestList from "./components/TaskList";
import TaskLoading from "./components/TaskLoading";

const App = () => {
  const [tasks, setTasks] = useState([]);
  const [tasksLoading, SetTasksLoading] = useState(true);
  const [sendLoading, setsendLoading] = useState(false);

  const addTask = async (newTask) => {
    setsendLoading(true);
    const res = await fetch("http://localhost:5000/tasks", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(newTask),
    });

    const data = await res.json();
    setTasks([...tasks, data]);
    setsendLoading(false);
  };

  const removeTask = async (id) => {
    const res = await fetch(`http://localhost:5000/tasks/${id}`, {
      method: "DELETE",
      headers: {
        "Content-Type": "application/json",
      },
    });

    setTasks(tasks.filter((task) => task.id != id));
  };

  const doneTask = async (id,isDone) => {

    const res = await fetch(`http://localhost:5000/tasks/${id}`, {
      method: "PATCH",
      headers: {
        "Content-Type": "application/json",
      },
      body : JSON.stringify({isDone : !isDone})
    })

    const data = await res.json();

    setTasks(
      tasks.map((task) =>
        task.id == id ? data : task
      )
    );
  };

  const fetchApi = async () => {
    const res = await fetch("http://localhost:5000/tasks");
    const data = await res.json();
    setTasks(data);
    SetTasksLoading(false);
    return;
  };

  useEffect(() => {
    fetchApi();
  }, []);

  return (
    <div className="p-10 bg-gray-100 w-[500px] mx-auto mt-[100px] rounded ">
      <Heading />
      <div>
        <CreateTest sendLoading={sendLoading} addTask={addTask} />
      </div>
      <TestList doneTask={doneTask} removeTask={removeTask} tasks={tasks} />
      {tasksLoading && (
        <div className="animate-pulse flex flex-col gap-2">
          <TaskLoading />
          <TaskLoading />
          <TaskLoading />
          <TaskLoading />
        </div>
      )}
    </div>
  );
};

export default App;
