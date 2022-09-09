@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Les annonces') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Toutes les annonces de ') }}
                    <user><b>{{ucfirst($name)}}</b></user><br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
