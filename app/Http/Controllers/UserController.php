<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->whereNotIn('rol', ['AdminSystem', 'Administrador'])->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
        ],
        [
            'name.required' => 'El campo Nombre es obligatorio',
            'name.string' => 'El campo Nombre solo admite letras',
            'email.required' => 'El campo Correo Electrónico es obligatorio',
            'email.email' => 'El campo Correo Electrónico debe tener un formato válido',
            'password.required' => 'El campo Password es obligatorio',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol' => 'Empleado',
            'estatus' => 'Activo',
        ]);

        return redirect('usuarios')->with('success', 'Registro Guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usercount = User::where('id', $id)->count();
        if($usercount > 0) {
            $user = User::where('id', $id)->first();
            return view('users.edit', compact('user'));
        }else {
            return redirect('/usuarios')->with('danger', 'Error al mostrar el registro');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $usercount = User::where('id', $id)->count();

        if($usercount > 0) {
            $request->validate([
                'name' => ['required', 'string'],
                'email' => ['required', 'email'],
                'password' => [Rules\Password::defaults()],
            ],
            [
                'name.required' => 'El campo Nombre es obligatorio',
                'name.string' => 'El campo Nombre solo admite letras',
                'email.required' => 'El campo Correo Electrónico es obligatorio',
                'email.email' => 'El campo Correo Electrónico debe tener un formato válido',
            ]);

            $user = User::where('id', $id)->first();
            $user->name = ucwords($request->name);
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect('/usuarios')->with('success', 'Registro fue actualizado exitosamente');
        }else {
            return redirect('/usuarios')->with('danger', 'Error al mostrar el registro');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usercount = User::where('id', $id)->count();
        if($usercount > 0) {
            $user = User::where('id', $id)->first();
            $user->estatus = 'Inactivo';
            $user->save();
            return redirect('/usuarios')->with('success', 'El usuario fue desactivado exitosamente');
        }else {
            return redirect('/usuarios')->with('danger', 'Error al desactivar al usuario');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activar($id)
    {
        $usercount = User::where('id', $id)->count();
        if($usercount > 0) {
            $user = User::where('id', $id)->first();
            $user->estatus = 'Activo';
            $user->save();
            return redirect('/usuarios')->with('success', 'El usuario fue activado exitosamente');
        }else {
            return redirect('/usuarios')->with('danger', 'Error al activar al usuario');
        }
    }
}
