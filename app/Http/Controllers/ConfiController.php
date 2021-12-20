<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;

class ConfiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('cogs.config', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()){
            $request->validate([
                'name' => ['required', 'string'],
                'email' => ['required', 'email'],
            ],
            [
                'name.required' => 'El campo Nombre es obligatorio',
                'name.string' => 'El campo Nombre solo admite letras',
                'email.required' => 'El campo Correo Electrónico es obligatorio',
                'email.email' => 'El campo Correo Electrónico debe tener un formato válido',
            ]);

            $user = Auth::user();
            $user->name = ucwords($request->name);
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            if ($request->has('password')) {
                if ($user->save() == true) {
                    Auth::guard('web')->logout();
                    return redirect('/')->with('success', 'Tu contraseña fue actualizado exitosamente');
                }
            }

            return redirect('/configuracion')->with('success', 'Tus datos fueron actualizados exitosamente');
        }else {
            return redirect('/dashboard')->with('danger', 'Error al mostrar el registro');
        }
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
