const ipad = window.matchMedia('screen and (max-width: 769px)');
const menu = document.querySelector('.menu');
const logo = document.querySelector('.logo')
const BurgerButton = document.querySelector('#burger-menu');


ipad.addListener(validation)

    function validation(event) {
      if (event.matches) {
        BurgerButton.addEventListener('click', hideShow);

      }else{
        BurgerButton.removeEventListener('click',hideShow)
        logo.innerHTML = "{Jehaann Manzanares}"
      }
    }

    validation(ipad);

    function hideShow(){
      if (menu.classList.contains('is-active')) {
        menu.classList.remove('is-active');
      }else{
        menu.classList.add('is-active');

      }
    }
    /*Ocultar menu al hacer click en una opcion */
    menu.addEventListener('click', function(){
      menu.classList.remove('is-active');
    });


/*******************************
  EFECT SCROLL UP MENU

********************************/
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {

  var currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}


/*******************************
  EFECT SCROLL UP MENU

********************************/
