<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index_inicio()
    {
        return view('inicio');
    }

    public function assignrols(Request $request)
    {
        
        // Encontrar un usuario
        $user = User::find($request->id);
        $user->roles()->detach();
// Asignar el rol al usuario
        $user->assignRole($request->rol);
        return response()->json(['success' => true, 'message' => 'Role assigned successfully']);

    }
}
