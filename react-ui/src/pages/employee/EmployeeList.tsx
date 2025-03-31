
import { Button } from "@/components/ui/button";
import {
  Card,
  CardContent,
  CardDescription,
  CardFooter,
  CardHeader,
  CardTitle,
} from "@/components/ui/card";
import axios from "axios";
import { useEffect, useState } from "react";
import { DataTable } from "@/components/ui/data-table";
import { Employee, columns } from "./columns";



const EmployeeList = () => {
  const [data, setData] = useState<Employee[]>([]);

  const fetchData = async () => {
    const config = {
      //headers: { Authorization: `${localStorage.getItem('token')}` }, //TODO: add token
    };

    await axios
      .get("http://localhost:8000" + "/api/v1/employees", config)
      .then((response) => {
        //console.log(response);
        setData(response.data.data);
      });
  };

  useEffect(() => {
    fetchData();
  }, []);



  return (
    <>
      <Card>
        <CardHeader>
          <CardTitle className="text-2xl">Employee List</CardTitle>
          <CardDescription>Employees count - {data.length}</CardDescription>
        </CardHeader>
        <CardContent>
          <DataTable columns={columns} data={data} />
        </CardContent>
        <CardFooter className="flex justify-between">
          <div></div>
        </CardFooter>
      </Card>
    </>
  );
};


export default EmployeeList;
