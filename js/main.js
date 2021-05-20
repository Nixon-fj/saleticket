//funciones del menu
function openMenu() {
  let menuMob = document.body.getElementsByClassName('nav')[0];
  menuMob.style.left = "0";
}
function closeMenu() {
  let menuMob = document.body.getElementsByClassName('nav')[0];
  menuMob.style.left = "-35em";
}

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
