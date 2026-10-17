
function mostrarInfo(tipo) {
    const animaisSec = document.querySelector('.animaisProfile');
    const bilhetesSec = document.querySelector('.bilhetesProfile');
    const btns = document.querySelectorAll('.infoHeader button');

    if (!animaisSec || !bilhetesSec) return;

    if (tipo === 'animais') {
        animaisSec.style.display = 'block';
        bilhetesSec.style.display = 'none';
        btns.forEach(btn => btn.classList.remove('active'));
        if (btns[0]) btns[0].classList.add('active');
    } else if (tipo === 'bilhetes') {
        animaisSec.style.display = 'none';
        bilhetesSec.style.display = 'block';
        btns.forEach(btn => btn.classList.remove('active'));
        if (btns[1]) btns[1].classList.add('active');
    }
}

// Menu Hambúrguer Mobile
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.querySelector('#menu-btn');
    const navbar = document.querySelector('.header .navbar');

    if (menuBtn && navbar) {
        menuBtn.addEventListener('click', () => {
            navbar.classList.toggle('active');
        });

        window.addEventListener('scroll', () => {
            navbar.classList.remove('active');
        });
    }

    // Toggle de Coração Favorito
    const heartIcons = document.querySelectorAll('.card .fa-heart');
    heartIcons.forEach(heart => {
        heart.addEventListener('click', (e) => {
            e.preventDefault();
            heart.classList.toggle('fas');
            heart.classList.toggle('far');
            heart.style.transform = 'scale(1.3)';
            setTimeout(() => {
                heart.style.transform = 'scale(1)';
            }, 200);
        });
    });
});

