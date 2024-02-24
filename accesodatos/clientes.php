<?php
include_once '../conexion/conexion.php';


$consulta = "SELECT cliente_id, nombre, direccion, telefono, email FROM clientes;";



$resultado = $dbManager->ejecutarQuery($consulta);



if ($resultado) {
    $data = [];

    while ($row = $resultado->fetch_assoc()) {
        $data[] = $row;
    }
 
    echo json_encode($data);
} else {
    echo json_encode(['error' => 'Error al obtener datos.']);
}
