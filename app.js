function redirigirPagina() {

    const select = document.getElementById('select');

    const opcionSeleccionada = select.value;

    if (opcionSeleccionada === 'Estudiante') {
        window.location.href = '/EstudianteHTML/inicioo.html';
    } else if (opcionSeleccionada === 'Auxiliar de Cocina') {
        window.location.href = '/AuxiliarHTML/inicioo.html';
    }
    return false;
}

const sign_in_btn= document.querySelector("#sign-in-btn");
const sign_up_btn= document.querySelector("#sign-up-btn");
const container= document.querySelector(".container");

sign_up_btn.addEventListener('click', ()=>{
    container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener('click', ()=>{
    container.classList.remove("sign-up-mode");
});