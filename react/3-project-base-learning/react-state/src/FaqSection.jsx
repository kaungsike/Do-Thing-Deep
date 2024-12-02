import React, { useState } from "react";
import Faq from "./Faq";


const FaqSection = () => {

  const questions = [
    {
      id: 1,
      question: "What is React?",
      answer:
        "React is a JavaScript library developed by Facebook for building user interfaces. It is used to create single-page applications (SPAs) where updates can be done efficiently without reloading the entire page.",
    },
    {
      id: 2,
      question: "What are the features of React?",
      answer:
        "The features of React include JSX, Virtual DOM, Components, Unidirectional Data Flow, and Lifecycle Methods.",
    },
    {
      id: 3,
      question: "What are React components?",
      answer:
        "Components are the building blocks of a React application. They can be functional components (defined as functions) or class components (defined using ES6 classes).",
    },
    {
      id: 4,
      question: "What is the Virtual DOM?",
      answer:
        "The Virtual DOM is an in-memory representation of the real DOM. React uses it to compare changes and efficiently update only the parts of the DOM that need updating.",
    },
    {
      id: 5,
      question: "What are props in React?",
      answer:
        "Props are read-only inputs passed from parent to child components. They are used to pass data and event handlers.",
    },
    {
      id: 6,
      question: "What is state in React?",
      answer:
        "State is a mutable JavaScript object that holds dynamic data specific to a component and can be updated with setState or useState.",
    },
    {
      id: 7,
      question: "What are React Hooks?",
      answer:
        "React Hooks are functions that allow the use of state and other React features in functional components. Examples include useState, useEffect, and useContext.",
    },
    {
      id: 8,
      question: "What is JSX?",
      answer:
        "JSX is a syntax extension for writing HTML-like code within JavaScript. It makes it easier to write and understand React code.",
    },
    {
      id: 9,
      question:
        "What is the difference between functional and class components?",
      answer:
        "Functional components are simpler, lightweight, and use hooks, while class components are defined using ES6 classes and have lifecycle methods.",
    },
    {
      id: 10,
      question: "What is the purpose of useEffect?",
      answer:
        "useEffect is a hook for performing side effects such as fetching data, DOM manipulation, or subscribing to events in functional components.",
    },
    {
      id: 11,
      question: "What is Redux, and why is it used?",
      answer:
        "Redux is a state management library that provides a central store for managing state across an application. It ensures predictable state management using actions and reducers.",
    },
    {
      id: 12,
      question: "What is the significance of key in React?",
      answer:
        "The key is a unique identifier used in lists to help React efficiently update and render items when changes occur.",
    },
  ];

  return (
    <div className="p-10 flex items-center flex-col">
      <h1 className="text-4xl mb-[100px]">React frequantly asked questions</h1>

      {questions.map((question) => (
        <Faq question={question} key={question.id} />
      ))}
    </div>
  );
};

export default FaqSection;
