let BotonInicio=document.querySelector('.InicioSesionHeader');
let BotonRegistro=document.querySelector('.RegistrarseHeader');
let BotonRegreso=document.querySelector('.Regresar');

BotonInicio.addEventListener('click', e => {
    document.querySelector('.RegistroContainer').style.display = 'none';
    document.querySelector('.IniciarContainer').style.display = 'block';
} )
BotonRegistro.addEventListener('click', e => {
    document.querySelector('.IniciarContainer').style.display = 'none';
    document.querySelector('.RegistroContainer').style.display = 'block';
} )
