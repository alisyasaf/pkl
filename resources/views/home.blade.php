@extends('layouts.main')
@include('partials.sidebarGuest')
@section('container')
    <div class="container mx-auto">
        <h1>Selamat Datang </h1>
    </div>
    <div id="carouselExampleControls" class="carousel slide pt-2" data-ride="carousel" data-interval="3000" style="z-index: 0">
        <div class="carousel-inner img-responsive">
          <div class="carousel-item active">
            <img class="d-block img-responsive w-40 mx-auto" src="img/main-1.jpg" alt="First slide" style="width: 80%">
            <div class="carousel-caption d-none d-md-block text-dark" style="background-color: rgba(255, 255, 255, 0.491)">
                <h5>Penyerahan Partisipasi Program Penghijauan Penanaman Sejuta Pohon</h5>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-responsive w-40 mx-auto" src="img/main-2.jpg" alt="Second slide" style="width: 80%">
            <div class="carousel-caption d-none d-md-block text-dark" style="background-color: rgba(255, 255, 255, 0.491)">
                <h5>Penyerahan Bantuan Pembangunan Masjid Asy-Syifa’</h5>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-responsive w-40 mx-auto" src="img/main-3.jpg" alt="Third slide" style="width: 80%">
            <div class="carousel-caption d-none d-md-block text-dark" style="background-color: rgba(255, 255, 255, 0.491)" >
                <h5>Penyerahan Bantuan Sarana Pendidikan Kepada SDN 2 Tambakromo Cepu</h5>
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

      <div class="container" style="width: 60%">
        <div class="count shadow p-3 mb-5 bg-white rounded mt-4">
            <span>Mitra Kami</span>
            <div class="line mt-2"></div>
            <div class="d-flex mitra-1">
                <div class="d-flex mitra-2 ">
                    <div class="d-flex">
                        <i class="bi bi-people-fill pr-4" style="font-size: 100pt; color:#E8C21D"></i>
                    </div>
                    <div class="text-center">
                        <span style="font-size: 50px">{{ $jumlah_mitra }}</span>
                        <div class="line-2" ></div>
                        <span style="font-size: 18px;">mitra</span>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
            <a class=" button-1 text-white" type="button" onclick="openPopup('/faq')" style="text-align: center;text-decoration: none; color:white !important;">
                Ingin Bergabung?
            </a>
        </div>
        </div>
      </div>
      <script>
        function openPopup(url) {
            var newTab = window.open(url, '_blank');
            newTab.focus();
        }
    </script>
@endsection
