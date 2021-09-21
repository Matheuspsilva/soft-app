@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                        <div class="d-flex justify-content-center">
                            <a href="{{route('livros.index')}}" class="btn btn-lg btn-primary ml-3">Livros</a>
                            <a href="{{route('clima.index')}}" class="btn btn-lg btn-warning ml-3">Clima</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
