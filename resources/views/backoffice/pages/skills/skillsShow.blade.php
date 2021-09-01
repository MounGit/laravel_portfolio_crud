@extends('backoffice.template.main')

@section('contentBack')
<section class="container bg-dark d-flex align-items-center flex-column rounded my-5">
    <h3 class="text-light mb-5">Evaluation des compétences informatiques</h3>
    <div class="p-4 bg-light rounded w-50">
        <span class="skill mb-3">{{$dataSkills->skill}} <i class="val">{{$dataSkills->val}}%</i></span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$dataSkills->val}}%" aria-valuenow="{{$dataSkills->val}}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <div class="mt-5 d-flex justify-content-around w-50">
        <a class="btn btn-warning" href="{{route('skillsEdit', $dataSkills->id)}}">Modifier</a>
        <form action="{{route('skillsDelete', $dataSkills->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
    </div>


</section>

<div class="d-flex justify-content-center my-5">
    <a class="btn btn-warning" href="{{route('skillsBack')}}">Retour</a>
</div>
@endsection