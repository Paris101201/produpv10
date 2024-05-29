<?php 

namespace App\Models;
use CodeIgniter\Model;

class BusquedaCp
{
    function obtener_estado($datos)
    {
        $db = \Config\Database::connect();
        $CP = $datos['CP'];
        $query = $db->query("SELECT d_ciudad FROM CodigoPostal WHERE d_codigo = '$CP'");
        $resultado = $query->getResult();
        
        if(count($resultado)>0){return $resultado[0];}else{$resultado = array();return $resultado;}
    }
}


