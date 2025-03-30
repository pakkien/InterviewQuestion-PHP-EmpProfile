import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import "./index.css";
import { createBrowserRouter, RouterProvider } from "react-router-dom";
import Home from "@/pages/dashboard/Home.tsx";
import EmployeeList from "./pages/employee/EmployeeList.tsx";

import { AppSidebar } from "@/components/app-sidebar";
import {
  Breadcrumb,
  BreadcrumbItem,
  BreadcrumbLink,
  BreadcrumbList,
  BreadcrumbPage,
  BreadcrumbSeparator,
} from "@/components/ui/breadcrumb";
import { Separator } from "@/components/ui/separator";
import {
  SidebarInset,
  SidebarProvider,
  SidebarTrigger,
} from "@/components/ui/sidebar";
import CreateEmployee from "./pages/employee/CreateEmployee.tsx";
import { Toaster } from "@/components/ui/sonner"

const router = createBrowserRouter([
  {
    path: "/",
    element: <Home />,
    errorElement: <div>404 not found</div>,
  },
  {
    path: "/emp_list",
    element: <EmployeeList />,
    errorElement: <div>404 not found</div>,
  },
  {
    path: "/emp/new",
    element: <CreateEmployee />,
    errorElement: <div>404 not found</div>,
  },
]);

createRoot(document.getElementById("root")!).render(
  <StrictMode>
    {/* <BrowserRouter><App /></BrowserRouter> */}
    {/* <RouterProvider router={router}/> */}
    <Toaster
    position="top-right"
    />
    <SidebarProvider>
      <AppSidebar />
      <SidebarInset>
        <header className="flex top-0 bg-background h-16 shrink-0 items-center gap-2 border-b px-4">
          <SidebarTrigger className="-ml-1" />
          <Separator orientation="vertical" className="mr-2 h-4" />
          <Breadcrumb>
            <BreadcrumbList>
              <BreadcrumbItem className="hidden md:block">
                <BreadcrumbLink href="/">
                  Home
                </BreadcrumbLink>
              </BreadcrumbItem>
              <BreadcrumbSeparator className="hidden md:block" />
              <BreadcrumbLink href="/emp_list">
                  Employee List
                </BreadcrumbLink>
            </BreadcrumbList>
          </Breadcrumb>
        </header>

        <div className="flex flex-1 flex-col gap-4 p-4">
          <div className="@container/main flex flex-1 flex-col gap-2">
            <div className="flex flex-col gap-4 py-4 md:gap-6 md:py-6">
              <RouterProvider router={router} />
            </div>
          </div>

          {/* <RouterProvider router={router}/> */}
        </div>
      </SidebarInset>
    </SidebarProvider>
  </StrictMode>
);
