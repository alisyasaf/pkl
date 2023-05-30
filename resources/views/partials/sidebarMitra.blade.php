@if (Auth::user()->role==2)
<nav class="navbar navbar-expand navbar-light shadow bg-white sticky-top p-1" style="z-index: 2">
    <div class="container d-flex">
        <div class="image">
    <a class="navbar-brand ms-1 p-2" href="/dashboard">
        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100">
      </a>
    </div>
      <div id="menu-button">
        <input type="checkbox" id="menu-checkbox">
        <label for="menu-checkbox" id="menu-label">
            <div id="hamburger"></div>
        </label>
      </div>
      {{-- <div class="dropdown ml-auto p-2" style="z-index: 100">
        <div type="button" class="me-1 flex text-black dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="nav-icon fa-regular fa-user text-black"></i>
          {{ auth()->user()->name }}
        </div>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a href="/logout" class="dropdown-item">Keluar</a>
        </div>
      </div> --}}

      <div class="nav-item ml-auto p-2">
        <i class="nav-icon fa-regular fa-user text-black"></i>
        {{ auth()->user()->name }}
    </div>

    </div></nav>
    <!-- Main Sidebar Container -->

    <aside class="main-sidebar mt-5 pt-3" style="z-index: 1">
        <!-- Sidebar Menu -->
        <div class="sidebar">
            <div class="main">
                <div class="list-item">
                    <a href="/mitra/dashboard" class="list-group-item mb-1">
                        <i class="bi bi-house-door-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Beranda</span>
                    </a>
                    <a href="/mitra/dashboard/angsuran" class="list-group-item mb-1">
                        <i class="bi bi-file-earmark-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Detail Angsuran</span>
                    </a>
                    <a href="/forum" class="list-group-item mb-1">
                        <i class="bi bi-cash-stack text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Forum</span>
                    </a>
                    <a href="/logout" class="list-group-item fixed-bottom ml-2">
                        <i class="bi bi-box-arrow-right text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Logout</span>
                    </a>
                    {{-- <a href="#" class="list-group-item mb-1">
                        <i class="bi bi-question-lg text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">FAQ</span>
                    </a> --}}

                </div>
            </div>
        </div>
      <!-- /.sidebar -->
    </aside>
    <script src="{{ asset('js/scriptNavbar.js') }}"></script>
@endif
