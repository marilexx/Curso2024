let ofertas = document.getElementById('ofertas');
let cochesyfurgoneas = document.getElementById('cochesyFurgonetas');
let destinos = document.getElementById('destinos');
let empresas = document.getElementById('empresas');

console.log(empresas);

ofertas.addEventListener("click",escribirOferta);
     
cochesyfurgoneas.addEventListener("click",escribirCochesYFurgonetas);

destinos.addEventListener("click",escribirDestino);

destinos.addEventListener("click",escribirEmpresas);

function escribirOferta(parm){


    alert("Has pulsado oferta " + parm);
   

}



function escribirCochesYFurgonetas(){


    alert("Has pulsado Coches y Furgonetas");
   

}


function escribirCochesYFurgonetas(){


    alert("Has pulsado Coches y Furgonetas");
   

}

function escribirDestino(){


    alert("Has pulsado destinos");
   

}


function escribirEmpresas(){


    alert("Has pulsado empresas");
   

}


let botonCambioTexto = document.getElementById('botonCambioTexto');
let textoaCambiar = document.getElementById('textoaCambiar');

botonCambioTexto.addEventListener("click",funcionCambioTxt);


let textocambio = "HOLA";


function funcionCambioTxt(){
    textoaCambiar.textContent = textocambio;
}

