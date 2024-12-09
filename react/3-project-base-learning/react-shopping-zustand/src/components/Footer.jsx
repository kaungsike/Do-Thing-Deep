import React from "react";
import Container from "./Container";

const Footer = () => {
  return (
    <footer className="mt-auto">
      <Container>
        <div className="w-full border h-[60px] bg-gray-600 flex items-center justify-center">
          <p className="text-white ">
            Copyright © 2024 Howells—Studio All screenshots © of their
            respective owners.
          </p>
        </div>
      </Container>
    </footer>
  );
};

export default Footer;
