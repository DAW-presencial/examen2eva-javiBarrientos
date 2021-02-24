<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
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
            'empresa' => 'required',
            'nombre' => 'required',
            'primer_apellido',
            'segundo_apellido',
            'telefono' => 'required',
            'email' => 'required',
        ]);

        $contact = new Contact([
            'empresa' => $request->get('empresa'),
            'documento' => $request->get('documento'),
            'dni' => $request->get('dni'),
            'nombre' => $request->get('nombre'),
            'primer_apellido' => $request->get('primer_apellido'),
            'segundo_apellido' => $request->get('segundo_apellido'),
            'pais' => $request->get('pais'),
            'provincia' => $request->get('provincia'),
            'municipio' => $request->get('municipio'),
            'estado' => $request->get('estado'),
            'telefono' => $request->get('telefono'),
            'email' => $request->get('email'),
        ]);
        $contact->save();
        return redirect('/contacts')->with('success');
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
