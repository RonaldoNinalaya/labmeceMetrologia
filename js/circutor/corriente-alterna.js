

const urlCorrienteAlterna = '../json/corriente-alterna.json';


fetch(urlCorrienteAlterna).then(resp => resp.json())
    .then(data => mostrarEquipos(data))
    .catch(error => console.log('hubo un error en los datos '+error));

function mostrarEquipos(equipos){
    const contenedor = document.getElementById('producto__corriente-alterna');

    equipos.forEach(element => {
        const divCard = document.createElement('div');
        divCard.classList.add('group__circutor');

        const imgCard = document.createElement('img');
        imgCard.classList.add('img__circutor')
        imgCard.src = element.img;
        // imgCard.alt = element.title;

        const titleCard = document.createElement('span');
        titleCard.textContent = element.title;

        
        const btnRedes = document.createElement('a');
        btnRedes.classList.add('cta__redes');
        btnRedes.textContent = 'contizar';
        btnRedes.href = 'https://wa.link/vnbx5v';
        btnRedes.target = '_blank'


        contenedor.appendChild(divCard);
        divCard.appendChild(imgCard);
        divCard.appendChild(titleCard);
        divCard.appendChild(btnRedes);
    });
}