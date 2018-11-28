<?php

namespace App\Http\Controllers;

use App\bebidas;
use App\pedidos;
use App\platos;
use App\User;
use Illuminate\Http\Request;

class PedidosController extends Controller
{

    public function pedidos(Request $request)
    {
        $data    = $request->all();
        $id      = $request->user()->id;
        $pedidos = pedidos::where('restaurante_id', '=', $id)->get();
        $hay     = pedidos::where('restaurante_id', '=', $id)->count();
        return view('admin.ver_pedidos', compact('pedidos', 'hay'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data    = $request->all();
        $id      = $request->id_restaurante;
        $platos  = platos::where('restaurante_id', '=', $id)->get();
        $bebidas = bebidas::where('restaurante_id', '=', $id)->get();
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
