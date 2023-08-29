<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);

        return view('users.users',compact('users'));
    }

    public function ajaxPagination(Request $request)
    {
        $data = User::paginate(5);
        if($request->ajax()){
            return view('users.table',compact('data'));
        }

        return view('users.ajax-pagination',compact('data'));
    }
}
