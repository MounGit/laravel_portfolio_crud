@extends('backoffice.template.main')

@section('contentBack')
<section class="container bg-dark my-5 rounded text-light">
    <h3 class="my-3 text-center">Portfolio</h3>
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        @foreach ($dataPortfolio as $data)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app my-5">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/portfolio/'.$data->image)}}" class="img-fluid rounded" alt="">
            <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-warning" href="{{route('portfolioShow', $data->id)}}">Détails</a>
            </div>
          </div>
        </div>
         @endforeach
      </div>
</section>

<div class="create d-flex justify-content-center my-5">
    <a class="btn btn-warning" href="{{route('portfolioCreate')}}">Ajouter un élément au portfolio</a>
</div>

@endsection