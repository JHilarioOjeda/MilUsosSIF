document.querySelector('#iniciar-sesion').addEventListener('click', function() {
    window.open('login.php', '_self');
});

document.querySelector('#registrarse').addEventListener('click', function() {
    window.open('registrar.php', '_self');
});

document.querySelector('#nombre-menu').addEventListener('click', function(evento) {
    document.querySelectorAll('#menu li').forEach(function(openDropdown) {
        if (openDropdown.classList.contains('show'))
            openDropdown.classList.remove('show');
        else openDropdown.classList.toggle('show');
    });
});