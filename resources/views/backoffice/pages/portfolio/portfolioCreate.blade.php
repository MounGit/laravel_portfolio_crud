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

<section class="container bg-dark rounded my-5 d-flex flex-column justify-content-center my-5">
    <h4 class="text-light text-center mb-5">Ajoutez une image à votre portfolio</h4>
    <form action="{{route('portfolioStore')}}" class="d-flex flex-column w-50 mt-4 ml-5" method="post">
        @csrf
        <label for="image" class="form-label text-light">Url de l'image</label>
        <input type="text" name="image" id="image">
        <button class="btn btn-warning w-25 mt-3" type="submit">Ajouter</button>
    </form>

</section>

<div class="d-flex justify-content-center my-5">
    <a class="btn btn-warning" href="{{route('portfolioBack')}}">Retour</a>
</div>
@endsection