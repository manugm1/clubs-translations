<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Redirect, Session;
use App\Club;
use App\Language;
use App\ClubTranslation;


class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('private.clubs.index')->with('var', Club::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('private.clubs.create')->with('var', Language::all());
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
            return view('private.clubs.create')->with("errors", $validator->errors())->with('var', Language::all());
        } else {
            // Si no, guardamos el objeto en la base de datos
            $objeto = new Club();
            $objeto->name = Input::post('name');
            $objeto->manager = Input::post('manager');
            $objeto->save();

            //Cuando se guarda un objeto Club, aparece el evento creado Support\Translateable para
            //crear registros ClubTranslation, tantos como idiomas disponibles
            //Se recorren las descripciones indicadas en el formulario
            foreach(Input::post('description') as $key => $value){
                $lang = Language::find($key);
                $objeto->translation($lang->locale)->first()->update(['description' => $value ?? "", 'language_id' => $lang->id]);
            }

            //Redireccionamos a vista listado
            Session::flash('message', 'Club creado correctamente');
            return Redirect::to('private/clubs');
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
        //No es necesario
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Objeto correspondiente
        $club = Club::find($id);
        return view('private.clubs.edit')->with('club', $club)->with('var', Language::all());
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
        //Validación
        $reglas = array(
            'name' => 'required|string',
            'manager' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $reglas);

        //Obtenemos objeto
        $objeto = Club::find($id);

        //Comprobamos reglas
        if ($validator->fails()) { //Si falla
            Session::flash('message', "Hay algún error en los datos introducidos.");
            return redirect()->route('clubs.edit', ['id' => $objeto->id])->withErrors($validator)
                ->withInput();
        } else {
            
            // Si no, guardamos el objeto en la base de datos
            $objeto->name = Input::post('name');
            $objeto->manager = Input::post('manager');
            $objeto->save();

            //Cuando se guarda un objeto Club, aparece el evento creado Support\Translateable para
            //crear registros ClubTranslation, tantos como idiomas disponibles
            //Se recorren las descripciones indicadas en el formulario
            foreach(Input::post('description') as $key => $value){
                $lang = Language::find($key);
                $objeto->translation($lang->locale)->first()->update(['description' => $value ?? "", 'language_id' => $lang->id]);
            }

            //Redireccionamos a vista listado
            Session::flash('message', 'Club editado correctamente');
            return Redirect::to('private/clubs');
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
        $objeto = Club::find($id);
        
        $objeto->delete();
        
        Session::flash('message', 'Club borrado correctamente');
    }
}
