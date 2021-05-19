@extends('frontend.master')

 
@section('content')
<section class="contactt">
  <div class="contents">
      <h2>Contact US </h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit voluptatibus maiores illum, possimus
          sapiente sit officiis debitis in reprehenderit consectetur nesciunt! Quod ad officiis deleniti earum
          ipsa laborum sint culpa?</p>

  </div>
  <div class="container contain">
      <div class="contactInfo">
          <div class="box">
              <div class="icon"><i class="fas fa-map-marker"></i> </div>
              <div class="text">
                  <h3>Address</h3>
                  <p>80/3 Kakrail, VIP road, <br>Kakrail, Dhaka, <br>1200</p>
              </div>

          </div>
          <div class="box">
              <div class="icon"> <i class="fas fa-phone-square-alt"></i></div>

              <div class="text">
                  <h3>Phone</h3>
                  <p>+0080122222289</p>
              </div>

          </div>
          <div class="box">
              <div class="icon"> <i class="fas fa-envelope"></i></div>
              <div class="text">
                  <h3>Email</h3>
                  <p>shaplamedial@mail.net</p>
              </div>

          </div>
      </div>
      <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2881544795964!2d90.40905901429663!3d23.737101695202703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85fa3d43d3d%3A0x461bb0a75bde38b7!2sShapla%20Media!5e0!3m2!1sbn!2sbd!4v1621409887660!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </section>
  </div>
</section>

@endsection