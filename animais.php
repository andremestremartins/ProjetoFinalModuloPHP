<?php 
    require_once "./includes/html.php";
    require_once "./includes/header.php";
?>




    <div class="animaisProfile">
        <h1>Animais</h1>
        <div class="animaisfiltros">
            
        </div>
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



<?php 
require_once "./includes/footer.php";
?>