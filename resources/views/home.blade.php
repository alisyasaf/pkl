@extends('layouts.main')
@include('partials.sidebarGuest')
@include('popup')
@section('container')
    <div class="container mx-auto">
        <h1>Selamat Datang </h1>
    </div>
    <div id="carouselExampleControls" class="carousel slide pt-2" data-ride="carousel" style="z-index: 0">
        <div class="carousel-inner img-responsive">
          <div class="carousel-item active">
            <img class="d-block img-responsive w-40 mx-auto" src="img/main-1.jpg" alt="First slide" style="width: 80%">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.237)">
                <h5>Hype Boy</h5>
                <p>lalalallalalalal</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-responsive w-40 mx-auto" src="img/main-2.jpg" alt="Second slide" style="width: 80%">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.237)">
                <h5>Ditto</h5>
                <p>Stay in the middle</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-responsive w-40 mx-auto" src="img/main-3.jpg" alt="Third slide" style="width: 80%">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.237)" >
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

      <div class="container">
        <div class="count shadow p-3 mb-5 bg-white rounded mt-4">
            <span>Mitra Kami</span>
            <div class="line mt-2"></div>
            <div class="d-flex mitra-1">
                <div class="d-flex mitra-2">
                    <div class="d-flex">
                        <i class="bi bi-people-fill pr-4" style="font-size: 70pt; color:#E8C21D"></i>
                    </div>
                    <div class="text-center">
                        <span style="font-size: 40px">{{ $jumlah_mitra }}</span>
                        <div class="line-2"></div>
                        <span style="font-size: 14px;">mitra</span>
                    </div>
                </div>
                <div class="d-flex" style="margin-right: 90px">
                    <div>
                        <div style="margin-bottom: 50px">
                            <div class="d-flex">
                                <div class="d-flex">
                                    <i class="bi bi-basket2-fill pr-3" style="font-size: 40pt; color:#E8C21D"></i>
                                </div>
                                <div class="text-center">
                                    <span style="font-size: 29px">50</span>
                                    <div class="line-3"></div>
                                    <span style="font-size: 14px;">mitra</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex">
                                <div class="d-flex">
                                    <i class="bi bi-basket2-fill pr-3" style="font-size: 40pt; color:#E8C21D"></i>
                                </div>
                                <div class="text-center">
                                    <span style="font-size: 29px">50</span>
                                    <div class="line-3"></div>
                                    <span style="font-size: 14px;">mitra</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <div style="margin-bottom: 50px">
                            <div class="d-flex">
                                <div class="d-flex">
                                    <i class="bi bi-basket2-fill pr-3" style="font-size: 40pt; color:#E8C21D"></i>
                                </div>
                                <div class="text-center">
                                    <span style="font-size: 29px">50</span>
                                    <div class="line-3"></div>
                                    <span style="font-size: 14px;">mitra</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex">
                                <div class="d-flex">
                                    <i class="bi bi-basket2-fill pr-3" style="font-size: 40pt; color:#E8C21D"></i>
                                </div>
                                <div class="text-center">
                                    <span style="font-size: 29px">50</span>
                                    <div class="line-3"></div>
                                    <span style="font-size: 14px;">mitra</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button-1" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">
                {{-- <a href="#"></a> --}}
                Lihat Daftar Mitra
            </button>
        </div>
      </div>
@endsection
