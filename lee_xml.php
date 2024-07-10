<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizar XML en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #333;
            border-bottom: 1px solid #333;
            padding-bottom: 5px;
        }
        .libro {
            margin-bottom: 20px;
        }
        .titulo {
            font-weight: bold;
            color: #0066cc;
        }
        .autor {
            color: #666;
        }
        .anio {
            color: #999;
        }
    </style>
</head>
<body>

<?php
// Cargar el archivo XML
$xml = simplexml_load_file('datos.xml');

if ($xml === false) {
    die('Error al cargar el archivo XML.');
}

// Mostrar título y lista de libros
echo '<h2>Lista de libros</h2>';

foreach ($xml->libro as $libro) {
    echo '<div class="libro">';
    echo '<p class="titulo">' . $libro->titulo . '</p>';
    echo '<p class="autor">Autor: ' . $libro->autor . '</p>';
    echo '<p class="anio">Año: ' . $libro->anio . '</p>';
    echo '</div>';
}
?>

</body>
</html>