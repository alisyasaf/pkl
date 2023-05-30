<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#000">

    <meta name="description" content="Description"/>
    <meta name="robots" content="index,follow">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}


    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/mitra.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>{{ $title }}</title>
  </head>
  <body>

        {{-- @include('partialsMitra.sidebarMitra')
        @include('partials.sidebarAdmin') --}}

        <div class="" style="margin-left: 60px; margin-top:8px">
            @yield('container')
            {{-- @yield('generate') --}}
        </div>

    <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted p-0 ml-4">

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start">
        <!-- Grid row -->
        <div class="row mt-5">
          <!-- Grid column -->
          <div class="col-sm col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="fw-bold mt-4 mb-3" style="font-size: 11pt">
              <i class="fas fa-gem me-3"></i>KCU SEMARANG
            </h6>
            <p style="font-size: 9pt">
                Jl. Mataram No.892-894, Wonodri, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50242
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-sm mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mt-4 mb-3" style="font-size: 11pt">
              Hubungi Kami
            </h6>
            <p style="font-size: 9pt">
              (024) 8314225
            </p>
            <p style="font-size: 9pt">
              taspen@taspen.co.id
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-sm mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mt-4 mb-3" style="font-size: 11pt">
              Jam Operasional
            </h6>
            <p style="font-size: 9pt">
              Senin-Kamis : 08.00 - 17.00 WIB
            </p>
            <p style="font-size: 9pt">
              Jumat : 07.30 - 16.30 WIB
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-sm col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-4">
            <!-- Links -->
            <a class="logo" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="logo" width="140" height="60">
            </a>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);font-size: 10pt; height:40px">
      © 2023 Copyright:
      <a class="text-reset fw-bold" style="font-size: 10pt" href="https://www.taspen.co.id/">TASPEN</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


  </body>
</html>
