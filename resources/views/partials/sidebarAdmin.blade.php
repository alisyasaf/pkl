<nav class="navbar navbar-expand-lg navbar-light shadow p-2 mb-4 bg-white rounded sticky-top">
    <div class="container d-flex">
    <a class="navbar-brand ms-1 p-2" href="#">
        <img src="img/logo.png" alt="logo" width="130">
      </a>
      <a class="nav-link ms-1 p-2" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="nav-item dropdown ml-auto p-2">
      <a class="me-1 flex text-black fs-5 nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="nav-icon fa-regular fa-user text-black"></i>
        <!-- <li class="nav-item"><a href="profil-mahasiswa.php" class="nav-pills-link justify-content-center text-light"><h5>Mahasiswa</h5></a></li> -->
        Mitra
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
        <li><a href="#" class="dropdown-item">Logout</a></li>
    </ul>
    </div>
    </div>
    <!-- Main Sidebar Container -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4 position-absolute top-100 start-0" style="background-color: #061755; height: 100vh">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="/" class="nav-link text-white">
                <i class="nav-icon fa-solid fa-house text-white"></i>
                  Beranda
              </a>
            </li>

            {{-- <li class="nav-item">
                <a href="/" class="nav-link text-white">
                    <i class="nav-icon fa-solid fa-memo text-white"></i>
                    Pinjaman
                </a>
            </li> --}}

            <li class="nav-item menu-open">
                <a href="#" class="nav-link" style="background-color: #061755">
                  <i class="nav-icon fa-solid fa-file text-white"></i>
                  Mitra
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                      <i class="far fa-circle nav-icon" style="color:#061755"></i>
                      Daftar Mitra
                    </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link text-white">
                        <i class="far fa-circle nav-icon" style="color:#061755"></i>
                        Detail Mitra
                      </a>
                  </li>
                  </ul>
              </li>

            <li class="nav-item">
                <a href="/" class="nav-link text-white">
                    <i class="nav-icon fa-solid fa-comment-dots text-white"></i>
                    FaQ
                </a>
            </li>

            <li class="nav-item">
                <a href="/" class="nav-link text-white">
                  <i class="nav-icon fa-solid fa-users text-white"></i>
                  Forum
                </a>
            </li>

            <li class="nav-item">
                <a href="/" class="nav-link text-white">
                  <i class="nav-icon fa-solid fa-check text-white"></i>
                  Verifikasi Angsuran
                </a>
            </li>

            <li class="nav-item">
                <a href="/" class="nav-link text-white">
                  <i class="nav-icon fa-solid fa-user-plus text-white"></i>
                  Generate Akun
                </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
