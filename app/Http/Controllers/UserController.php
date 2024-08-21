<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {
        $usuarios = User::all();
        return view('usuario', ['usuarios' => $usuarios]);
    }
}
