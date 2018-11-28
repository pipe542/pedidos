<?php

namespace App\Http\Controllers;

use App\bebidas;
use Illuminate\Http\Request;

class BebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agregar_bebida');
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        $data                   = $request->all();
        $data['restaurante_id'] = $request->user()->id;
        bebidas::create($data);
        return redirect('home');
    }

/**
 * Display the specified resource.
 *
 * @param  \App\bebidas  $bebidas
 * @return \Illuminate\Http\Response
 */
    public function show(bebidas $bebidas)
    {
        //
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\bebidas  $bebidas
 * @return \Illuminate\Http\Response
 */
    public function edit(bebidas $bebidas)
    {
        //
    }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\bebidas  $bebidas
 * @return \Illuminate\Http\Response
 */
    public function update(Request $request, bebidas $bebidas)
    {
        //
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\bebidas  $bebidas
 * @return \Illuminate\Http\Response
 */
    public function destroy(bebidas $bebidas)
    {
        //
    }
}
