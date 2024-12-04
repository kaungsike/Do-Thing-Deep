import React, { useState } from "react";
import Context from "./Context";

const Provider = ({ children }) => {
  const [notes, setNotes] = useState([
    { id: 1, job: "Complete SAD homework", isDone: false },
    { id: 2, job: "Install php", isDone: true },
    { id: 3, job: "Sleep early", isDone: false },
    { id: 4, job: "Learn react", isDone: false },
  ]);

  const addNotes = (newNote) => {
    setNotes([...notes, newNote]);
  };

  const deleteNotes = (id) => {
    setNotes(notes.filter((el) => el.id != id));
  };

  const checkNotes = (id) => {
    setNotes(
      notes.map((el) => (el.id == id ? { ...el, isDone: !el.isDone } : el))
    );
  };

  return (
    <Context.Provider value={{ notes, addNotes, deleteNotes ,checkNotes}}>
      {children}
    </Context.Provider>
  );
};

export default Provider;
