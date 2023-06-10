@if (Auth::user()->role==1)
<nav class="navbar navbar-expand navbar-light shadow bg-white sticky-top p-1" style="z-index: 2">
    <div class="container d-flex">
        <div class="image">
    <a class="navbar-brand ms-1 p-2" href="/admin/dashboard">
        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100">
      </a>
    </div>
      <div id="menu-button">
        <input type="checkbox" id="menu-checkbox">
        <label for="menu-checkbox" id="menu-label">
            <div id="hamburger"></div>
        </label>
      </div>
      {{-- <div class="nav-item dropdown ml-auto p-2">
      <div class="me-1 flex text-black nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="nav-icon fa-regular fa-user text-black"></i>
        <!-- <li class="nav-item"><a href="profil-mahasiswa.php" class="nav-pills-link justify-content-center text-light"><h5>Mahasiswa</h5></a></li> -->
        {{ auth()->user()->name }}
      </div>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
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
        <div class="sidebar">
            <div class="main">
                <div class="list-item">
                    <a href="/admin/dashboard" class="list-group-item mb-1">
                    <i class="bi bi-house-door-fill text-white mr-2" style="font-size: 16pt"></i>
                    <span class="description text-white">Beranda</span>
                    </a>
                    <a href="/admin/dashboard/mitra" class="list-group-item mb-1">
                        <i class="bi bi-file-earmark-text-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Mitra</span>
                    </a>
                    <a href="/admin/dashboard/faq" class="list-group-item mb-1">
                        <i class="bi bi-question-lg text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">FAQ</span>
                    </a>
                    <a href="/admin/dashboard/angsuran" class="list-group-item mb-1">
                        <i class="bi bi-check-lg text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Angsuran</span>
                    </a>
                    <a href="/admin/dashboard/account" class="list-group-item mb-1">
                        <i class="bi bi-person-plus-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Data User</span>
                    </a>
                    <a href="/admin/dashboard/verifikasi" class="list-group-item mb-1">
                        <i class="bi bi-file-earmark-check-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Verifikasi</span>
                    </a>
                    <button class="list-group-item" onclick="openPopup('/forum')">
                        <i class="bi bi-chat-left-dots-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Forum</span>
                    </button>
                    <a href="/logout" class="list-group-item fixed-bottom ml-2">
                        <i class="bi bi-box-arrow-right text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <script src="{{ asset('js/scriptNavbar.js') }}"></script>
    <script>
        function openPopup(url) {
            var newTab = window.open(url, '_blank');
            newTab.focus();
        }
    </script>

@endif
