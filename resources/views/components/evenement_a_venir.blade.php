    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container text-justify" data-aos="fade-up">
        
      <div class="container">
        <div class="row">
          @foreach ($evenements as $evenement)
            <div class="col-sm-6">
              <div class="card-template">
                <div class="card-evenement">
                  <img src="./img/evenements/{{$evenement->depot}}"/>
                </div>
                <div class="card-body sous-event">
                  <h5 class="">{{$evenement->nom}}</h5>
                  <p class="card-text">Au {{$evenement->lieux}}, le {{$evenement->date}}</p>
                </div>
              </div>
            </div>
          @endforeach
          
          
        </div>
      </div>

      </div>
    </section><!-- End About Boxes Section -->