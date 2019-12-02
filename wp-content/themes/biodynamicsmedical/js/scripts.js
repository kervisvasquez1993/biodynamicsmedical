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
                title: 'Trauma',
                categoria1: true,
                categoria2: true,
                categoria3: true,
                categoria4: true,
                categoria5: true,

            }
        },
        methods: {

           /*trauma*/
            showCategoriaTotal(){
                this.title = 'Trauma',
                this.categoria1 = true
                this.categoria2 = true
                this.categoria3 = true
                this.categoria4 = true
                this.categoria5 = true
            },
            showCategoria1() {
                this.title = 'Sistema DHS/DCS-II'
                this.categoria1 = true
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria2() {
                this.title = 'Sistema de Tornillo'
                this.categoria1 = false
                this.categoria2 = true
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria3() {
                this.title = 'Sistema BioNail AR'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = true
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria4() {
                this.title = 'Sistema Biolock'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = true
                this.categoria5 = false
            },
            showCategoria5() {
                this.title = 'Sistema MIS'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = true
            }
            /*fin de trauma*/
            /* inicio de columna*/

        }
    })
}
var var_exist_columna = document.getElementById('var_exist_columna')
if(var_exist_columna) {

    var app=  new Vue({
        el: "#vue-columna",
        data() {
            return {
                title: 'Columna',
                categoria1: true,
                categoria2: true,
                categoria3: true,
                categoria4: true,
                categoria5: true,

            }
        },
        methods: {

            /*trauma*/
            showCategoriaTotal(){
                this.title = 'Columna',
                    this.categoria1 = true
                this.categoria2 = true
                this.categoria3 = true
                this.categoria4 = true
                this.categoria5 = true
            },
            showCategoria1() {
                this.title = 'Columna1'
                this.categoria1 = true
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria2() {
                this.title = 'Columna2'
                this.categoria1 = false
                this.categoria2 = true
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria3() {
                this.title = 'Columna3'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = true
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria4() {
                this.title = 'Columna4'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = true
                this.categoria5 = false
            },
            showCategoria5() {
                this.title = 'Columna5'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = true
            }
            /*fin de trauma*/
            /* inicio de columna*/

        }
    })
}
/*inicio de maxilofacial*/

var maxilo = document.getElementById('maxilo')
if(maxilo){
    var app=  new Vue({
        el: "#vue-max",
        data() {
            return {
                title: 'Maxilofacial',
                categoria1: true,
                categoria2: true,
                categoria3: true,
                categoria4: true,
                categoria5: true,

            }
        },
        methods: {

            /*trauma*/
            showCategoriaTotal(){
                this.title = 'Maxilofacial',
                this.categoria1 = true
                this.categoria2 = true
                this.categoria3 = true
                this.categoria4 = true
                this.categoria5 = true
            },
            showCategoria1() {
                this.title = 'Columna1'
                this.categoria1 = true
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria2() {
                this.title = 'Columna2'
                this.categoria2 = true
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria3() {
                this.title = 'Columna3'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = true
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria4() {
                this.title = 'Columna4'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = true
                this.categoria5 = false
            },
            showCategoria5() {
                this.title = 'Columna5'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = true
            }
            /*fin de trauma*/
            /* inicio de columna*/

        }
    })
}

var productos = document.getElementById('productos')
if(productos){
    var app=  new Vue({
        el: "#vue-product",
        data() {
            return {
                title: 'Producto',
                categoria1: true,
                categoria2: true,
                categoria3: true,
                categoria4: true,
                categoria5: true,

            }
        },
        methods: {

            /*trauma*/
            showCategoriaTotal(){
                this.title = 'Producto',
                    this.categoria1 = true
                this.categoria2 = true
                this.categoria3 = true
                this.categoria4 = true
                this.categoria5 = true
            },
            showCategoria1() {
                this.title = 'Producto1'
                this.categoria1 = true
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria2() {
                this.title = 'Producto2'
                this.categoria2 = true
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria3() {
                this.title = 'Producto3'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = true
                this.categoria4 = false
                this.categoria5 = false
            },
            showCategoria4() {
                this.title = 'Producto4'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = true
                this.categoria5 = false
            },
            showCategoria5() {
                this.title = 'Producto5'
                this.categoria1 = false
                this.categoria2 = false
                this.categoria3 = false
                this.categoria4 = false
                this.categoria5 = true
            }
            /*fin de trauma*/
            /* inicio de columna*/

        }
    })

}