<?php
require_once "./includes/html.php";
require_once "./includes/header.php";
?>

<section class="animais-page">

    <div class="animais-topo">
        <h1>Animais do Zoo</h1>
        <p>Conheça todas as espécies fascinantes que vivem no Zoo de Picoas.</p>
    </div>

    <form class="filtroszone" action="animais.php" method="GET">

        <div class="filtro">
            <label for="pesquisa">Pesquisar animal</label>
            <input
                type="search"
                id="pesquisa"
                name="pesquisa"
                placeholder="Nome do animal..."
                value="<?= htmlspecialchars($_GET['pesquisa'] ?? '') ?>">
        </div>

        <div class="filtro">
            <label for="especie">Espécie</label>
            <select id="especie" name="especie">
                <option value="">Todas as espécies</option>
                <option value="Mamífero">Mamíferos</option>
                <option value="Ave">Aves</option>
                <option value="Réptil">Répteis</option>
                <option value="Anfíbio">Anfíbios</option>
                <option value="Peixe">Peixes</option>
            </select>
        </div>

        <div class="filtro">
            <label for="habitat">Habitat</label>
            <select id="habitat" name="habitat">
                <option value="">Todos os habitats</option>
                <option value="Savana">Savana</option>
                <option value="Floresta">Floresta</option>
                <option value="Selva tropical">Selva tropical</option>
                <option value="Deserto">Deserto</option>
                <option value="Aquático">Aquático</option>
                <option value="Polar">Polar</option>
            </select>
        </div>

        <div class="filtro">
            <label for="alimentacao">Alimentação</label>
            <select id="alimentacao" name="alimentacao">
                <option value="">Todos os tipos</option>
                <option value="Herbívoro">Herbívoro</option>
                <option value="Carnívoro">Carnívoro</option>
                <option value="Omnívoro">Omnívoro</option>
            </select>
        </div>

        <div class="filtro">
            <label for="continente">Continente</label>
            <select id="continente" name="continente">
                <option value="">Todos os continentes</option>
                <option value="África">África</option>
                <option value="América do Norte">América do Norte</option>
                <option value="América do Sul">América do Sul</option>
                <option value="Ásia">Ásia</option>
                <option value="Europa">Europa</option>
                <option value="Oceânia">Oceânia</option>
                <option value="Antártida">Antártida</option>
            </select>
        </div>

        <div class="filtro">
            <label for="ordenar">Ordenar por</label>
            <select id="ordenar" name="ordenar">
                <option value="nome_asc">Nome (A–Z)</option>
                <option value="nome_desc">Nome (Z–A)</option>
                <option value="recentes">Mais recentes</option>
            </select>
        </div>

        <div class="filtros-acoes">
            <button type="submit">Filtrar animais</button>
            <a href="animais.php">Limpar filtros</a>
        </div>

    </form>

    <div class="animais">
        <h2>Todos os Animais <i class="fas fa-paw"></i></h2>

        <div class="grid-cards">

            <div class="card">
                <img src="https://images.unsplash.com/photo-1548767797-d8c844163c4c?auto=format&fit=crop&w=600&q=80" alt="Cão da Pradaria">
                <div>
                    <h3>Cão da Pradaria</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <input type="hidden" name="animal_id" value="cao-da-pradaria">
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
                    <input type="hidden" name="animal_id" value="chita">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=600&q=80" alt="Leão Africano">
                <div>
                    <h3>Leão Africano</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <input type="hidden" name="animal_id" value="leao">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=600&q=80" alt="Girafa">
                <div>
                    <h3>Girafa de Angola</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <input type="hidden" name="animal_id" value="girafa">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1561731216-c3a4d99437d5?auto=format&fit=crop&w=600&q=80" alt="Tigre de Bengala">
                <div>
                    <h3>Tigre de Bengala</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <input type="hidden" name="animal_id" value="tigre">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?auto=format&fit=crop&w=600&q=80" alt="Panda Gigante">
                <div>
                    <h3>Panda Gigante</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <input type="hidden" name="animal_id" value="panda">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1552728089-57bdde30beb3?auto=format&fit=crop&w=600&q=80" alt="Arara Escarlate">
                <div>
                    <h3>Arara Escarlate</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <input type="hidden" name="animal_id" value="arara">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1598439210625-5067c578f3f6?auto=format&fit=crop&w=600&q=80" alt="Pinguins">
                <div>
                    <h3>Pinguim de Humboldt</h3>
                    <i class="fas fa-heart"></i>
                </div>
                <form action="index.php#animal" method="GET">
                    <input type="hidden" name="animal_id" value="pinguim">
                    <button type="submit">Ver Mais</button>
                </form>
            </div>

        </div>
    </div>

</section>

<?php
require_once "./includes/footer.php";
?>