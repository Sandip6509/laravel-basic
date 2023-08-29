<?php

namespace App\Http\Controllers;

use App\Rules\BirthYearRule;
use Illuminate\Http\Request;

class CustomValidationController extends Controller
{
    public function create()
    {
        return view('custom-validation.form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'name' =>'required',
                'birth-year' => [
                    'required',
                    new BirthYearRule()
                ]
            ]);

        return back()->with('success', 'User created successfully.');
    }
}
