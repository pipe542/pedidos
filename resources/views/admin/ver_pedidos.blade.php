@extends('layouts.app')

@push('name')
    {{-- expr --}}
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach ($pedidos as $pedido)
            <div class="col-md-2">
                <div class="card panel panel-default col-md-12" style="width: 18rem;">
                    <img alt="Card image cap" class="card-img-top col-md-12" src="http://turismogastronómico.com/wp-content/uploads/2018/05/casado.png">
                        <br>
                            <div class="card-body">
                                <h3 class="card-title text-info col-md-12 col-md-offset-0">
                                    Pedido:{{ $loop->iteration }}
                                    <hr>
                                    </hr>
                                </h3>
                                <p class="card-text">
                                    <h4>
                                        <strong>
                                            usuario:
                                        </strong>
                                        {{ $pedido->dueño->name }}
                                    </h4>
                                    <h4>
                                        <strong>
                                            plato:
                                        </strong>
                                        {{ $pedido->plato->nombre }}
                                    </h4>
                                    <h4>
                                        <strong>
                                            bebida:
                                        </strong>
                                        {{ $pedido->bebida->nombre }}
                                        <hr>
                                        </hr>
                                    </h4>
                                    <h4>
                                        <strong>
                                            precio:
                                        </strong>
                                        @php
                                        {{ $precio = $pedido->bebida->precio + $pedido->plato->precio; }}
                                        echo $precio;
                                        @endphp
                                        <hr>
                                        </hr>
                                    </h4>
                                </p>
                            </div>
                        </br>
                        <a class="btn btn-primary col-md-12" href="#">
                            atender
                        </a>
                        <br>
                        </br>
                    </img>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
