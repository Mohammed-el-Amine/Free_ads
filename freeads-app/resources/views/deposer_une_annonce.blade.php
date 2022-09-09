@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Deposer une annonce') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Merci à toi ')}} <user><b>{{ucfirst($name)}}</b></user>{{", nous éspérons que ton annonce aura du succès ✨✨✨"}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
