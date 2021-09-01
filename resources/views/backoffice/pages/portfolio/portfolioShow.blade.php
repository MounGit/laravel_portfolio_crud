@extends('backoffice.template.main')

@section('contentBack')

<section class="container d-flex flex-column align-items-center my-5 rounded bg-dark text-light">

    <img src="{{asset('assets/img/portfolio/'.$dataPortfolio->image)}}" style="width: 400px; height: 400px;" class="border border-5 border-info  rounded" alt="">
    <div class="d-flex justify-content-around w-50 mt-5">
        <a class="btn btn-warning" href="{{route('portfolioEdit', $dataPortfolio->id)}}">Modifier</a>
        <form action="{{route('portfolioDelete', $dataPortfolio->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
    </div>

</section>

<div class="d-flex justify-content-center my-5">
    <a class="btn btn-warning" href="{{route('portfolioBack')}}">Retour</a>
</div>
@endsection