import React from "react";
import Header from "./components/Header.jsx";
import ListCreateForm from "./components/ListCreateForm.jsx";
import ListGroup from "./components/ListGroup.jsx";

const App = () => {
  return (
    <div className="border border-gray-400 w-[450px] rounded p-10 mx-auto mt-[200px]">
      <Header />
      <ListCreateForm/>
      <ListGroup/>
    </div>
  );
};

export default App;
