import React, { useState } from "react";
import Faq from "./Faq";

const FaqSection = () => {
  const [questions,setQuestions] = useState([
    {
      id: 1,
      question: "What is React?",
      answer:
        "React is a JavaScript library developed by Facebook for building user interfaces. It is used to create single-page applications (SPAs) where updates can be done efficiently without reloading the entire page.",
      isOpen: true,
    },
    {
      id: 2,
      question: "What are the features of React?",
      answer:
        "The features of React include JSX, Virtual DOM, Components, Unidirectional Data Flow, and Lifecycle Methods.",
      isOpen: false,
    },
    {
      id: 3,
      question: "What are React components?",
      answer:
        "Components are the building blocks of a React application. They can be functional components (defined as functions) or class components (defined using ES6 classes).",
      isOpen: false,
    },
    {
      id: 4,
      question: "What is the Virtual DOM?",
      answer:
        "The Virtual DOM is an in-memory representation of the real DOM. React uses it to compare changes and efficiently update only the parts of the DOM that need updating.",
      isOpen: false,
    },
    {
      id: 5,
      question: "What are props in React?",
      answer:
        "Props are read-only inputs passed from parent to child components. They are used to pass data and event handlers.",
      isOpen: false,
    },
    {
      id: 6,
      question: "What is state in React?",
      answer:
        "State is a mutable JavaScript object that holds dynamic data specific to a component and can be updated with setState or useState.",
      isOpen: false,
    },
  ]);

  const handleOpen = (id) => {
    setQuestions(questions.map((el) => el.id==id ? {...el,isOpen : !el.isOpen} : {...el,isOpen : false}))
  }

  return (
    <div className="p-10 flex items-center flex-col">
      <h1 className="text-4xl mb-[100px]">React frequantly asked questions</h1>

      {questions.map((question) => (
        <Faq handleOpen={handleOpen} question={question} key={question.id} />
      ))}
    </div>
  );
};

export default FaqSection;
