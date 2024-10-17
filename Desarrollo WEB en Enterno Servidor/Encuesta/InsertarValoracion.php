<?php

session_start();

include("db.php");

    if (isset($_GET['valoracionInsertada'])) {

        $dato = intval($_GET['valoracionInsertada']); 

        if ($dato == 1) {

            

            $valoracion = 1;

            $sql = "INSERT INTO valoraciones (current_day, valoracion) VALUES (CURDATE(), ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $valoracion);  // 'i' indica que el parámetro es un entero

            if ($stmt->execute()) {
                $mensaje = "Valoción negativa insertada con éxito";
                echo "<script>alert('$mensaje');</script>";
            } else {
                $mensajenegativo = "Error al insertar la valoración negativa";
                echo "<script>alert('$mensajenegativo');</script>";
            }
            
            
       
        }

        elseif ($dato == 2) {

            $valoracion = 2;

            $sql = "INSERT INTO valoraciones (current_day, valoracion) VALUES (CURDATE(), ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $valoracion);  // 'i' indica que el parámetro es un entero

            if ($stmt->execute()) {
                echo "Nueva valoración insertada con éxito";
            } else {
                echo "Error: " . $stmt->error;
            }

       
        }

        elseif ($dato == 3) {

            $valoracion = 3;

            $sql = "INSERT INTO valoraciones (current_day, valoracion) VALUES (CURDATE(), ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $valoracion);  // 'i' indica que el parámetro es un entero

            if ($stmt->execute()) {
                echo "Nueva valoración insertada con éxito";
            } else {
                echo "Error: " . $stmt->error;
            }

       
        }

        elseif ($dato == 4) {

            $valoracion = 4;

            $sql = "INSERT INTO valoraciones (current_day, valoracion) VALUES (CURDATE(), ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $valoracion);  // 'i' indica que el parámetro es un entero

            if ($stmt->execute()) {
                echo "Nueva valoración insertada con éxito";
            } else {
                echo "Error: " . $stmt->error;
            }

       
        }

        $conn->close();

    }
    






?>