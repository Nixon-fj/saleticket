//funciones del menu
function openMenu(){
    let menuMob=document.body.getElementsByClassName('nav')[0];
    menuMob.style.left="0";
}
function closeMenu(){
    let menuMob=document.body.getElementsByClassName('nav')[0];
    menuMob.style.left="-35em";
}
//funciones del slider
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var img = document.getElementsByClassName("img-slider");
  for (i = 0; i < img.length; i++) {
    img[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > img.length) {slideIndex = 1}
  img[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000);
}