<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Marca;
use App\Models\Cliente;
use App\Models\User;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    

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

    public function asignaroles(Request $request)
    {
        // Encontrar un usuario
$user = User::find($request->id);
$user->roles()->detach();
// Asignar el rol al usuario
$user->assignRole($request->rol);
return response()->json(['success' => true, 'message' => 'Rol asignado con éxito.']);
    }
    


    public function prueba()
    {
        return response()->json(['message' => Vehiculo::all()]);
    }

    public function index_vehiculo()
    {   
        $vehiculos = Vehiculo::all();
        return view('Vehiculo',['vehiculos'=>$vehiculos]);
    }

    public function index_cliente()
    {
        $clientes = Cliente::all();
        return view('Cliente',['clients'=>$clientes]);
    }

    public function index_modelo()
    {
        $modelos = Marca::all();
        return view('modelo',['modelos'=>$modelos]);
    }
    
    public function index_usuario()
    {
        $usuarios = User::all();
        return view('usuario',['usuarios'=>$usuarios]);
    }
}
