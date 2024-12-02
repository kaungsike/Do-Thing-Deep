import React from "react";
import Container from "./Container";
import { Link } from "react-router";

const Header = () => {
  return (
    <header>
      <Container>
        <div className="flex w-full justify-between">
          <Link to={"/"} className="text-3xl font-bold">Online Shop</Link>
          <Link to={"/myCart"} className="active:scale-95 duration-150 relative flex gap-2 border border-black px-6 py-2 rounded">
            My Cart
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              strokeWidth={1.5}
              stroke="currentColor"
              className="size-5"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
              />
            </svg>
            <p className="absolute -top-3 -right-2 bg-red-500 w-[20px] h-[20px] flex justify-center items-center text-white rounded-full">
              0
            </p>
          </Link>
        </div>
      </Container>
    </header>
  );
};

export default Header;
