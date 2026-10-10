const apiKey = "2HML10DNlVHJkcfq6rn7J3SgyWOcxPja4NeBImvd";
const animalName = "lion";

fetch(`https://api.api-ninjas.com/v1/animals?name=${animalName}`, {
    headers: {
        "X-Api-Key": apiKey
    }
})
.then(response => response.json())
.then(data => {

    const animal = data[0];

    const nome = animal.name;
    const nomeCientifico = animal.taxonomy?.scientific_name;
    const classe = animal.taxonomy?.class;
    const familia = animal.taxonomy?.family;

    const localizacao = animal.locations?.join(", ");

    const habitat = animal.characteristics?.habitat;
    const dieta = animal.characteristics?.diet;
    const peso = animal.characteristics?.weight;
    const velocidade = animal.characteristics?.top_speed;
    const esperancaVida = animal.characteristics?.lifespan;

    console.log("Nome:", nome);
    console.log("Nome científico:", nomeCientifico);
    console.log("Classe:", classe);
    console.log("Família:", familia);
    console.log("Localização:", localizacao);
    console.log("Habitat:", habitat);
    console.log("Dieta:", dieta);
    console.log("Peso:", peso);
    console.log("Velocidade:", velocidade);
    console.log("Esperança de vida:", esperancaVida);
})
.catch(error => {
    console.error("Erro:", error);
});