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
    const res = await fetch("http://localhost:500/tasks", {
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
    const res = await fetch(`http://localhost:500/tasks/${id}`,{
      method : "DELETE"
    })

    const data = await res.text();

    console.log(data);
    // setTasks(tasks.filter((task) => task.id != id));
  };

  const doneTask = (id) => {
    setTasks(
      tasks.map((task) =>
        task.id == id ? { ...task, isDone: !task.isDone } : task
      )
    );
  };

  const fetchTasks = async () => {
    const res = await fetch("http://localhost:500/tasks");
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
