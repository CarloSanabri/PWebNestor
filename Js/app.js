document.addEventListener("DOMContentLoaded", () => {

    console.log("Las Noticias de Impacto");

    // Control opcional de posición del banner (solo corre si los elementos existen)
    const img = document.getElementById("bannerImg");
    const rango = document.getElementById("posicion");

    if (img && rango) {

        rango.addEventListener("input", () => {
            img.style.objectPosition = `center ${rango.value}%`;
        });

    }

});