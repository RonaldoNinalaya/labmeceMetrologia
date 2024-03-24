
const urlAccesorios = '../json/accesorios.json';

fetch(urlAccesorios).then(resp => resp.json())
    .then(data => mostrarEquipos(data))
    .catch(error => console.log('Error al obtener los datos '+error))

function mostrarEquipos(equipos) {
    const contenedor = document.getElementById('producto-accesorios');


    equipos.forEach(element => {
        const groupAccesorios = document.createElement('div');
        groupAccesorios.classList.add('group__circutor');

        const imgAccesorios = document.createElement('img');
        imgAccesorios.classList.add('img__circutor');
        imgAccesorios.src = element.img;
        

        const titleAccesorios = document.createElement('span');
        titleAccesorios.classList.add('title__accesorios');
        titleAccesorios.textContent = element.title;

        const btnRedes = document.createElement('a');
        btnRedes.classList.add('cta__redes');
        btnRedes.textContent = 'contizar';
        btnRedes.href = 'https://wa.link/vnbx5v';
        btnRedes.target = '_blank'

        contenedor.appendChild(groupAccesorios);
        groupAccesorios.appendChild(imgAccesorios);
        groupAccesorios.appendChild(titleAccesorios);
        groupAccesorios.appendChild(btnRedes);
    });
}