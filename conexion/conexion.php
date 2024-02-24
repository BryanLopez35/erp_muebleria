<?php
class DBManager
{
    private $host = '192.168.1.69';
    private $usuario = 'root';
    private $contrasena = 'pr3cis!onpp';
    private $base_datos = 'optima';
    private $conexion;

    // Constructor para establecer la conexion
    public function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->db);

        // Verificar la conexión
        if ($this->conexion->connect_error) {
            die("Error de conexion: " . $this->conexion->connect_error);
        }
    }

    // Destructor para cerrar la conexion
    public function __destruct()
    {
        $this->conexion->close();
    }

    // Funcion para ejecutar una consulta
    public function ejecutarQuery($consulta)
    {
        $datarow = $this->conexion->query($consulta);
        return $datarow;
    }

    // Funcion para obtener un solo registro
    public function DataRow($consulta)
    {
        $data = $this->ejecutarQuery($consulta);

        if ($data->num_rows > 0) {
            return $data->fetch_assoc();
        } else {
            return null;
        }
    }

    // Funcion para obtener una coleccion de registros
    public function DataRows($consulta)
    {
        $data = $this->ejecutarQuery($consulta);

        if ($data->num_rows > 0) {
            return $data;
        } else {
            return null;
        }
    }
}

// Uso de la clase DBManager
$dbManager = new DBManager();
//echo "Conexion exitosa a la base de datos.";

function getPersonal()
{
    global $dbManager;

    $consulta = "CALL getPersonal();";

    return $dbManager->DataRows($consulta);
}


function getModels()
{
    global $dbManager;

    $consulta = "CALL getModels();";

    return $dbManager->DataRows($consulta);
}

function getMaderaInv()
{
    global $dbManager;

    $consulta = "CALL getMadera();";

    return $dbManager->DataRows($consulta);
}

function getMaderaList()
{
    global $dbManager;

    $consulta = "CALL getMaderaList();";

    return $dbManager->DataRows($consulta);
}

function getPedidos()
{
    global $dbManager;

    $consulta = "CALL getPedidos();";

    return $dbManager->DataRows($consulta);
}


function getModelInv()
{
    global $dbManager;

    $consulta = "CALL getModelInv();";

    return $dbManager->DataRows($consulta);
}

function getClientes()
{
    global $dbManager;

    $consulta = "CALL getClientes();";

    return $dbManager->DataRows($consulta);
}
