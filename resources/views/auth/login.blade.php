@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0 all">
            <div class="panel col-md-12">
                <div class="panel-heading">
                    <h1 class="text-info text-center">
                        Bienvenido
                    </h1>
                    <hr>
                    </hr>
                </div>
                <div class="panel-body">
                    <form action="{{ route('login') }}" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="email">
                                Correo
                            </label>
                            <div class="col-md-12">
                                <input autofocus="" class="form-control" id="email" name="email" required="" type="email" value="{{ old('email') }}">
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
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="password">
                                Password
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
                            <div class="col-md-12">
                                <div class="checkbox izquierda">
                                    <label>
                                        <input name="remember" old('remember')="" type="checkbox">
                                            Recordar
                                        </input>
                                    </label>
                                </div>
                                <a class="btn btn-link derecha" href="{{ route('password.request') }}">
                                    Olvide la contraseña?
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 ">
                                <br>
                                    <button class="btn btn-info col-md-8" type="submit">
                                        Ingresar
                                    </button>
                                </br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
