@extends('backoffice.template.main')

@section('contentBack')

<section class="container bg-dark rounded my-5 text-light">
     <div class="about p-3">
      <div class="container">

        <div class="section-title">
          <h2 class="text-primary">{{$dataTitle[0]->title}}</h2>
          <p>{{$dataTitle[0]->description}}</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{asset('assets/img/'.$dataAbout[0]->image)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3 class="text-primary">{{$dataAbout[0]->title}}</h3>
            <p class="font-italic">
              {{$dataAbout[0]->description}}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$dataAbout[0]->bday}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$dataAbout[0]->website}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$dataAbout[0]->phone}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : {{$dataAbout[0]->city}}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$dataAbout[0]->age}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$dataAbout[0]->degree}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$dataAbout[0]->mail}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$dataAbout[0]->freelance}}</li>
                </ul>
              </div>
            </div>
            <p>
            {{$dataAbout[0]->description2}}
            </p>
          </div>
        </div>

      </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('aboutEdit', $dataAbout[0]->id)}}" class="btn btn-warning fs-2 mt-5">MODIFIER LES DONNEES</a>
    </div>
</section>

@endsection