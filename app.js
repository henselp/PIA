function cambiarContenido() {
    var selectElement = document.getElementById("select");
    var selectedOption = selectElement.value;

    // Ocultar todos los contenidos
    document.getElementById("contenidoComunidad").style.display = "none";
    document.getElementById("contenidoEstudiante").style.display = "none";
    document.getElementById("contenidoAuxiliar").style.display = "none";

    // Ocultar todos los menús
    document.getElementById("menuAuxiliar").style.display = "none";
    document.getElementById("menuEstudiante").style.display = "none";

    // Mostrar el contenido y el menú correspondientes a la selección
    if (selectedOption === "Estudiante") {
        document.getElementById("contenidoEstudiante").style.display = "block";
        document.getElementById("menuEstudiante").style.display = "block";
    } else if (selectedOption === "Auxiliar de Cocina") {
        document.getElementById("contenidoAuxiliar").style.display = "block";
        document.getElementById("menuAuxiliar").style.display = "block";
    } else {
        document.getElementById("contenidoComunidad").style.display = "block";
    }
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