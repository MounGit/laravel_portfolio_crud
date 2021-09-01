@extends('backoffice.template.main')

@section('contentBack')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="hero-container" data-aos="fade-in">
    <h1>{{$dataAbout[0]->firstname}} {{$dataAbout[0]->lastname}}</h1>
    <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
  </div>
</section><!-- End Hero -->
home back test
@endsection