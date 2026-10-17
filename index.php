<?php 


require_once "./includes/html.php";
require_once "./includes/header.php";
?>

<!-- Secção Hero / Início -->
<section class="home" id="home">
    <div class="content">
        <h3>Desfrute da Maravilhosa <br> Aventura no <br> Zoo de Picoas</h3>
        <p>Venha conhecer mais de 100 espécies fascinantes num ambiente natural preservado para toda a família.</p>
        <a href="#animal" class="btn">Conhecer o Zoo de Picoas</a>
    </div>
    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 120' preserveAspectRatio='none'><path fill='%23fff7ee' d='M0 60C240 120 480 0 720 40s480 80 720 20v60H0z'/></svg>"
        alt="Divisor de onda" class="wave">
</section>

<!-- Secção Sobre Nós -->
<section class="about" id="about">
    <h2 class="deco-title">Sobre Nós</h2>
    <div class="box-container">
        <div class="image">
            <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=800&q=80" alt="Leão no Zoo">
        </div>
        <div class="content">
            <h3 class="title">Pode encontrar aqui as espécies mais fascinantes do planeta</h3>
            <p>O Zoo de Picoas é um centro de referência na conservação da biodiversidade, bem-estar animal e educação ambiental. Criamos habitats que replicam fielmente os ecossistemas originais para que possa vivenciar a vida selvagem de perto.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Nós Educamos</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Nós Sensibilizamos</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-book-open"></i>
                    <h3>Preservamos</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Secção Galeria com Slider Suave -->
<section class="gallery" id="gallery">
    <h2 class="heading">Galeria</h2>
    <div class="swiper gallery-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <div class="image"><img src="https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?auto=format&fit=crop&w=800&q=80" alt="Elefante"></div>
            </div>
            <div class="swiper-slide slide">
                <div class="image"><img src="https://images.unsplash.com/photo-1561731216-c3a4d99437d5?auto=format&fit=crop&w=800&q=80" alt="Tigre"></div>
            </div>
            <div class="swiper-slide slide">
                <div class="image"><img src="https://images.unsplash.com/photo-1598439210625-5067c578f3f6?auto=format&fit=crop&w=800&q=80" alt="Pinguins"></div>
            </div>
            <div class="swiper-slide slide">
                <div class="image"><img src="https://images.unsplash.com/photo-1552728089-57bdde30beb3?auto=format&fit=crop&w=800&q=80" alt="Arara"></div>
            </div>
            <div class="swiper-slide slide">
                <div class="image"><img src="https://images.unsplash.com/photo-1534567153574-2b12153a87f0?auto=format&fit=crop&w=800&q=80" alt="Chita"></div>
            </div>
        </div>
        <button type="button" class="nav prev fas fa-chevron-left" aria-label="Anterior"></button>
        <button type="button" class="nav next fas fa-chevron-right" aria-label="Seguinte"></button>
    </div>
</section>

<!-- Secção Animais -->
<section class="animal" id="animal">
    <h2 class="heading">Animais em Destaque</h2>
    <div class="box-container">
        <div class="box">
            <img src="https://images.unsplash.com/photo-1500463959177-e0869687df26?auto=format&fit=crop&w=600&q=80" alt="Camaleão">
            <div class="content">
                <h3>Camaleão</h3>
                <a href="#contact" class="btn">Ver Detalhes</a>
            </div>
        </div>
        <div class="box">
            <img src="https://images.unsplash.com/photo-1509773896068-7fd415d91e2e?auto=format&fit=crop&w=600&q=80" alt="Zebra">
            <div class="content">
                <h3>Zebra Africana</h3>
                <a href="#contact" class="btn">Ver Detalhes</a>
            </div>
        </div>
        <div class="box">
            <img src="https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=600&q=80" alt="Girafa">
            <div class="content">
                <h3>Girafa</h3>
                <a href="#contact" class="btn">Ver Detalhes</a>
            </div>
        </div>
        <div class="box">
            <img src="https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?auto=format&fit=crop&w=600&q=80" alt="Macaco">
            <div class="content">
                <h3>Macaco</h3>
                <a href="#contact" class="btn">Ver Detalhes</a>
            </div>
        </div>
    </div>
</section>

<!-- Secção Banner Destaque -->
<section class="banner">
    <div class="row">
        <div class="content">
            <h3>Visitas Guiadas com Tratadores</h3>
            <p>Conheça os bastidores das rotinas de alimentação, cuidados veterinários e enriquecimento ambiental dos animais com a nossa equipa de biólogos e tratadores dedicados.</p>
            <a href="login.php?tab=register" class="btn">Agendar Experiência</a>
        </div>
        <div class="image">
            <img src="https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?auto=format&fit=crop&w=700&q=80" alt="Panda no Parque">
        </div>
    </div>
</section>

<!-- Secção Preçário de Bilhetes -->
<section class="pricing" id="pricing">
    <h2 class="heading">Preçário de Bilhetes</h2>
    <div class="box-container">
        <div class="box">
            <img src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&fit=crop&w=400&q=80" alt="Bilhete Individual">
            <h3>Individual</h3>
            <h4 class="price">10 €</h4>
            <p>Acesso completo ao recinto animal das 08:00 às 19:00.</p>
            <a href="login.php?tab=register" class="btn">Reservar</a>
        </div>

        <div class="box">
            <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=400&q=80" alt="Bilhete Escolar">
            <h3>Escolas & Grupos</h3>
            <h4 class="price">20 €</h4>
            <p>Preço de grupo inclui guia educacional e material pedagógico.</p>
            <a href="login.php?tab=register" class="btn">Reservar</a>
        </div>

        <div class="box">
            <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=400&q=80" alt="Bilhete Família">
            <h3>Pacote Família</h3>
            <h4 class="price">30 €</h4>
            <p>Válido para 2 Adultos e até 3 Crianças com atividades incluídas.</p>
            <a href="login.php?tab=register" class="btn">Reservar</a>
        </div>
    </div>
</section>

<!-- Secção Formulário de Contacto -->
<section class="contact" id="contact">
    <h2 class="heading">Fale Connosco</h2>
    <form action="#" method="post">
        <div class="inputBox">
            <input type="text" placeholder="O seu nome completo" required>
            <input type="email" placeholder="O seu e-mail" required>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Número de telefone (opcional)">
            <input type="text" placeholder="Assunto da mensagem">
        </div>
        <textarea cols="30" rows="10" placeholder="A sua mensagem ou dúvida..." required></textarea>
        <button type="submit" class="btn">Enviar Mensagem</button>
    </form>
</section>

<?php 
require_once "./includes/footer.php";
?>