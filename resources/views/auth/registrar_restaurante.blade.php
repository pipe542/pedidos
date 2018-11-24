@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 all">
            <div class="panel panel-default col-md-12">
                <div class="panel-heading">
                    <a class="btn btn-danger" href="{{ url('register') }}">
                        Cliente
                    </a>
                    <a class="btn btn-success" href="{{ url('register1') }}">
                        Restaurante
                    </a>
                    <h1 class="text-info">
                        Bienvenido
                    </h1>
                    <hr>
                    </hr>
                </div>
                <div class="panel-body">
                    <form action="{{ route('register') }}" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="name">
                                Nombre
                            </label>
                            <div class="col-md-12">
                                <input autofocus="" class="form-control" id="name" name="name" required="" type="text" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('name') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="email">
                                Correo
                            </label>
                            <div class="col-md-12">
                                <input class="form-control" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="mesa">
                                mesas en el local
                            </label>
                            <div class="col-md-12">
                                <input class="form-control" id="mesas" min="0" name="mesas" required="" type="number" value="{{ old('mesas') }}">
                                </input>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="password">
                                clave
                            </label>
                            <div class="col-md-12">
                                <input class="form-control" id="password" name="password" required="" type="password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('password') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password-confirm">
                                Confirmar clave
                            </label>
                            <div class="col-md-12">
                                <input class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                                </input>
                            </div>
                        </div>
                        <input name="tipo" type="hidden" value="restaurante"/>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-info col-md-12" type="submit">
                                    Registrarme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
</br>
<br>
</br>
@endsection
