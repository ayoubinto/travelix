function toggleAccountMenu() {
    const menu = document.getElementById('accountMenu');
    menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
}
document.addEventListener('DOMContentLoaded', function() {
    const menu = document.getElementById('accountMenu');
    menu.style.display = 'none'; // Hide the menu initially
});
document.addEventListener('click', function(e) {
    const menu = document.getElementById('accountMenu');
    const trigger = document.querySelector('.user_box_login div');
    if (!trigger.contains(e.target) && !menu.contains(e.target)) {
        menu.style.display = 'none';
    }
});
let accont_div = document.getElementById('accountMenu');
accont_div.addEventListener('mouseleave', function() {
    accont_div.style.display = 'none';
});