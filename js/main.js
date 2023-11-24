let BotonInicio=document.querySelector('.InicioSesionHeader');
let BotonRegistro=document.querySelector('.RegistrarseHeader');
let BotonRegreso=document.querySelector('.Regresar');
let BotonActualizarVacuna=document.querySelector('.input__Update');

BotonInicio.addEventListener('click', e => {
    document.querySelector('.RegistroContainer').style.display = 'none';
    document.querySelector('.IniciarContainer').style.display = 'flex';
} )
BotonRegistro.addEventListener('click', e => {
    document.querySelector('.IniciarContainer').style.display = 'none';
    document.querySelector('.RegistroContainer').style.display = 'flex';
} )
BotonActualizarVacuna.addEventListener('click', e => {
    document.querySelector('#input_modificador').style.display = 'flex';
} )
