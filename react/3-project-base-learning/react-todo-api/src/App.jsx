import React, { useEffect, useState } from "react";
import Heading from "./components/Heading";
import CreateTest from "./components/CreateTask";
import TestList from "./components/TaskList";

const App = () => {
  const [tasks, setTasks] = useState([]);

  const [taskLoading, setTaskLoading] = useState(true);

  const [sending, setSending] = useState(false);

  const addTask = async (newTask) => {
    setSending(true);
    console.log(newTask);
    const res = await fetch("http://localhost:5000/tasks", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(newTask),
    });

    const data = await res.json();
    console.log(data);
    setTasks([...tasks, data]);
    setSending(false);
  };

  const removeTask = async (id) => {
    const res = await fetch(`http://localhost:5000/tasks/${id}`, {
      method: "DELETE",
    });

    setTasks(tasks.filter((el) => el.id !== id));
  };

  const doneTask = async (id, currentState) => {
    const res = await fetch(`http://localhost:5000/tasks/${id}`, {
      method: "PATCH",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ isDone: !currentState }),
    });

    const data = await res.json();

    console.log(data);

    setTasks(tasks.map((task) => (task.id == id ? data : task)));
  };

  const fetchTasks = async () => {
    const res = await fetch("http://localhost:5000/tasks");
    const data = await res.json();
    setTasks(data);
    setTaskLoading(false);

    return;
  };

  useEffect(() => {
    fetchTasks();
  }, []);

  return (
    <div className="p-10 bg-gray-100 w-[500px] mx-auto mt-[100px] rounded ">
      <Heading />
      <CreateTest sending={sending} addTask={addTask} />
      <TestList doneTask={doneTask} removeTask={removeTask} tasks={tasks} />
      {taskLoading && <p>Loading...</p>}
    </div>
  );
};

export default App;
