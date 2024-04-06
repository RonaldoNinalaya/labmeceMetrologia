// var BASE_URL = "<?php echo $url_base; ?>"

function mostrarEquipos(equipos, string) {
    const contenedor = document.getElementById(string);

    equipos.forEach((element) => {
        const divCard = document.createElement("div");
        divCard.classList.add("group__circutor");

        const imgCard = document.createElement("img");
        imgCard.classList.add("img__circutor");
        imgCard.src = element.img;
        // imgCard.alt = element.title;

        const titleCard = document.createElement("span");
        titleCard.classList.add('title__circutor');
        titleCard.textContent = element.title;

        const btnRedes = document.createElement("a");
        btnRedes.classList.add("cta__redes");
        btnRedes.textContent = "contizar";
        btnRedes.href = "https://wa.link/vnbx5v";
        btnRedes.target = "_blank";

        contenedor.appendChild(divCard);
        divCard.appendChild(imgCard);
        divCard.appendChild(titleCard);
        divCard.appendChild(btnRedes);
    });
}
function fetchData(urlFetch, contenedor) {
    fetch(urlFetch)
        .then((resp) => resp.json())
        .then((data) => mostrarEquipos(data, contenedor))
        .catch((error) => console.log("Error al obtener los datos" + error));
}

export { fetchData };
