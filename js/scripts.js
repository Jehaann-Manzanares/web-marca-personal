const ipad = window.matchMedia('screen and (max-width: 767px)');
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
Highcharts.chart('container', {

    chart: {
      polar: true,
      type: 'line'
    },
  
    title: {
      text: '',
      x: 80
    },
  
    pane: {
      size: '80%'
    },
  
    xAxis: {
      categories: ['HTML5', 'CSS3', 'JS', 'UI',
        'BD', 'PHP'],
      tickmarkPlacement: 'on',
      lineWidth: 0,
      labels: {
        style: {
           color: '#fff'
        }
     },
     
    },
  
    yAxis: {
      gridLineInterpolation: 'polygon',
      lineWidth: 0,
      min: 0,
      labels: {
        style: {
           color: '#4ebaf9'
        }
     },
    },
  
    tooltip: {
      
      pointFormat: '<b>{point.y:,.0f} %</b>'
    },
  
    legend: {
      align: 'right',
      y: 80,
      layout: 'vertical',
      
    },
  
    series: [{
      
      data: [80, 75, 65, 80, 80, 70],
      pointPlacement: 'on'
    }]
  
  });