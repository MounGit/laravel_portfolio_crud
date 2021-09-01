@extends('backoffice.template.main')

@section('contentBack')
<section class="container bg-dark rounded my-5 text-light d-flex flex-column align-items-center">
    <h3 class="my-3">Connaissances informatiques</h3>
    <table class="table table-dark mt-4">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Langage(s) de programmation</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataSkills as $data)
            <tr>
                <th scope="row"></th>
                <td>{{$data->skill}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('skillsShow', $data->id)}}">Détails</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

<div class="create d-flex justify-content-center my-5">
    <a class="btn btn-warning" href="{{route('skillsCreate')}}">Ajouter un langage</a>
</div>
@endsection