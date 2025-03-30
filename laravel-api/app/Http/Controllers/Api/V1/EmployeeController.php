<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\V1\StoreEmployeeRequest;
use App\Http\Requests\V1\UpdateEmployeeRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EmployeeResource;
use App\Http\Resources\V1\EmployeeCollection;
use App\Filters\V1\EmployeeFilter;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $filter = new EmployeeFilter();
       $queryItem = $filter->transform($request); //['column', 'operator', 'value']


       if(count($queryItem) == 0) {
            return new EmployeeCollection(Employee::query()->orderBy('updated_at', 'desc')->paginate());
       }else {
         //   return new EmployeeCollection(Employee::where($queryItem)->paginate());
         $employees = Employee::where($queryItem)->orderBy('updated_at', 'desc')->paginate();

         return new EmployeeCollection($employees->appends($request->query()));

       }
       
        //return Employee::all();
       //return new EmployeeCollection(Employee::all());
       //return new EmployeeCollection(Employee::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        return new EmployeeResource(Employee::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Employee $employee)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }


}
