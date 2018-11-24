@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class=" col-md-offset-2 col-md-8 panel panel-default all">
            <br>
                <br>
                    <div class="col-md-12 bg-danger ">
                        <h2>
                            RAPI PEDIDOS
                        </h2>
                    </div>
                    <br>
                    </br>
                    <div class="col-md-12 col-md-offset-0 ">
                        <form action="{{ url('nuevo_pedido') }}" method="post">
                            {{ csrf_field() }}
                            <br>
                                <label class="col-md-2">
                                    Plato:
                                </label>
                                <select class="custom-select col-md-8 form-control" name="plato_id" required="">
                                    <option selected="">
                                    </option>
                                    @foreach ($platos as $plato)
                                    <option value="{{ $plato->id }}">
                                        {{ $plato->nombre }}
                                    </option>
                                    @endforeach
                                </select>
                                <br>
                                </br>
                                <label class="col-md-2">
                                    Bebidas:
                                </label>
                                <select class="custom-select col-md-8 form-control" name="bebida_id" required="">
                                    <option selected="">
                                    </option>
                                    @foreach ($bebidas as $bebida)
                                    <option value="{{ $bebida->id }}">
                                        {{ $bebida->nombre }}
                                    </option>
                                    @endforeach
                                </select>
                            </br>
                            <br>
                            </br>
                            <button class="btn btn-info col-md-4 col-md-offset-2" type="submit">
                                Hacer pedido
                            </button>
                        </form>
                    </div>
                </br>
            </br>
            <br>
            </br>
        </div>
    </div>
</div>
<br>
    <br>
        <br>
        </br>
    </br>
</br>
@endsection
