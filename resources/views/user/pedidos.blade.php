@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 panel panel-default all">
            <br>
                <br>
                    <div class="col-md-5 bg-danger col-md-offset-4">
                        <h2>
                            RAPI PEDIDOS
                        </h2>
                    </div>
                    <br>
                        <br>
                            <br>
                                <div class="col-md-5 col-md-offset-4 ">
                                    <form action="{{ url('nuevo_pedido') }}" method="post">
                                        {{ csrf_field() }}
                                        <br>
                                            <label>
                                                Plato:
                                            </label>
                                            <select class="custom-select col-md-7 form-control" name="plato_id">
                                                <option selected="">
                                                    Selecione un plato:
                                                </option>
                                                @foreach ($platos as $plato)
                                                <option value="{{ $plato->id }}">
                                                    {{ $plato->nombre }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <br>
                                                <br>
                                                    <br>
                                                        <label>
                                                            Bebidas:
                                                        </label>
                                                        <select class="custom-select col-md-7 form-control" name="bebida_id">
                                                            <option selected="">
                                                                Selecione una bebida:
                                                            </option>
                                                            @foreach ($bebidas as $bebida)
                                                            <option value="{{ $bebida->id }}">
                                                                {{ $bebida->nombre }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </br>
                                                </br>
                                            </br>
                                            <button class="btn btn-primary" type="submit">
                                                Pedir
                                            </button>
                                        </br>
                                    </form>
                                    <br>
                                        <br>
                                            <br>
                                            </br>
                                        </br>
                                    </br>
                                </div>
                            </br>
                        </br>
                    </br>
                </br>
            </br>
        </div>
    </div>
</div>
@endsection
