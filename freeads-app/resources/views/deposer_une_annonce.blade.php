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

                    {{ __('Merci ')}} <user><b>{{ucfirst($name)}}</b></user>{{", nous éspérons que ton annonce aura du succès ✨✨✨"}}
                </div>

                <div class="card-body">
                    <label>Votre image</label>
                    <form method="post" >
                                <p>Déposez votre photo <a href="">ici</a></p>
                                mettre en place la sauvegarder des fichier ici<br><br>

                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Titre : ') }}</label>
                                <input class="form-control type="text" name="title"><br><br>
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Votre annonce : ') }}</label><textarea class="form-control" id="annonces" rows="7"></textarea><br><br>
                                <button type="submit" class="btn btn-primary">{{ __('Publier') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



