<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class StudentController extends Controller
{
   //

   public function save(Request $request) {
      $user = new UserModel;
      $user->firstname = $request->input('firstname');
      $user->lastname = $request->input('lastname');
      $user->email = $request->input('email');
      $user->dob = $request->input('dob');
      $user->phonenum = $request->input('phonenum');
      $user->save();

      return redirect(route('user-list'))->with('status', 'Succesfully added user');
     }
  
      //list function
      public function index() {
         $users = UserModel::all();
         return view("users", ['accounts' => $users]);
      }

      public function edit(Request $request, $id) {
         $users = UserModel::find($id);
         $response = [
            'accounts' => $users
         ];
         return view("users-edit", $response);
      }

      
      public function saveUpdate(Request $request, $id) {
      $data = [
         'firstname' => $request->input()['firstname'],
         'lastname' => $request->input()['lastname'],
         'email' => $request->input()['email'],
         'dob' => $request->input()['dob'],
         'phonenum' => $request->input()['phonenum']
      ];
      
         $updated_user = UserModel::where('id', $id)->update($data);

         return redirect(route('user-list'))->with('status', "Succesfully Updated User");
         
   }

      public function remove($id) {
         $users = UserModel::find($id);
         $users->delete();
         return redirect(route('user-list'))->with('status', "Succesfully Updated User");
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
