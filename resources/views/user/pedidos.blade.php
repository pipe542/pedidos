@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 panel panel-default all">
        <br><br>
        <div class="col-md-5 bg-danger col-md-offset-4">
            <h2>RAPI PEDIDOS</h2>
        </div>
        <br><br><br>
        
        <div class="col-md-5 col-md-offset-4 ">
            <form action="" method="post" >
                <br>
                <label>
                    Plato:
                </label>
                <select class="custom-select col-md-7  form-control" name="plato">
                <option selected>Selecione un plato:</option>
                <option value="Arroz">Arroz</option>
                <option value="Chorizo">Chorizo</option>
                <option value="Sancocho">Sancocho</option>
                </select>
                <br><br><br>

                <label>
                    Bebidas:
                </label>
                <select class="custom-select col-md-7 form-control" name="bebidas">
                <option selected>Selecione una bebida: </option>
                <option value="Pepsi">Pepsi</option>
                <option value="Colombiana">Colombiana</option>
                <option value="Postobom">Postobom</option>
                </select>
            </form><br><br><br>
        </div>
    </div>
</div>
</div>
@endsection
