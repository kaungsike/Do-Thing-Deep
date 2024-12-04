import React from "react";
import Header from "./components/Header";
import ListCreateForm from "./components/ListCreateForm";
import ListGroup from "./components/ListGroup";
import Provider from "./context/Provider";

const App = () => {
  return (
    <Provider>
      <section className="w-full h-screen pt-20">
        <div className="border rounded border-black w-[400px] p-5 mx-auto">
          <Header />
          <ListCreateForm />
          <ListGroup />
        </div>
      </section>
    </Provider>
  );
};

export default App;
