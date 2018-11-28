@extends('layouts.app')

@push('name')
    {{-- expr --}}
@endpush

@section('content')
<div class="container">
    <div class="row">
        @foreach ($restaurantes as $restaurante)
        <form accept-charset="utf-8" action="{{ url('pedidos') }}" method="POST">
            {{ csrf_field() }}
            <input name="id_restaurante" type="hidden" value="{{ $restaurante->user_id }}">
            </input>
            <button class="col-md-2 btn btn-primary" type="submit">
                {{ $restaurante->user_id  }}
            </button>
        </form>
        @endforeach
    </div>
</div>
@endsection
