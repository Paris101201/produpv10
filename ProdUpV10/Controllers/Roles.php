<?php

    class Roles extends Controllers
    {
        // Metodo Constructor
        public function __construct()
        {
            parent::__construct();
        }

        // Metodo pricipal para mostrar roles
        public function Roles()
        {
            $data['page_id'] = 3;
            $data['page_tag'] = "Roles Usuario-Master";
            $data['page_title'] = "Roles Usuario-Master <small>ProdUp</small>";
            $data['page_name'] = "rol_usuario-master";
            $this->views->getView($this,"roles",$data);
        }

        // Metodo para obtener roles
        public function getRoles()
        {
            $arrData = $this->model->selectRoles();

            for ($i=0; $i < count($arrData); $i++){
                // Estatus en letras
                if($arrData[$i]['idStatus'] == 1)
                {
                    $arrData[$i]['idStatus'] = '<span class="badge badge-pill badge-success">Activo</span>';
                }else{
                    $arrData[$i]['idStatus'] = '<span class="badge badge-pill badge-danger">Inactivo</span>';
                }
                // Botones de acciones
                $arrData[$i]['opciones'] = '<div class="text-center">
                                                <button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idRol'].'" title="Permisos"><i class="fa fa-cogs"></i></button>
                                                <button class="btn btn-success btn-sm btnEditRol" rl="'.$arrData[$i]['idRol'].'" title="Editar"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['idRol'].'" title="Eliminar"><i class="fa fa-trash"></i></button>
                                            </div>';
            }

            echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
            die();

        }

        // Extraer un Rol para modificar o actualizar
        public function getRol(int $idRol)
        {
            $intIdrol = intval(strClean($idRol));
            if($intIdrol > 0)
            {
                $arrData = $this->model->selectRol($intIdrol);
                if(empty($arrData))
                {
                    $arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
                }else{
                    $arrResponse = array('status' => true, 'data' => $arrData);
                }
                echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            }
            die();
        }

        // Metodo para capturar un nuevo rol
        public function setRol()
        {
            $intIdrol = isset($_POST['idRol']) ? intval($_POST['idRol']) : 0;
            $strRol = isset($_POST['txtNombreRol']) ? strClean($_POST['txtNombreRol']) : '';
            $strDescripcion = isset($_POST['txtDescripcionRol']) ? strClean($_POST['txtDescripcionRol']) : '';
            $intStatus = isset($_POST['listaStatus']) ? intval($_POST['listaStatus']) : 0;

            // $intIdrol = intval($_POST['idRol']);
            // $strRol = strClean($_POST['txtNombreRol']);
            // $strDescripcion = strClean($_POST['txtDescripcionRol']);
            // $intStatus = intval($_POST['listaStatus']);

            if($intIdrol == 0)
            {
                // Crear Rol Nuevo
                $request_rol = $this->model->insertRol($strRol,$strDescripcion,$intStatus);
                $option = 1;
            }else{
                // Actualiza Rol
                $request_rol = $this->model->updateRol($intIdrol, $strRol, $strDescripcion, $intStatus);
                $option = 2;
            }

            // Reglas Rol
            if($request_rol > 0 )
			{
				if($option == 1)
				{
					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				}else{
					$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
				}
			}elseif($request_rol == 0){
				
				$arrResponse = array('status' => false, 'msg' => '¡Atención! El Rol ya existe.');
			}else{
				$arrResponse = array("status" => false, "msg" => '¡Atención! El Rol ya existe.');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();

            // if($request_rol == 'exist')
            // {
            //     $arrResponse = array('status' => false, 'msg' => '¡Atencion! El Rol ya existe.');
            // }elseif($request_rol > 0){
            //     if($option == 1){
            //         $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
            //     }else{
            //         $arrResponse = array('status' => true, 'msg' => 'Datos actualizados correctamente.');
            //     }
            // }else{
            //     $arrResponse = array('status'=> false, 'msg' => 'No es posible almacenar los datos.');
            // }
            // echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            // die();
        }
    }   

?>