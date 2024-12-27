import { createBrowserRouter } from "react-router";
import Layout from "./components/Layout";
import ErrorPage from "./pages/ErrorPage";
import DashBoardPage from "./pages/DashBoardPage";
import ProductPage from "./pages/ProductPage";
import ProductDetailPage from "./pages/ProductDetailPage";
import SalePage from "./pages/SalePage";
import VoucherPage from "./pages/VoucherPage";

const router = createBrowserRouter(
    [
        {
            path: "/",
            element: <Layout />,
            errorElement : <ErrorPage/>,
            children: [
                {
                    path : "/",
                    element : <DashBoardPage/>,
                },
                {
                    path :"/ProductPage",
                    element : <ProductPage/>,
                },
                {
                    path : "",
                    element : <ProductDetailPage/>,
                },
                {
                    path : "/SalePage",
                    element : <SalePage/>,
                },
                {
                    path : "/VoucherPage",
                    element : <VoucherPage/>,
                }
            ]
        }
    ]
);

export default router;