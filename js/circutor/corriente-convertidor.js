
const urlCovertidor = '../json/corriente-convertidor.json'


fetch(urlCovertidor).then(resp => resp.json())
    .then(data => mostrarEquipos(data))
    .catch(error => console.log('Se econtro un error en los datos'+error))

function mostrarEquipos(equipos){
    const contenedor = document.getElementById('producto--redes-calidad')
    equipos.forEach(element => {
        const divCard = document.createElement('div');
        divCard.classList.add('group__circutor');

        const imgCard = document.createElement('img');
        imgCard.src= element.imagen;


        contenedor.appendChild(divCard);
        divCard.appendChild(imgCard);
    });
}