import React, { useState } from "react";
import Heading from "./components/Heading";
import CreateTest from "./components/CreateTask";
import TestList from "./components/TaskList";
import useSWR, { useSWRConfig } from "swr";
import TaskLoading from "./components/TaskLoading";
import axios from "axios";

const fetcher = (...args) => fetch(...args).then((res) => res.json());

const App = () => {
  // const [tasks, setTasks] = useState([]);

  // console.log(import.meta.env.VITE_BASE_URL);

  const { data, error, isLoading } = useSWR(
    `${import.meta.env.VITE_BASE_URL}`,
    fetcher
  );

  const { mutate } = useSWRConfig();

  const api = axios.create({
    baseURL: `${import.meta.env.VITE_BASE_URL}/tasks`,
    headers: {
      "Content-Type": "application/json",
    },
  });

  const addTask = async (newTask) => {
    // const res = await fetch("http://localhost:5000/tasks", {
    //   method: "POST",
    //   headers: {
    //     "Content-Type": "application/json",
    //   },
    //   body: JSON.stringify(newTask),
    // });

    // const data = await res.json();
    // mutate("http://localhost:5000/tasks");
    // console.log(data);
    // setTasks([...tasks, newTask]);

    await api.post("/", newTask);

    mutate(`${import.meta.env.VITE_BASE_URL}/tasks`);
  };

  const removeTask = async (id) => {
    // const res = await fetch(`http://localhost:5000/tasks/${id}`, {
    //   method: "DELETE",
    //   headers: {
    //     "Content-Type": "application/json",
    //   },
    // });
    await api.delete(`/${id}`);

    mutate(`${import.meta.env.VITE_BASE_URL}/tasks`);
  };

  const doneTask = async (id, isDone) => {
    // const res = await fetch(`http://localhost:5000/tasks/${id}`, {
    //   method: "PATCH",
    //   headers: {
    //     "Content-Type": "application/json",
    //   },
    //   body: JSON.stringify({ isDone: !isDone }),
    // });

    await api.patch(`/${id}`, { isDone: !isDone });

    mutate(`${import.meta.env.VITE_BASE_URL}/tasks`);
  };

  return (
    <div className="p-10 bg-gray-100 w-[500px] mx-auto mt-[100px] rounded ">
      <Heading />
      <CreateTest addTask={addTask} />
      {isLoading ? (
        <div className="flex flex-col gap-2">
          <TaskLoading />
          <TaskLoading />
          <TaskLoading />
        </div>
      ) : (
        <TestList doneTask={doneTask} removeTask={removeTask} tasks={data} />
      )}
    </div>
  );
};

export default App;
