function toggleSub(e) {
    e.preventDefault();
    if (this.querySelector('ul.sub-menu')) {
        this.querySelector('ul.sub-menu').classList.toggle('open');
    }
}
document.querySelectorAll('li.menu-item-has-children').forEach(function (el) {
    el.addEventListener('click', toggleSub);
});

const burgMenu = document.getElementById('burger-menu');
const headerNav = document.getElementById('main-header');

burgMenu.onclick = function () {
    this.classList.toggle('exer');
    headerNav.classList.toggle('enter');
}



