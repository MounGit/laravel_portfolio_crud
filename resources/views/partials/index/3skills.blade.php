  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>{{$dataTitle[2]->title}}</h2>
        <p>{{$dataTitle[2]->description}}</p>
      </div>

      <div class="row skills-content">
     @foreach ($dataSkills as $data)
        <div class="col-lg-6" data-aos="fade-up">
     
               <div class="progress">
            <span class="skill">{{$data->skill}} <i class="val">{{$data->val}}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$data->val}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          
          </div>
          @endforeach
      </div>

    </div>
  </section><!-- End Skills Section -->




