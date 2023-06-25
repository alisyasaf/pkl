@guest

<nav class="navbar navbar-expand navbar-light shadow bg-white sticky-top p-1" style="z-index: 2">
    <div class="container d-flex">
        <div class="image">
    <a class="navbar-brand ms-1 p-2" href="/">
        <img src="img/logo.png" alt="logo" width="100">
      </a>
    </div>
      <div class="nav-item" id="menu-button">
        <input type="checkbox" id="menu-checkbox">
        <label for="menu-checkbox" id="menu-label">
            <div id="hamburger"></div>
        </label>
      </div>

    <div class="nav-item ml-auto p-2">
        <i class="nav-icon fa-regular fa-user text-black"></i>
        Tamu
    </div>
    </div>
</nav>

    <aside class="main-sidebar mt-5 pt-3" style="z-index: 1">
        <div class="sidebar">
            <div class="blocker"></div>
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
                    <button class="list-group-item" onclick="openPopup('/forum')">
                        <i class="bi bi-chat-left-dots-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Forum</span>
                    </button>
                    {{-- <a href="/login" class="list-group-item">
                        <i class="bi bi-door-open-fill text-white mr-2" style="font-size: 16pt"></i>
                        <span class="description text-white">Login</span>
                    </a> --}}
                </div>
            </div>
        </div>
    </aside>


    <script src="js/scriptNavbar.js"></script>
    <script src="js/scriptNavbarPhone.js"></script>
    <script>
        function openPopup(url) {
            var newTab = window.open(url, '_blank');
            newTab.focus();
        }
    </script>

@endguest
