<?php
 include_once "../modelo/ModelTema.php";
    class ControlTema{
        
        static public function add(){
            $datos=array(
                'descripcion' => $_POST['txtTema'] ,
                'estado'=>1
            );
            Tema::addTema($datos);
            echo 1;
        }
        static public function obtener(){
            $idtema=$_POST['idtemau'];
            echo json_encode(Tema::obtenerDatos($idtema));
        }
        static public function editar(){
            $datos=array(
                'descripcionu' => $_POST['txtTemau'],
                'idtema'=> $_POST['txtIdu']
            );
            Tema::editarTema($datos);
            echo 1;
        }
        static public function eliminar(){
            $idTema=$_POST['idTema'];
            Tema::eliminarTema($idTema);
            echo 1;
        }
    }
    
    $ruta=$_GET['accion'];//add
    switch ($ruta) {
        case 'add': ControlTema::add();break;
        case 'obtener':ControlTema::obtener(); break;
        case 'editar':ControlTema::editar(); break;
        case 'eliminar':ControlTema::eliminar(); break;
        default:echo 2;break;
    }
    
?>