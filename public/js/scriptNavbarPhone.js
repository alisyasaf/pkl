const blocker = document.querySelector('.blocker');
const menuButton = document.querySelector("#menu-checkbox");

blocker.onclick = hide;
menuButton.addEventListener('click', toggleSidebar);

function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('visible');

    // if (screenWidth >= 576 && screenWidth <= 768) {
    //     sidebar.classList.contains('visible') ? hide() : show();
    // }
}

function show() {
    const screenWidth = window.innerWidth;
    const sidebar = document.querySelector('.sidebar');

    if (screenWidth >= 576 && screenWidth <= 768) {
        sidebar.classList.add('visible');
        document.body.style.overflow = 'hidden';
    }
}

function hide() {
    const screenWidth = window.innerWidth;
    const sidebar = document.querySelector('.sidebar');

    if (screenWidth >= 576 && screenWidth <= 768) {
        sidebar.classList.remove('visible');
        document.body.style.overflow = '';
    }
}

function toggle() {
    const screenWidth = window.innerWidth;
    const sidebar = document.querySelector('.sidebar');

    if (screenWidth >= 576 && screenWidth <= 768) {
        sidebar.classList.contains('visible') ? hide() : show();
    }
}
