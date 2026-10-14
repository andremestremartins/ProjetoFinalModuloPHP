/**
 * Zoo Life - JavaScript Principal
 * Controlo de Menus, Modais, Slider da Galeria, Abas do Perfil e Validações
 */

document.addEventListener('DOMContentLoaded', () => {
    // Elementos principais de navegação
    const navbar = document.querySelector('.navbar');
    const menuBtn = document.querySelector('#menu-btn');
    const loginBtn = document.querySelector('#login-btn');
    const loginForm = document.querySelector('.login-form');
    const userBtn = document.querySelector('#user-btn');
    const userDropdown = document.querySelector('#user-dropdown');

    // 1. Toggle do Menu Mobile
    if (menuBtn && navbar) {
        menuBtn.onclick = (e) => {
            e.stopPropagation();
            navbar.classList.toggle('active');
        };
    }

    // 2. Fechar menu mobile ao clicar fora
    document.addEventListener('click', (e) => {
        if (navbar && !navbar.contains(e.target) && e.target !== menuBtn) {
            navbar.classList.remove('active');
        }
    });

    // 3. Scroll da Janela e Destaque da Secção Ativa no Menu
    window.addEventListener('scroll', () => {
        if (navbar) navbar.classList.remove('active');

        // Identifica secção visível
        const sections = document.querySelectorAll('section[id]');
        const scrollPosition = window.scrollY + 120;

        sections.forEach(sec => {
            const top = sec.offsetTop;
            const height = sec.offsetHeight;
            const id = sec.getAttribute('id');

            if (scrollPosition >= top && scrollPosition < top + height) {
                document.querySelectorAll('.navbar a').forEach(a => {
                    const href = a.getAttribute('href');
                    if (href && (href === '#' + id || href.endsWith('#' + id))) {
                        a.classList.add('active');
                    } else {
                        a.classList.remove('active');
                    }
                });
            }
        });
    });

    // 6. Slider da Galeria (Sem dependências externas)
    const galleryTrack = document.querySelector('.swiper-wrapper');
    const prevBtn = document.querySelector('.gallery-slider .prev');
    const nextBtn = document.querySelector('.gallery-slider .next');

    if (galleryTrack) {
        const getStep = () => {
            const firstSlide = galleryTrack.querySelector('.slide');
            return firstSlide ? firstSlide.offsetWidth + 20 : 320;
        };

        const isAtEnd = () => {
            return galleryTrack.scrollLeft + galleryTrack.clientWidth >= galleryTrack.scrollWidth - 10;
        };

        if (nextBtn) {
            nextBtn.onclick = () => {
                if (isAtEnd()) {
                    galleryTrack.scrollTo({ left: 0, behavior: 'smooth' });
                } else {
                    galleryTrack.scrollBy({ left: getStep(), behavior: 'smooth' });
                }
            };
        }

        if (prevBtn) {
            prevBtn.onclick = () => {
                if (galleryTrack.scrollLeft <= 10) {
                    galleryTrack.scrollTo({ left: galleryTrack.scrollWidth, behavior: 'smooth' });
                } else {
                    galleryTrack.scrollBy({ left: -getStep(), behavior: 'smooth' });
                }
            };
        }

        // Rotação automática suave a cada 5 segundos
        let autoSlide = setInterval(() => {
            if (isAtEnd()) {
                galleryTrack.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                galleryTrack.scrollBy({ left: getStep(), behavior: 'smooth' });
            }
        }, 5000);

        // Pausa no hover
        galleryTrack.addEventListener('mouseenter', () => clearInterval(autoSlide));
        galleryTrack.addEventListener('mouseleave', () => {
            autoSlide = setInterval(() => {
                if (isAtEnd()) {
                    galleryTrack.scrollTo({ left: 0, behavior: 'smooth' });
                } else {
                    galleryTrack.scrollBy({ left: getStep(), behavior: 'smooth' });
                }
            }, 5000);
        });
    }

    // 7. Visualização / Ocultação de Palavra-passe
    document.querySelectorAll('.password-toggle').forEach(toggle => {
        toggle.addEventListener('click', () => {
            const input = toggle.parentElement.querySelector('input');
            if (input) {
                if (input.type === 'password') {
                    input.type = 'text';
                    toggle.classList.remove('fa-eye');
                    toggle.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    toggle.classList.remove('fa-eye-slash');
                    toggle.classList.add('fa-eye');
                }
            }
        });
    });

    // 8. Auto-remover mensagens flash após 6 segundos
    const flashAlert = document.querySelector('#alert-flash');
    if (flashAlert) {
        setTimeout(() => {
            flashAlert.style.opacity = '0';
            flashAlert.style.transform = 'translateY(-15px)';
            flashAlert.style.transition = 'all 0.4s ease';
            setTimeout(() => flashAlert.remove(), 400);
        }, 6000);
    }

    // 9. Abas na Página de Perfil (profile.php)
    const tabLinks = document.querySelectorAll('.profile-nav-item a[data-tab]');
    const tabPanes = document.querySelectorAll('.tab-pane');

    if (tabLinks.length > 0) {
        // Verificar se há uma hash na URL (ex: profile.php#password)
        const currentHash = window.location.hash.replace('#', '');
        if (currentHash) {
            const targetLink = document.querySelector(`.profile-nav-item a[data-tab="${currentHash}"]`);
            if (targetLink) {
                tabLinks.forEach(l => l.classList.remove('active'));
                tabPanes.forEach(p => p.classList.remove('active'));
                targetLink.classList.add('active');
                const targetPane = document.getElementById(`tab-${currentHash}`);
                if (targetPane) targetPane.classList.add('active');
            }
        }

        tabLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetTab = link.getAttribute('data-tab');

                tabLinks.forEach(l => l.classList.remove('active'));
                tabPanes.forEach(p => p.classList.remove('active'));

                link.classList.add('active');
                const pane = document.getElementById(`tab-${targetTab}`);
                if (pane) {
                    pane.classList.add('active');
                }
                window.location.hash = targetTab;
            });
        });
    }

    // 10. Evitar salto de página em links de teste
    document.querySelectorAll('a[href="#"]').forEach(a => {
        a.addEventListener('click', e => e.preventDefault());
    });
});

