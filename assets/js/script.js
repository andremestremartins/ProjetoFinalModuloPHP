
function mostrarInfo(tipo) {
    const animaisSec = document.querySelector('.animaisProfile');
    const bilhetesSec = document.querySelector('.bilhetesProfile');
    const btns = document.querySelectorAll('.infoHeader button');

    

    if (tipo === 'animais') {
        animaisSec.style.display = 'block';
        bilhetesSec.style.display = 'none';
       
    } else if (tipo === 'bilhetes') {
        animaisSec.style.display = 'none';
        bilhetesSec.style.display = 'block';
        
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
    const coracaoIcons = document.querySelectorAll('.card .fa-heart');
    coracaoIcons.forEach(coracao => {
        coracao.addEventListener('click', (e) => {
            e.preventDefault();
            coracao.classList.toggle('fas');
            coracao.classList.toggle('far');
            coracao.style.transform = 'scale(1.3)';
            setTimeout(() => {
                coracao.style.transform = 'scale(1)';
            }, 200);
        });
    });
});

