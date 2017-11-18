<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Redirect, Session;
use App\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('private.languages.index')->with('var', Language::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('private.languages.create');
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
            'locale' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $reglas);

        //Comprobamos reglas
        if ($validator->fails()) { //Si falla
            Session::flash('message', "Hay algún error en los datos introducidos.");
            return view('private.languages.create')->with("errors", $validator->errors());
        } else {
            // Si no, guardamos el objeto en la base de datos
            $objeto = new Language();
            $objeto->name = Input::post('name');
            $objeto->locale = Input::post('locale');
            $objeto->save();

            //Redireccionamos a vista listado
            Session::flash('message', 'Idioma creado correctamente');
            return Redirect::to('private/languages');
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
        //Objeto correspondiente
        $language = Language::find($id);
        return view('private.languages.edit')->with('var', $language);
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
            'locale' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $reglas);

        //Obtenemos objeto
        $objeto = Language::find($id);

        //Comprobamos reglas
        if ($validator->fails()) { //Si falla
            Session::flash('message', "Hay algún error en los datos introducidos.");
            return redirect()->route('languages.edit', ['id' => $objeto->id])->withErrors($validator)
                ->withInput();
        } else {
            
            // Si no, guardamos el objeto en la base de datos
            $objeto->name = Input::post('name');
            $objeto->locale = Input::post('locale');
            $objeto->save();

            //Redireccionamos a vista listado
            Session::flash('message', 'Idioma editado correctamente');
            return Redirect::to('private/languages');
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
        $objeto = Language::find($id);
        
        $objeto->delete();
        
        Session::flash('message', 'Idioma borrado correctamente');
    }
}
