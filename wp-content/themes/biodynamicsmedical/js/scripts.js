var boton = document.getElementById('icono')
var enlaces = document.getElementById('enlaces')
var contador = 0
var render = document.getElementById('render')
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


window.addEventListener("scroll", function(e) {
    requestAnimationFrame(function () {
        if (window.pageYOffset > stickymenuoffset) {
            stickymenu.classList.add('stickymenu')
        } else {
            stickymenu.classList.remove('stickymenu')
        }
    })
})

/*filtrar los card*/
var var_exist = document.getElementById('funtionExist')
if(var_exist) {
   var app=  new Vue({
        el: "#vue",
        data() {
            return {
                title: 'Todas las categorias',
                categoria1: true,
                categoria2: true,
                categoria3: true
            }
        },
        methods: {
            showCategoriaTotal(){
                this.title = 'Todas las categorias',
                this.categoria1 = true
                this.categoria2 = true
                this.categoria3 = true
            },
            showCategoria1() {
                this.title = 'categoria1'
                this.categoria1 = true
                this.categoria2 = false
                this.categoria3 = false
            },
            showCategoria2() {
                this.title = 'categoria2'
                this.categoria1 = false
                this.categoria2 = true
                this.categoria3 = false
            },
            showCategoria3() {
                this.title = 'categoria3'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = true


            }

        }
    })
}
