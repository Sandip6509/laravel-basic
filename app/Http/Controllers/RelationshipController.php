<?php

namespace App\Http\Controllers;

use App\Models\User;

class RelationshipController extends Controller
{
    public function oneToOne()
    {
        $users = User::with('phone')->take(4)->get();

        return view('relationship.one-to-one', compact('users'));
    }

    public function oneToMany()
    {
        return view('relationship.one-to-many');
    }
}
