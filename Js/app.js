
document.addEventListener("DOMContentLoaded"), () => {

    console.log("Las Noticias de Impacto");

}

const img = document.getElementById("bannerImg");
const rango = document.getElementById("posicion");

rango.addEventListener("input", () => {
    img.style.objectPosition = `center ${rango.value}%`;

});