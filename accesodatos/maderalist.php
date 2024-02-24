<?php
include_once '../conexion/conexion.php';

$resultData = getMaderaList();

if ($resultData) {
    $data = [];

    while ($row = $resultData->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
} else {
    echo json_encode(['error' => 'Error al obtener datos.']);
}
