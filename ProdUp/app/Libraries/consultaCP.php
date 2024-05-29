<?php

namespace App\Models;
use CodeIgniter\Model;


class ConsultaCP
{
    public $app_instance;
    public $datos;

    function consultar_cp ($CP = null)
    {
        $this->app_instance->load->model('BusquedaCpmodel');
        $estado = $this->app_instance->BusquedaCpmodel->obtener_estado($CP);
        if( count($estado) == 0) {
            $estado['Estado'] = 'No Existe';
            return $estado;
        }

    }
}