<?php 
    require_once "./includes/html.php";
    require_once "./includes/header.php";
?>

<section id="profileHeader">
    <div class="foto">
        <h1>A</h1>
    </div>
    <div class="infoContainer">
        <h1>André Martins</h1> 
        <p><i class="fas fa-envelope"></i> andre@martins.pt</p> 
        <br>
        <div><i class="fas fa-user"></i> <p>andreziindomal</p> </div>
        <div><i class="fas fa-phone"></i> <p>916 767 667</p> </div>
        <div><i class="fas fa-calendar"></i> <p>Membro desde: 2026</p> </div>
    </div>
</section>

<section id="profileInfo">
    <div class="infoHeader">
        <button type="button" class="active" onclick="mostrarInfo('animais')">
            <i class="fas fa-paw"></i> Animais
        </button>
        <button type="button" onclick="mostrarInfo('bilhetes')">
            <i class="fas fa-ticket-alt"></i> Bilhetes
        </button>
    </div>

    <!-- Secção Animais Favoritos -->
    <div class="animaisProfile">
        <h2>Animais Favoritos <i class="fas fa-heart"></i></h2>
        <div class="grid-cards">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1548767797-d8c844163c4c?auto=format&fit=crop&w=600&q=80" alt="Cão da Pradaria">
                <div>
                    <h3>Cão da Pradaria</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <input type="hidden" name="animal_id" value="animal">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1534567153574-2b12153a87f0?auto=format&fit=crop&w=600&q=80" alt="Chita">
                <div>
                    <h3>Chita Africana</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

           
        </div>
    </div>

    <!-- Secção Bilhetes -->
    <div class="bilhetesProfile" style="display: none;">
        <h2>Bilhetes <i class="fas fa-ticket-alt"></i></h2>
        <div class="grid-cards">
            <div class="card">
                <div>
                    <span class="ticket-badge">Passe Familiar</span>
                    <h3><i class="fas fa-ticket-alt"></i> Bilhete Familiar</h3>
                    <p><i class="fas fa-users"></i> 2 Adultos + 2 Crianças</p>
                    <p><i class="fas fa-calendar-check"></i> Válido até 31/12/2026</p>
                </div>
                <form action="" method="POST">
                    <button type="submit"><i class="fas fa-qrcode"></i> Usar Bilhete</button>
                </form>
            </div>

            <div class="card">
                <div>
                    <span class="ticket-badge">Acesso Geral</span>
                    <h3><i class="fas fa-ticket-alt"></i> Entrada Individual</h3>
                    <p><i class="fas fa-user"></i> 1 Adulto (Dia Inteiro)</p>
                    <p><i class="fas fa-calendar-check"></i> Válido até 15/11/2026</p>
                </div>
                <form action="" method="POST">
                    <button type="submit"><i class="fas fa-qrcode"></i> Usar Bilhete</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
require_once "./includes/footer.php";
?>