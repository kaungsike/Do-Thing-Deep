import { create } from "zustand";

const useFaq = create((set) => ({
  faqs: [
    {
      id: 1,
      question: "What is React?",
      answer:
        "React is a JavaScript library for building user interfaces, maintained by Facebook. It allows developers to create reusable UI components.",
    isOpen : true
    },
    {
      id: 2,
      question: "What is the virtual DOM in React?",
      answer:
        "The virtual DOM is a lightweight, in-memory representation of the real DOM. React uses it to optimize rendering by updating only the parts of the DOM that change.",
        isOpen : false
    },
    {
      id: 3,
      question: "What are props in React?",
      answer:
        "Props (short for 'properties') are read-only inputs passed from a parent component to a child component to customize its behavior or appearance.",
        isOpen : false
    },
    {
      id: 4,
      question: "What is state in React?",
      answer:
        "State is a built-in object that allows components to manage and react to changes in data over time. Unlike props, state is managed within the component.",
        isOpen : false
    },
    {
      id: 5,
      question: "What is the purpose of keys in React lists?",
      answer:
        "Keys are used in React to uniquely identify elements in a list. They help React efficiently update and re-render components when the list changes.",
        isOpen : false
    },
  ],
  openFaq : (id) => set((state) => ({
    faqs : state.faqs.map(faq => faq.id===id? {...faq,isOpen : !faq.isOpen} : {...faq,isOpen : false} )
  }))
}));

export default useFaq;
