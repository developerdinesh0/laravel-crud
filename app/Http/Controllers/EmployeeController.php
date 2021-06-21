<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Models\Employee;

class EmployeeController extends Controller{

    public function list_employees(Request $request){
		$data = array();
		$data["employees"] = Employee::get();
        return view('employee.list_employees', $data);
    }

	public function add_employees(Request $request){
		if ($request->isMethod('post')){
			$input = $request->all();
			Employee::create($input);
			return redirect(url("/employees"))->with('flash_message', 'Employee create successfully');
		}
		return view('employee.add_employees');
	}

	public function update_employees(Request $request, $id=NULL){
		if ($request->isMethod('post')){
			$input = $request->all();
			$employee = Employee::find($input["employee_id"]);
			$employee->update($input);
			return redirect(url("/employees"))->with('flash_message', 'Employee update successfully');
		}
		$data["employee"] = Employee::find($id);
		return view('employee.update_employees', $data);
	}

	public function delete_employees(Request $request, $id=NULL){
		$employee = Employee::find($id);
		$employee->delete();
		return redirect(url("/employees"))->with('flash_message', 'Employee delete successfully');
	}
	
}
