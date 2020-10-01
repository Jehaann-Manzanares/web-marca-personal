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

  let elem = document.querySelectorAll('.animacion'); // obtengo el elemento por id
  let tamano_window = window.innerHeight/2
  
  for (let i = 0; i < elem.length; i++) {
    
    let topElemD = elem[i].getBoundingClientRect().top; 
    
    (Math.trunc(topElemD) < tamano_window)
      ? elem[i].classList.add('active') 
      : console.log('nada') 

  }
  
  
}



/*******************************
  EFECT SCROLL UP MENU

********************************/

