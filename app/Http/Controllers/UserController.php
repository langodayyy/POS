<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name, $id)
    {
        return view('user.user')
            ->with('name', $name)
            ->with('id', $id);
    }
}
