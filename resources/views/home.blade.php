@extends('layouts.main')
@include('partials.sidebarGuest')

@section('container')
    <div class="container mx-auto">
        <h1>Selamat Datang </h1>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner img-responsive">
          <div class="carousel-item active">
            <img class="d-block img-responsive w-40 mx-auto" src="img/bunny 1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Hype Boy</h5>
                <p>lalalallalalalal</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-responsive w-40 mx-auto" src="img/bunny 2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Ditto</h5>
                <p>Stay in the middle</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-responsive w-40 mx-auto" src="img/bunny 3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>NewJeans</h5>
                <p>...</p>
              </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
@endsection
