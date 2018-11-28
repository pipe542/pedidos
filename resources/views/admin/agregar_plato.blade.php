@extends('layouts.app')

@push('name')
    {{-- expr --}}
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default col-md-8 text-center text-info all">
            <h3 class="text-info text-center">
                agregar un nuevo plato al menu
            </h3>
            <hr class="text-info">
                <br>
                    <br>
                        <form accept-charset="utf-8" action="{{ url('nuevo_plato') }}" class="col-md-12 col-md-offset-2" method="POST">
                            {{ csrf_field() }}
                            <label class="col-md-3 text-dark">
                                Nombre
                            </label>
                            <input class="col-md-12 form-control" name="nombre" required="" type="text">
                            </input>
                            <label class="col-md-3 text-dark">
                                Precio
                            </label>
                            <input class="col-md-12 col-md-offset-1 form-control" min="0" name="precio" required="" type="number">
                            </input>
                            <input name="estado" type="hidden" value="inactivo">
                                <div class="col-md-12 col-md-offset-1">
                                    <br>
                                        <br>
                                            <button class="btn btn-info col-md-4" type="submit">
                                                guardar
                                            </button>
                                        </br>
                                    </br>
                                </div>
                            </input>
                        </form>
                    </br>
                </br>
            </hr>
        </div>
    </div>
</div>
@endsection
