import { createBrowserRouter } from "react-router-dom";
import GuestLayout from "./components/GuestLayout";
import Dashboard from "./views/Dashboard";
import Signup from "./views/Signup";
import Login from "./views/Login";
import Surveys from "./views/Surveys";

const router =createBrowserRouter([
 {
  path: '/',
  element: <Dashboard />
},
 {
  path: '/surveys',
  element: <Surveys />
},
{
  path:'/',
  element: <GuestLayout />,
  chidren: [
  {
  path: '/login',
  element: <Login />
  },
  {
  path: '/signup',
  element: <Signup />
},
  ]
}

 
 
 
]) 

export default router;