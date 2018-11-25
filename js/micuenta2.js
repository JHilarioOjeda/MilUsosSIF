document.querySelector('#mi-cuenta').addEventListener('click', function() {
    var jsVar1 = 1;
    window.location.href =  "?w1=" + jsVar1;
});

document.querySelector('#datos-personales').addEventListener('click', function() {
    var jsVar1 = 2;
    window.location.href ="?w1=" + jsVar1;
});

document.querySelector('#datos-cuenta').addEventListener('click', function() {
    var jsVar1 = 3;
    window.location.href ="?w1=" + jsVar1;
});

document.querySelector('#seguridad').addEventListener('click', function() {
    var jsVar1 = 4;
    window.location.href ="?w1=" + jsVar1;
});

document.querySelector('#publicacion').addEventListener('click', function() {
    var jsVar1 = 5;
    window.location.href ="?w1=" + jsVar1;
});

document.querySelector('#mis-publicaciones').addEventListener('click', function() {
    var jsVar1 = 6;
    window.location.href ="?w1=" + jsVar1;
});

document.querySelector('#calificar').addEventListener('click', function() {
    var jsVar1 = 7;
    window.location.href ="?w1=" + jsVar1;
});

document.querySelector('#usuarios').addEventListener('click', function() {
    var jsVar1 = 8;
    window.location.href ="?w1=" + jsVar1;
});

document.querySelector('#publicaciones').addEventListener('click', function() {
    var jsVar1 = 9;
    window.location.href ="?w1=" + jsVar1;
});



document.querySelector('#nombre-menu').addEventListener('click', function(evento) {
    document.querySelectorAll('#menu li').forEach(function(openDropdown) {
        if (openDropdown.classList.contains('show'))
            openDropdown.classList.remove('show');
        else openDropdown.classList.toggle('show');
    });
});