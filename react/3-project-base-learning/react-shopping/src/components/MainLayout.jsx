import React from "react";
import Header from "./Header";
import Footer from "./Footer";
import { Outlet } from "react-router";

const MainLayout = () => {
  return (
    <>
      <Header />
      <section className="mt-5 flex-grow">
        <Outlet />
      </section>
      <Footer />
    </>
  );
};

export default MainLayout;
