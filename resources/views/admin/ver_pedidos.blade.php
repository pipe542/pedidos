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
                            <br>
                                <div class="card-body">
                                    <h3 class="card-title text-info col-md-10 col-md-offset-1">
                                        Pedido:{{ $loop->iteration }}
                                    </h3>
                                    <p class="card-text">
                                        @foreach ($usuarios as $usuario)

                            @if (($usuario->id)==($pedido->user_id))
                                usuario: {{ $usuario->name }}
                            @endif
                                
                            @endforeach
                                        <br>
                                            @foreach ($platos as $plato)

                            @if (($plato->id)==($pedido->plato_id))
                               @php
                                   {{$total = $plato->precio;}}
                               @endphp
                                plato: {{ $plato->nombre }}
                            @endif
                                
                            @endforeach
                                            <br>
                                                @foreach ($bebidas as $bebida)

                            @if (($bebida->id)==($pedido->bebida_id))
                            @php
                                   {{$total = $total + $bebida->precio;}}
                               @endphp
                                bebida: {{ $bebida->nombre }}
                            @endif
                                
                            @endforeach
                                                <hr>
                                                    <h4>
                                                        Costo: $ @php
                                {{echo $total;}}
                            @endphp
                                                    </h4>
                                                </hr>
                                            </br>
                                            <a class="btn btn-primary col-md-12" href="#">
                                                atender
                                            </a>
                                        </br>
                                    </p>
                                </div>
                            </br>
                        </br>
                    </img>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
