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
        enlaces.className = ('enlaces  uno')
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

//menu pegajoso
var stickymenu = document.getElementById("menu-auto")



var stickymenuoffset = stickymenu.offsetTop


window.addEventListener("scroll", function(e){
    requestAnimationFrame(function(){
        if (window.pageYOffset > stickymenuoffset){


            stickymenu.classList.add('stickymenu')
        }
        else{

            stickymenu.classList.remove('stickymenu')

        }




    })
})
