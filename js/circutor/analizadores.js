
const urlAnalizadores = './json/analizadores-de-redes.json'

fetch(urlAnalizadores).then(resp => resp.json())
    .then(data => mostrarEquipos(data))
    .catch(error => console.log('Error al obtener los datos' +error))

function mostrarEquipos(equipos){
    const contenedor = document.getElementById('producto-analizadores');

    equipos.forEach(element => {
        const divCard = document.createElement('div');
        divCard.classList.add('group__circutor');

        const cardImg = document.createElement('img');
        cardImg.classList.add('img__circutor')
        cardImg.src = element.imagen;

        const titleEquipo = document.createElement('span');
        titleEquipo.textContent = element.title;

        const btnRedes = document.createElement('a');
        btnRedes.classList.add('cta__redes');
        btnRedes.textContent = 'contizar';
        btnRedes.href = 'https://wa.link/vnbx5v';
        btnRedes.target = '_blank'


        contenedor.appendChild(divCard);
        divCard.appendChild(cardImg);
        divCard.appendChild(titleEquipo);
        divCard.appendChild(btnRedes);
    });
}

