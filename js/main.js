//funciones del menu
function openMenu() {
  let menuMob = document.body.getElementsByClassName('nav')[0];
  menuMob.style.left = "0";
}
function closeMenu() {
  let menuMob = document.body.getElementsByClassName('nav')[0];
  menuMob.style.left = "-35em";
}

//carousel
/*let slideIndex = 0;
carousel();

function carousel() {
  let i;
  let img = document.getElementsByClassName("img-slider");
  for (i = 0; i < img.length; i++) {
    img[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > img.length) { slideIndex = 1 }
  img[slideIndex - 1].style.display = "block";
  setTimeout(carousel, 2000);
}*/

//buscador
function search() {
  console.log("buscando");
}

//registar
function registrar() {

  let window = document.body.getElementsByClassName("container-confirm")[0];

  window.style.display="block";
  
  console.log("Registrado");
}
function closeConfirm(){
  let window = document.body.getElementsByClassName("container-confirm")[0];
  window.style.display="none";
}
