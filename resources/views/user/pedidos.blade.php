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
                                    <form action="" method="post">
                                        <br>
                                            <label>
                                                Plato:
                                            </label>
                                            <select class="custom-select col-md-7 form-control" name="plato">
                                                <option selected="">
                                                    Selecione un plato:
                                                </option>
                                                @foreach ($platos as $plato)
                                                <option value="{{ $plato->nombre }}">
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
                                                        <select class="custom-select col-md-7 form-control" name="bebidas">
                                                            <option selected="">
                                                                Selecione una bebida:
                                                            </option>
                                                            @foreach ($bebidas as $bebida)
                                                            <option value="{{ $bebida->nombre }}">
                                                                {{ $bebida->nombre }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </br>
                                                </br>
                                            </br>
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
