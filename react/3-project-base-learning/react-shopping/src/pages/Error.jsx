import React from "react";
import { Link } from "react-router";

const Error = () => {
  return (
    <section>
      <div className="w-full flex-col flex items-center justify-center h-full min-h-screen">
        <img
          className="h-[300px] mb-[100px]"
          src="../public/undraw_page_not_found_re_e9o6.svg"
          alt=""
        />
        <p>Did you type the URL correctly? Double-check for typos!</p>
        <p>
          Looking for something specific? Try heading back to our <Link className="text-blue-700 font-bold underline">Home Page</Link>
        </p>
      </div>
    </section>
  );
};

export default Error;
