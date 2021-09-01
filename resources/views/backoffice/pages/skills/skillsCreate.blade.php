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
<section class="container bg-dark rounded my-5 d-flex flex-column align-items-center">

    <h3 class="text-light my-3">Ajoutez des compétences informatiques</h3>
    <form class="d-flex flex-column text-light w-50 mt-5   " action="{{route('skillsStore')}}" method="post">
        @csrf
        <label for="skill">Langage de programmation : </label>
        <input value="{{old('skill')}}" type="text" name="skill" id="skill">
        <label for="val">Connaissance en pourcentage :</label>
        <input value="{{old('val')}}" type="number" name="val" id="val" min="0" max="100">
        <button class="btn btn-warning w-25 mt-3" type="submit">Ajouter</button>
    </form>
</section>

<div class="d-flex justify-content-center my-5">
    <a class="btn btn-warning" href="{{route('skillsBack')}}">Retour</a>
</div>
@endsection