//Extraigo el id del p, para ir cambiando el contenido

let comentario = document.getElementById('comentario');
let comentario3 = document.getElementById('comentario3');
let comentario4 = document.getElementById('comentario4');

// Extraigo el div principal que contiene el test:

let contenedoruno = document.getElementById('pregunta1');
let contenedordos = document.getElementById('pregunta2');
let contenedortres = document.getElementById('pregunta3');
let contenedorcuatro = document.getElementById('pregunta4');
let contenedorcinco = document.getElementById('pregunta5');
let contenedorseis = document.getElementById('pregunta6');


// Extraigo las posibles respuestas:

let respuesta1A = document.getElementById('respuesta1A');
let respuesta1B = document.getElementById('respuesta1B');
let respuesta1C = document.getElementById('respuesta1C');

let respuesta2A = document.getElementById('respuesta2A');
let respuesta2B = document.getElementById('respuesta2B');
let respuesta2C = document.getElementById('respuesta2C');

let respuesta3A = document.getElementById('respuesta3A');
let respuesta3B = document.getElementById('respuesta3B');
let respuesta3C = document.getElementById('respuesta3C');

let respuesta4A = document.getElementById('respuesta4A');
let respuesta4B = document.getElementById('respuesta4B');
let respuesta4C = document.getElementById('respuesta4C');

let respuesta5A = document.getElementById('respuesta5A');
let respuesta5B = document.getElementById('respuesta5B');
let respuesta5C = document.getElementById('respuesta5C');

let respuesta6A = document.getElementById('respuesta6A');
let respuesta6B = document.getElementById('respuesta6B');
let respuesta6C = document.getElementById('respuesta6C');


//Declaro un contador de resultado, que apaetir de ese numero tendré un resultado que mostrar al usuario.

let resultado;

//Realizo las funciones, una para cada boton:


//PRIMERA PREGUNTA

respuesta1A.addEventListener('click', function() {

        contenedoruno.classList.add('ocultar');
        contenedordos.classList.remove('ocultar');

        comentario.innerHTML = 'Eres esa persona que siempre acaba con más amigos de los que trajo. Probablemente tengas fotos con gente que ni conoces.';
        resultado+=0;
  
});

respuesta1B.addEventListener('click', function() {

    contenedoruno.classList.add('ocultar');
    contenedordos.classList.remove('ocultar');

    comentario.innerHTML = 'No odias la fiesta, pero tampoco te casas con ella. Eres como el que va a las bodas solo por el pastel, pero con dignidad.';
    resultado+=1;

});

respuesta1C.addEventListener('click', function() {

    contenedoruno.classList.add('ocultar');
    contenedordos.classList.remove('ocultar');

    comentario.innerHTML = 'Para ti, la verdadera fiesta es cuando te vas. Si las paredes hablaran, te pedirían perdón por no ser más altas.';
    resultado+=2;

});


//SEGUNDA PREGUNTA:

respuesta2A.addEventListener('click', function() {

    contenedordos.classList.add('ocultar');
    contenedortres.classList.remove('ocultar');

    comentario3.innerHTML = 'Eres el Sherlock Holmes de los gestos. Sabes cuándo alguien te está mintiendo antes de que terminen la frase.';
    resultado+=0;

});

respuesta2B.addEventListener('click', function() {

contenedordos.classList.add('ocultar');
contenedortres.classList.remove('ocultar');

comentario3.innerHTML = 'Para ti, leer expresiones faciales es como leer en otro idioma: a veces entiendes, a veces solo sonríes y asientes.';
resultado+=1;

});

respuesta2C.addEventListener('click', function() {

contenedordos.classList.add('ocultar');
contenedortres.classList.remove('ocultar');

comentario3.innerHTML = 'Para ti, la cara de alguien es como una página en blanco. Si alguien quiere que entiendas algo, mejor que lo ponga en un PowerPoint.';
resultado+=2;

});

//TERCERA PREGUNTA PREGUNTA:

respuesta3A.addEventListener('click', function() {

contenedortres.classList.add('ocultar');
contenedorcuatro.classList.remove('ocultar');

comentario4.innerHTML = 'Tu cerebro tiene más pestañas abiertas que un navegador en un día de trabajo.';
resultado+=0;

});

respuesta3B.addEventListener('click', function() {

contenedortres.classList.add('ocultar');
contenedorcuatro.classList.remove('ocultar');

comentario4.innerHTML = 'Te apasionan algunas cosas, pero no al nivel de hacer que tus amigos huyan cuando empiezas a hablar de ellas.';
resultado+=1;

});

respuesta3C.addEventListener('click', function() {

contenedortres.classList.add('ocultar');
contenedorcuatro.classList.remove('ocultar');

comentario4.innerHTML = 'Si pudieras, harías un club de fans... donde solo tú serías miembro, presidente y tesorero.';
resultado+=2;

});

//CUARTA PREGUNTA PREGUNTA:

respuesta3A.addEventListener('click', function() {

    contenedorcuatro.classList.add('ocultar');
    contenedorcinco.classList.remove('ocultar');
    
    comentario5.innerHTML = 'Tu cerebro tiene más pestañas abiertas que un navegador en un día de trabajo.';
    resultado+=0;
    
    });
    
    respuesta3B.addEventListener('click', function() {
    
    contenedorcuatro.classList.add('ocultar');
    contenedorcinco.classList.remove('ocultar');
    
    comentario5.innerHTML = 'Te apasionan algunas cosas, pero no al nivel de hacer que tus amigos huyan cuando empiezas a hablar de ellas.';
    resultado+=1;
    
    });
    
    respuesta3C.addEventListener('click', function() {
    
    contenedorcuatro.classList.add('ocultar');
    contenedorcinco.classList.remove('ocultar');
    
    comentario5.innerHTML = 'Si pudieras, harías un club de fans... donde solo tú serías miembro, presidente y tesorero.';
    resultado+=2;
    
    });




