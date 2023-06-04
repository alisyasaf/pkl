@guest

<nav class="navbar navbar-expand navbar-light shadow bg-white sticky-top p-1" style="z-index: 2">
    <div class="container d-flex">
        <div class="image">
    <a class="navbar-brand ms-1 p-2" href="/dashboard">
        <img src="img/logo.png" alt="logo" width="100">
      </a>
    </div>
      <div id="menu-button">
        <input type="checkbox" id="menu-checkbox">
        <label for="menu-checkbox" id="menu-label">
            <div id="hamburger"></div>
        </label>
      </div>
      {{-- <a class="nav-link ms-1 p-2" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i></a> --}}
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button> --}}

      {{-- <div class="nav-item dropdown ml-auto p-2">
      <a class="me-1 flex text-black nav-link dropdown-toggle" id="navbarDropdownMenuLink" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="nav-icon fa-regular fa-user text-black"></i>
        <!-- <li class="nav-item"><a href="profil-mahasiswa.php" class="nav-pills-link justify-content-center text-light"><h5>Mahasiswa</h5></a></li> -->
        Tamu
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
        <li><a href="/login" class="dropdown-item">Masuk</a></li>
      </div>
    </div> --}}

    <div class="nav-item ml-auto p-2">
        <i class="nav-icon fa-regular fa-user text-black"></i>
        Tamu
    </div>
    </div>
</nav>

    <aside class="main-sidebar mt-5 pt-3" style="z-index: 1">
        <div class="sidebar">
            <div class="main">
                <div class="list-item">
                    <a href="/login" class="list-group-item">
                        <i class="bi bi-door-open-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Masuk</span>
                    </a>
                    <a href="/faq" class="list-group-item">
                        <i class="bi bi-question-lg text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">FAQ</span>
                    </a>
                    {{-- <a href="/login" class="list-group-item">
                        <i class="bi bi-door-open-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Login</span>
                    </a> --}}
                </div>
            </div>
        </div>
    </aside>


    <script src="js/scriptNavbar.js"></script>
@endguest
