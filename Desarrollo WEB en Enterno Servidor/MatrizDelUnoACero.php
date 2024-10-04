<?php



$contador = 1;


echo"<table>";

for($fila = 0; $fila <= 10; $fila++){
    
    for($columna = 0; $columna <= 10; $columna++){

        if($fila == 0 && $columna == 0){

            echo "X";

        }

        else($fila == 0 && $columna <= 10){

            echo $columna;

        }

        else($columna == 0 && $fila <= 10){

            echo $columna;

        }

        else{

            echo $contador++;
        }
        

    }

    echo "<br>"
}


echo"</table>";




