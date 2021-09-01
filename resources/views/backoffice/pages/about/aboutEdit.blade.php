@extends('backoffice.template.main')

@section('contentBack')

@if ($errors->any())
<div class="alert alert-danger container mt-5">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<section class="container bg-dark text-light my-5 rounded d-flex flex-column align-items-center">
    <h3 class="my-3">Modifiez vos données personnelles</h3>
    <form class="d-flex flex-column w-75 mt-3" action="{{route('aboutUpdate', $dataAbout->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="image" class="form-label">Url de l'image</label>
        <input value="{{$dataAbout->image}}" type="text" name="image" id="image">
        <label for="title" class="form-label">titre</label>
        <input value="{{$dataAbout->title}}" type="text" name="title" id="title">
        <label for="lastname">Nom</label>
        <input value="{{$dataAbout->lastname}}" type="text" name="lastname" id="lastname">
        <label for="firstname">Prénom</label>
        <input value="{{$dataAbout->firstname}}" type="text" name="firstname" id="firstname">
        <label for="description" class="form-label">Description</label>
        <input value="{{$dataAbout->description}}" type="text" name="description" id="description">
        <label for="bday" class="form-label">Date de naissance</label>
        <input value="{{$dataAbout->bday}}" type="text" name="bday" id="bday">
        <label for="website" class="form-label">Site web</label>
        <input value="{{$dataAbout->website}}" type="text" name="website" id="website">
        <label for="phone" class="form-label">Numéro de téléphone</label>
        <input value="{{$dataAbout->phone}}" type="text" name="phone" id="phone">
        <label for="city" class="form-label">Ville</label>
        <input value="{{$dataAbout->city}}" type="text" name="city" id="city">
        <label for="age" class="form-label">Age</label>
        <input value="{{$dataAbout->age}}" type="text" name="age" id="age">
        <label for="degree" class="form-label">Niveau d'étude</label>
        <input value="{{$dataAbout->degree}}" type="text" name="degree" id="degree">
        <label for="mail" class="form-label">Adresse mail</label>
        <input value="{{$dataAbout->mail}}" type="text" name="mail" id="mail">
        <label for="freelance" class="form-label">Statut</label>
        <input value="{{$dataAbout->freelance}}" type="text" name="freelance" id="freelance">
        <label for="description2" class="form-label">Résumé</label>
        <input value="{{$dataAbout->description2}}" type="text" name="description2" id="description2">
        {{-- <textarea class="form-control" value="{{$dataAbout->description2}}" name="description2" id="description2" style="height: 100px"></textarea> --}}
        <button class="btn btn-warning w-50 mt-5" type="submit">Modifier</button>
    </form>
</section>

<div class="d-flex justify-content-center my-5">
    <a class="btn btn-warning" href="{{route('aboutBack')}}">Retour</a>
</div>

@endsection