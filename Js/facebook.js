document.addEventListener("DOMContentLoaded", () => {
    cargarPublicaciones();
});

async function cargarPublicaciones() {

    try {

        const respuesta = await fetch("api/facebook.php");
        const datos = await respuesta.json();

        const contenedor = document.getElementById("posts");

        contenedor.innerHTML = "";

        if (!datos.data || datos.data.length === 0) {

            contenedor.innerHTML = `
                <div class="sin-posts">
                    No hay publicaciones disponibles.
                </div>
            `;

            return;

        }

        datos.data.forEach(post => {

            let media = "";

            // Imagen
            if (post.full_picture) {

                media = `
           <img src="${post.full_picture}" loading="lazy">
                `;

            }

            // Detectar Reel
            if (post.permalink_url &&
                post.permalink_url.includes("/reel/")) {

                media += `
                    <div class="tipo-post reel">

                        ▶ Reel de Facebook

                    </div>
                `;

            }

            // Detectar Video
            else if (
                post.attachments &&
                post.attachments.data &&
                post.attachments.data[0] &&
                post.attachments.data[0].type &&
                post.attachments.data[0].type.includes("video")
            ) {

                media += `
                    <div class="tipo-post video">

                        🎥 Video

                    </div>
                `;

            }

            // Detectar Carrusel
            else if (
                post.attachments &&
                post.attachments.data &&
                post.attachments.data.length > 1
            ) {

                media += `
                    <div class="tipo-post galeria">

                        🖼 Galería

                    </div>
                `;

            }

            // Solo texto
            else if (!post.full_picture) {

                media = `
                    <div class="tipo-post texto">

                        📰 Publicación

                    </div>
                `;

            }

            let fecha = "";

            if (post.created_time) {

                fecha = new Date(post.created_time)
                    .toLocaleDateString("es-CO", {

                        year: "numeric",
                        month: "long",
                        day: "numeric"





                    });

                if (window.FB) {

                    FB.XFBML.parse();

                }

            }

            const esVideo =
                post.permalink_url &&
                (
                    post.permalink_url.includes("/reel/") ||
                    post.permalink_url.includes("/videos/")
                );

            contenedor.innerHTML += `

<article class="post-card">

    <div class="post-media">

       ${esVideo
    ?
    `
    <div class="post-media">

        <img src="${post.full_picture}" alt="">

        <a href="${post.permalink_url}"
           target="_blank"
           class="play-video">

            ▶

        </a>

    </div>
    `
    :
    media
}

    </div>

    <div class="post-content">

        <span class="post-date">

            ${fecha}

        </span>

        <p>

            ${post.message ?? ""}

        </p>

        <a href="${post.permalink_url}"
           target="_blank"
           class="btn-post">

            Ver publicación

        </a>

    </div>

</article>

`;

        });

    }

    catch (error) {

        console.error(error);

    }

}