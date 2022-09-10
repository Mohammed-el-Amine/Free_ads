@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Les annonces de ') }}<user><b>{{ucfirst($name)}}</b></user></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Publier une annonce ? click juste') }} <a href="deposer_une_annonce">ici</a><br>
                </div>
            </div><br>

            <div class="card">
                <div class="card-body">
                    {{-- {{$annonce}} --}}
                    @foreach ($annonce as $publication)<br>
                    <div class="card-header">{{"Publié par ".$name." le $publication[created_at]"}}</div><br><br>
                    {{"Titre : ".$publication['title']}}<br>
                    {{"Votre image : ".$publication['picture']}}<br>
                    {{"Votre annonce : ".$publication['content']}}<br><br>
                    {{"Dèrnière modification le : ".$publication['updated_at']}}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
