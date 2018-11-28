@extends('layouts.app')

@push('name')
    {{-- expr --}}
@endpush

@section('content')
<div class="container">
    <div class="row row1">
        @if ($hay=='0')
        <div class="card bg-dark text-white all col-md-8">
            <img alt="Card image" class="card-img" src="http://bonvivant.es/wp-content/uploads/2012/11/restaurante-barcelona-hd1.jpg">
                <div class="card-img-overlay">
                    <h5 class="card-title">
                        Aun no tienes pedidos pendientes
                    </h5>
                    <p class="card-text">
                    </p>
                </div>
            </img>
        </div>
        @endif
        @foreach ($pedidos as $pedido)
        <div class="col-md-3 col-md-offset-1 separar">
            <div class="card panel panel-default" style="width: 18rem;">
                <img alt="Card image cap" class="card-img-top" src="http://turismogastronómico.com/wp-content/uploads/2018/05/casado.png">
                </img>
                <br>
                </br>
                <div class="card-body">
                    <h3 class="card-title text-info col-md-offset-0">
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
                    <a class="btn btn-info col-md-12" href="#">
                        atender
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
