@extends('backoffice.template.main')

@section('contentBack')
<section class="container bg-dark rounded my-5 text-light d-flex align-items-center flex-column">
    <h3>Vos Coordonnées</h3>
    <div class="col-lg-5 d-flex align-items-stretch my-5">
        <div class="info">
            <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Adresse :</h4>
                <p>{{$dataContact[0]->location}}</p>
            </div>

            <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email :</h4>
                <p>{{$dataContact[0]->mail}}</p>
            </div>

            <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Numéro de téléphone :</h4>
                <p>{{$dataContact[0]->number}}</p>
            </div>
        </div>
    </div>
    <div>
        <a class="btn btn-warning" href="{{route('contactEdit', $dataContact[0]->id)}}">MODIFIER LES DONNEES</a>
    </div>
</section>
@endsection