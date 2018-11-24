@extends('layouts.app')

@push('name')
    {{-- expr --}}
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default col-md-8 text-center text-info col-md-offset-2">
            <h3 class="text-info text-center">
                agregar una bebida al menu
            </h3>
            <hr class="text-info">
                <br>
                    <br>
                        <form accept-charset="utf-8" action="{{ url('nueva_bebida') }}" class="col-md-8 col-md-offset-2" method="POST">
                            {{ csrf_field() }}
                            <label class="col-md-3" for="">
                                Nombre
                            </label>
                            <input class="col-md-12 col-md-offset-1 form-control" name="nombre" required="" type="text">
                            </input>
                            <label class="col-md-3 col-md-offset-0" for="">
                                Precio
                            </label>
                            <input class="col-md-12 col-md-offset-1 form-control" name="precio" required="" type="number">
                            </input>
                            <div class="col-md-12 col-md-offset-1">
                                <br>
                                    <br>
                                        <button class="btn btn-primary" type="submit">
                                            guardar
                                        </button>
                                    </br>
                                </br>
                            </div>
                        </form>
                    </br>
                </br>
            </hr>
        </div>
    </div>
</div>
@endsection
