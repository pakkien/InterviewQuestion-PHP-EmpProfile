import React from "react";
import {
  Table,
  TableBody,
  TableCaption,
  TableCell,
  TableFooter,
  TableHead,
  TableHeader,
  TableRow,
} from "@/components/ui/table";
import { Button } from "@/components/ui/button";
import {
  Card,
  CardContent,
  CardDescription,
  CardFooter,
  CardHeader,
  CardTitle,
} from "@/components/ui/card";
import { useNavigate } from "react-router-dom";
import axios from "axios";
import { useEffect, useState } from "react";

type Employee = {
  id: number;
  name: string;
  email: string;
  phone_no: string;
  gender: "M" | "F";
  address: string;
  marital_status: "single" | "married" | "divorced";

  date_of_birth: string;
  nationality: string;
  hire_date: string;
  department: "HR" | "Finance" | "IT";
  //   created_date: string
  //   submitted_date: string
};

const EmployeeList = () => {
  const [tableData, setTableData] = useState<Employee[]>([]);
  const navigate = useNavigate();

  const fetchData = async () => {
    const config = {
      //headers: { Authorization: `${localStorage.getItem('token')}` }, //TODO: add token
    };

    await axios
      .get("http://localhost:8000" + "/api/v1/employees", config)
      .then((response) => {
        //console.log(response);
        setTableData(response.data.data);
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
          <CardDescription>Table</CardDescription>
        </CardHeader>
        <CardContent>
          {/* <DataTable data={data} /> */}
          <Table>
            <TableCaption>List of employees</TableCaption>
            <TableHeader>
              <TableRow>
                <TableHead className="w-[100px]">No.</TableHead>
                <TableHead>Name</TableHead>
                <TableHead>Email</TableHead>
                <TableHead>Phone No.</TableHead>
                <TableHead>Gender</TableHead>
                <TableHead>Address</TableHead>
                <TableHead>Marital Status</TableHead>
                <TableHead>Date Of Birth</TableHead>
                <TableHead>Nationality</TableHead>
                <TableHead>Hire Date</TableHead>
                <TableHead>Department</TableHead>
              </TableRow>
            </TableHeader>
            <TableBody>
              {tableData.map((data: any, i) => (
                <TableRow key={data.id}>
                  <TableCell className="font-medium">{i + 1}</TableCell>
                  <TableCell>{data.name}</TableCell>
                  <TableCell>{data.email}</TableCell>
                  <TableCell>{data.phone_no}</TableCell>
                  <TableCell>{data.gender}</TableCell>
                  <TableCell>{data.address}</TableCell>
                  <TableCell>{data.marital_status}</TableCell>
                  <TableCell>{data.date_of_birth}</TableCell>
                  <TableCell>{data.nationality}</TableCell>
                  <TableCell>{data.hire_date}</TableCell>
                  <TableCell>{data.department}</TableCell>
                </TableRow>
              ))}
            </TableBody>
            <TableFooter>
              {/* <TableRow>
            <TableCell colSpan={3}>Total</TableCell>
            <TableCell className="text-right">$2,500.00</TableCell>
          </TableRow> */}
            </TableFooter>
          </Table>
        </CardContent>
        <CardFooter className="flex justify-between">
          <div></div>
          <Button
            onClick={() => {
              navigate(`/emp/new`);
            }}
          >
            Create New Employee
          </Button>
        </CardFooter>
      </Card>
    </>
  );
};

// const EmployeeList = () => {
//   return (
//     <div>EmployeeList</div>
//   )
// }

export default EmployeeList;
