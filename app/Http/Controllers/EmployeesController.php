<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeesModel;

class EmployeesController extends Controller
{
    //

    public function save(Request $request) {
        $employee = new EmployeesModel;
        $employee->fullname = $request->input('fullname');
        $employee->address = $request->input('address');
        $employee->salary = $request->input('salary');
        $employee->save();
  
        return redirect(route('employees-list'))->with('status', "Succesfylly Added Employee");
       }
    
        //list function
        public function index1() {
            $employees = EmployeesModel::all();
           return view("employees.list", ['_t_b_l_e__employees' => $employees]);
        }
  
        public function edit(Request $request, $id) {
            $employees = EmployeesModel::find($id);
           $response = [
            '_t_b_l_e__employees' => $employees
           ];
           return view("employees.edit", $response);
        }
  
        
        public function saveUpdate(Request $request, $id) {
        $data = [
           'fullname' => $request->input()['fullname'],
           'address' => $request->input()['address'],
           'salary' => $request->input()['salary'],
           
        ];
        
           $updated_employee = EmployeesModel::where('id', $id)->update($data);
  
           return redirect(route('employees-list'))->with('status', "Succesfully Updated Employee");
           
     }
  
        public function remove($id) {
            $employees = EmployeesModel::find($id);
            $employees->delete();
           return redirect(route('employees-list'))->with('status', "Succesfully Deleted Employee");
        }
  
  
  
  
     
     public function welcome() {
      return view('welcome');
     }
  
     public function about() {
      return view('about');
     }
  
     public function login() {
      return view('login');
     }
  
     public function register() {
        return view('register');
       }
  }

