<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Redirect, Session;
use App\Club;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clubs.index')->with('var', Club::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validación
        $reglas = array(
            'name' => 'required|string',
            'manager' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $reglas);

        //Comprobamos reglas
        if ($validator->fails()) { //Si falla
            Session::flash('message', "Hay algún error en los datos introducidos.");
            return view('clubs.create')->with("errors", $validator->errors());
        } else {
            // Si no, guardamos el objeto en la base de datos
            $objeto = new Club();
            $objeto->name = Input::get('name');
            $objeto->manager = Input::get('manager');
            $objeto->save();

            //Redireccionamos a vista listado
            Session::flash('message', 'Club creado correctamente');
            return Redirect::to('clubs');
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
