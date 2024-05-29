<?php

    class RolesModel extends Mysql
    {
        // Propiedades del Rol
        public $intIdrol;
        public $strRol;
        public $strDescripcion;
        public $intStatus;
        
        // Metoso constructor
        public function __construct()
        {
            parent::__construct();
        }

        // Extrae o selecciona todos los roles de sql
        public function selectRoles()
        {
            $sql = "SELECT * FROM rol WHERE idStatus != 0";
            $request = $this->select_all($sql);
            return $request;
        }

        // Extrae o selecciona un solo rol
        public function selectRol(int $idRol)
        {
            $this->intIdrol = $idRol;
            $sql = "SELECT * FROM rol WHERE idRol = $this->intIdrol";
            $request = $this->select($sql);
            return $request;
        }

        // Insertar roles nuevos sql
        public function insertRol(string $rol, string $descripcion, int $status)
        {
            $return = "";
            $this->strRol = $rol;
            $this->strDescripcion = $descripcion;
            $this->intStatus = $status;

            $sql = "SELECT * FROM rol WHERE nombreRol = '$this->strRol' ";
            $request = $this->select_all($sql);
            
            if(empty($request))
            {
                // Inserta datos Rol
                $query_insert = "INSERT INTO rol(nombreRol,descripcion,idStatus) VALUES (?,?,?)";
                $arrData = array($this->strRol, $this->strDescripcion, $this->intStatus);
                $request_insert = $this->insert($query_insert,$arrData);
                $return = $request_insert;
            }elseif($request==$return){
                $return = 0;
            }
            return $return;
        }

        // Modificar o actualizar un Rol
        public function updateRol(int $idrol, string $rol, string $descripcion, int $status)
        {
            $this->intIdrol = $idrol;
            $this->strRol = $rol;
            $this->strDescripcion = $descripcion;
            $this->intStatus = $status;

            $sql = "SELECT * FROM rol WHERE nombreRol = '$this->strRol' AND idRol != $this->intIdrol";
            $request = $this->select_all($sql);

            if(empty($request))
            {
                $sql = "UPDATE rol SET nombreRol = ?, descripcion = ?, idStatus = ? WHERE idRol = $this->intIdrol";
                $arrData = array($this->strRol, $this->strDescripcion, $this->intStatus);
                $request = $this->update($sql,$arrData);
            }else{
                $request = 0;
            }
            return $request;
        }

    }

?>