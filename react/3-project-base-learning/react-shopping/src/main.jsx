
import { createRoot } from "react-dom/client";
import "./index.css";
import App from "./App";
import { createBrowserRouter } from "react-router";

import { RouterProvider } from "react-router-dom";

import router from "./routes/router";


const root = document.querySelector("#root");


createRoot(root).render(<RouterProvider router={router}/>)
