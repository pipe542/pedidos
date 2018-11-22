<?php

namespace App\Http\Controllers;

use App\bebidas;
use App\pedidos;
use App\platos;
use App\User;
use Illuminate\Http\Request;

class PedidosController extends Controller
{

    public function todos_pedidos()
    {

        $pedidos  = pedidos::all();
        $usuarios = User::all();
        $platos   = platos::all();
        $bebidas  = bebidas::all();
        return view('admin.ver_pedidos', compact('pedidos', 'usuarios', 'platos', 'bebidas'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos  = platos::all();
        $bebidas = bebidas::all();
        return view('user.pedidos', compact('platos', 'bebidas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data            = $request->all();
        $data['user_id'] = $request->user()->id;
        pedidos::create($data);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(pedidos $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedidos $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedidos $pedidos)
    {
        //
    }
}
