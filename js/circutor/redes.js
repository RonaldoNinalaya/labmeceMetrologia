

const url = '../json/redes-y-calidad.json';

fetch(url).then(resp => resp.json())
    .then(data => mostrarEquipos(data))
    .catch(error => console.log('Error al obtener los datos' + error));

function mostrarEquipos(equipos) {
    const contenedor = document.getElementById('producto--redes-calidad');

    equipos.forEach(item => {
        const divEquipos = document.createElement('div');
        divEquipos.classList.add('group__circutor');


        const imgEquipo = document.createElement('img');
        imgEquipo.classList.add('img__circutor')
        imgEquipo.src = item.imagen;

        const titleEquipo = document.createElement('span');
        titleEquipo.textContent = item.nombre;

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

};
