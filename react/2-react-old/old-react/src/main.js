import { createElement } from "react";
import "./index.css";
import { createRoot } from "react-dom/client";
import App from "./App";

const root = document.querySelector("#root");

// const categories = [
//   "electronics",
//   "jewelery",
//   "men's clothing",
//   "women's clothing",
// ];

// const app = createElement(
//   "div",
//   null,
//   createElement("p", {className: "m-5 text-3xl"}, "Product Categories"),
//   createElement(
//     "div",
//     null,
//     categories.map((category) => createElement("button",{ className: "border border-black rounded px-6 py-2 mx-5"}, category))
//   )
// );

createRoot(root).render(App());

// const title = document.createElement("p");
// title.innerText = "Product Categories";
// title.classList.add("text-3xl", "text-gray-600","m-5");

// const categoryButton = (categoryName) => {
//   const btn = document.createElement("button");
//   btn.classList.add("border","px-6","py-2","mx-5","rounded","border-black")
//   btn.innerText = categoryName;

//   return btn;
// };

// root.append(title);
// categories.forEach((category) => root.append(categoryButton(category)));
