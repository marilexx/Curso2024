<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="contenedorPrincipal">

<!-- Le doy un data-id a todo, voy a crear una funcion en php que dependiendo en el dato que se le envie, con un if else enviare la consulta a la BD -->


        <div class="contenido">

            <div class="fila">

                <div class="valoracion muyBien" onclick="agregarValoracion(this)" data-id="4"><i class="bi bi-emoji-laughing"></i></div>
                <div class="valoracion bien" onclick="agregarValoracion(this)" data-id="3"><i class="bi bi-emoji-smile"></i></div>
    
            </div>
    
            <div class="fila">
    
                <div class="valoracion neutral" onclick="agregarValoracion(this)" data-id="2"><i class="bi bi-emoji-neutral"></i></div></form>
                <div class="valoracion muymal" onclick="agregarValoracion(this)" data-id="1"><i class="bi bi-emoji-angry"></i></div></form>
    
            </div>

        </div>

        
    </div>

    

<script>

          function agregarValoracion(elemento) {


            //Creo una variable que me almacene el data ID
        
            var valoracionID = elemento.getAttribute('data-id');

            // Solicitud AJAX usando XMLHttpRequest. Ni puta idea como funciona pero lo hace.

            var xhr = new XMLHttpRequest();

            //Aqui, muy importante, donde pone "valoracionInsertada" despues del ?, asi se llama  que vamos a en PHP. En este caso, lo que le queremos
            // pasar el valoracionID y para extrarlo php lo va a hacer de esta manera: $dato = intval($_GET['valoracionInsertada']); 

            xhr.open("GET", "InsertarValoracion.php?valoracionInsertada=" + valoracionID, true);

            // Procesar la respuesta del servidor cuando esté lista, esto es utilizar para hacer un contador! Puedo tener un div ya preparado para esto y alguna funcion del php que me almacena las respuesta 
            // del servidor. Es decir si, si tengo algun echo por hacer, si la conexion entre JavaScript y PHP se ha establecido correctamente el echo de PHP me lo imprimiria aqui, pero para
            //esto hay que darle tambien una condicion dentro del php, porque si no, lo imprime doble, es decir.. solo imprimir si la conexion con js se ha creado correctamnete.
            //Ejemp de como se veria en PHP:
            //if (isset($_GET['agregarProductoId'])) {
            //$carrito->ImprimirTicket(); 
            //} IMPORTANTE HACERLE ESTA CONDICION

            
            xhr.onload = function() {
                if (xhr.status === 200) {
                   
                    //A completar

                    //if (xhr.status === 200) {
                    // Actualizar el contenido del carrito con la respuesta del servidor
                    //document.getElementById("carrito").innerHTML = xhr.responseText;

                }

                }
            }; 

            // Enviar la solicitud al servidor
            xhr.send();
        }


        
</script>  
</body>
</html>