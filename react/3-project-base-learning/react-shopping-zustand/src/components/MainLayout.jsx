import React from "react";
import Header from "./Header";
import Footer from "./Footer";
import { Outlet } from "react-router";
import { Toaster } from "react-hot-toast";

const MainLayout = () => {
  return (
    <>
      <Header />
      <section className="mt-5 flex-grow">
        <Outlet />
      </section>
      <Footer />
      <Toaster/>
    </>
  );
};

export default MainLayout;
