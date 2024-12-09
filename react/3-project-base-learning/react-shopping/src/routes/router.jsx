import MyCart from "../pages/MyCart";
import ProductDetail from "../pages/ProductDetail";
import Home from "../pages/Home";
import About from "../pages/About";
import { createBrowserRouter } from "react-router";
import MainLayout from "../components/MainLayout";
import Error from "../pages/Error";

const router = createBrowserRouter([
  {
    path: "/",
    element: <MainLayout />,
    errorElement : <Error/>,
    children: [
      {
        path: "/",
        element: <Home />,
      },
      {
        path: "about",
        element: <About />,
      },
      {
        path: "myCart",
        element: <MyCart />,
      },
      {
        path: "product-detail/:productId",
        element: <ProductDetail />,
      },
    ],
  },
]);

export default router;
