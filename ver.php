<?php
include('conex.php');


// Consulta SQL para obtener todos los usuarios
$sql = "SELECT idx,nombre,email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Crear un array vacío para almacenar los datos
    $usuarios = array();

    // Iterar sobre los resultados y añadirlos al array
    while($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }

    // Convertir el array a formato JSON
    echo json_encode($usuarios);
} else {
    echo "No se encontraron usuarios.";
}

// Cerrar conexión
$conn->close();
?>