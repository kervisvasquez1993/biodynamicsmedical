var boton = document.getElementById('icono')
var enlaces = document.getElementById('enlaces')
var contador = 0
boton.addEventListener('click', function(){
    if (contador == 0){
        enlaces.className = ('enlaces dos');
        contador = 1
    }
    else{
        enlaces.classList.remove('dos')
        enlaces.className = ('enlaces uno')
        contador = 0
    }
})

window.addEventListener('resize', function () {
    if (screen.width > 980){
        enlaces.classList.remove('dos')
        enlaces.className = ('enlaces uno')
      contador = 0


    }
})
