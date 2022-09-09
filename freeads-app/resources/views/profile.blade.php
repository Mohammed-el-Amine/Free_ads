@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile de ') }}<user><b>{{ucfirst($name)}}</b></user></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Votre nom  : &emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" placeholder="{{strtoupper($name)}}" name="nom"><br><br><br>
                    Votre mail : &emsp;&emsp;&emsp;&emsp;&emsp;<input type="email" placeholder="{{strtoupper("mon email")}}" name="email"><br><br><br>
                    Votre mot de passe : &emsp;<input type="text" placeholder="{{ucfirst("nouveau mot de passe")}}" name="nom"><br><br><br><br>
                    <button type="button" class="btn btn-primary btn-lg btn-block">sauvegarder le changement</button>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
