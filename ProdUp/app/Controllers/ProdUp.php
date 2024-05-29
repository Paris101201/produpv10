<?php

namespace App\Controllers;
use App\Models;

class ProdUp extends BaseController
{
    public $app_instance;

    public function index(): string
    {
        return view('Inicio');
    }

    public function inise(): string
    {
        return view('IniciarSesion');
    }

    public function regusu(): string
    {
        return view('RegistroUsuario');
    }

    public function intro(): string
    {
        return view('Introduccion');
    }

    public function cargamanu(): string
    {
        return view('CargaManual');
    }

    public function cargamasi(): string
    {
        return view('CargaMasiva');
    }

    public function copiarpegar(): string
    {
        return view('BuscarCopiar');
    }
    public function pro(): string
    {
        return view('procesar');
    }

    public function alma(): string
    {
        return view('Almacen');
    }

    public function prov(): string
    {
        return view('Proveedores');
    }

    public function almaprov(): string
    {
        return view('AlmacenProve');
    }

    public function consulta_cp()
    {
        //$parameters = array();
        $this->app_instance->load->library('consultaCP');
        $parameters = $this->app_instance->input->post();
        $resultado = $this->app_instance->consulta_cp( $parameters['CP'] );
        $estado = $resultado['Estado'];
        print '{"Estado":"'. $estado .'"}';
    }
}