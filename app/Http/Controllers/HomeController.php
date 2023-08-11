<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class HomeController extends Controller
{
   public function create()
   {
     return view('users.create');
   }


   public function store(Request $request)
   {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:5',
            'email' => 'required|email|unique:users'
        ],[
            'name.required' => 'Name is required',
            'password.required' => 'Password is required'
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        return back()->with('success', 'User created successfully.');
   }

   public function myform()
   {
        return view('ajax.my-form');
   }

   public function myformPost(Request $request)
   {
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        if ($validator->passes()) {
            return response()->json(['success'=>'Added new records.']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
   }

}
