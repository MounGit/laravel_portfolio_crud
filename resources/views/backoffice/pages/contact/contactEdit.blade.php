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

<section class="container bg-dark rounded my-5 d-flex flex-column align-items-center text-light">
    <h3>Modifiez vos données personnelles</h3>
    <form class="my-5 d-flex flex-column w-50 " action="{{route('contactUpdate', $dataContact->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="location">Adresse :</label>
        <input value="{{$dataContact->location}}" type="text" name="location" id="location">
        <label for="mail">Adresse Email : </label>
        <input value="{{$dataContact->mail}}" type="text" name="mail" id="mail">
        <label for="number">Numéro de téléphone : </label>
        <input value="{{$dataContact->number}}" type="text" name="number" id="number">
        <button class="btn btn-warning w-25 mt-5" type="submit">Modifier</button>
    </form>
</section>


@endsection