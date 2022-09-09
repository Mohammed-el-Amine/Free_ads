@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <user><b>{{ucfirst($name)}}</b></user>
                    {{ __('Éditer votre profile') }}<br><br>
                    {{__('mettre la value du nom : .Metrre le input du nom ')}}<br>
                    {{__('mettre la value du mail:  .Metrre le input du mail ')}}<br>
                    {{__('mettre la value du mdp : .Metrre le input du mot de pass ')}}<br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
