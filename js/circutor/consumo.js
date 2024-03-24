
const urlConsumo = '../json/analizadores-de-consumo.json';

fetch(urlConsumo).then(resp => resp.json())
    .then(data => mostrarEquipos(data))
    .catch(error => console.log('Error al obtener los datos' +error));

function mostrarEquipos(equipos){
    const contenedor = document.getElementById('producto-consumo');

    equipos.forEach(element => {
        const divEquipos = document.createElement('div');
        divEquipos.classList.add('group__circutor');

        const imgEquipo = document.createElement('img');
        imgEquipo.classList.add('img__circutor')
        imgEquipo.src = element.imagen;

        const titleEquipo = document.createElement('span');
        titleEquipo.textContent = element.title;

        const btnRedes = document.createElement('a');
        btnRedes.classList.add('cta__redes');
        btnRedes.textContent = 'contizar';
        btnRedes.href = 'https://wa.link/vnbx5v';
        btnRedes.target = '_blank'


        contenedor.appendChild(divEquipos);
        divEquipos.appendChild(imgEquipo);
        divEquipos.appendChild(titleEquipo);
        divEquipos.appendChild(btnRedes);

    });
}
