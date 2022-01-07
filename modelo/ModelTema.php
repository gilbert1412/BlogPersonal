<?php
    require_once '../config/Conexion.php';
    
    class Tema {
       
       
      

        static public function addTema($datos){
            $con=new Conexion();
            $consulta="INSERT INTO tblTemas (descripcion,estado) VALUES(:descricion,:estado)";
            $stm=$con->conectar()->prepare($consulta);
            $stm->bindParam(':descricion',$datos['descripcion'],PDO::PARAM_STR);
            $stm->bindParam(':estado',$datos['estado'],PDO::PARAM_INT);
           
            $resultado=$stm->execute();
            return $resultado;
         
        }

        static public function mostrarTema(){
            $con=new Conexion();
            $consulta="SELECT * FROM tblTemas ORDER BY idTema DESC";
            $stm=$con->conectar()->prepare($consulta); 
            $stm->execute();
            return $stm->fetchAll();
        }

        static public function obtenerDatos($id){
            $con=new Conexion();
            $consulta="SELECT * FROM tblTemas WHERE idTema=:id";
            $stm=$con->conectar()->prepare($consulta);
            $stm->bindParam(':id',$id, PDO::PARAM_INT);
            $stm->execute();
            return $stm->fetch();
        }

        static public function editarTema($datos){
            $con=new Conexion();
            $consulta="UPDATE tblTemas SET descripcion =:descripcion WHERE idTema=:idTema";
            $stm=$con->conectar()->prepare($consulta);
            $stm->bindParam(':idTema',$datos['idtema'], PDO::PARAM_INT);
            $stm->bindParam(':descripcion',$datos['descripcionu'],PDO::PARAM_STR);
            $stm->execute();
        }

        static public function eliminarTema($idTema){
            $con=new Conexion();
            $consulta="UPDATE tblTemas SET estado=if(estado=0,1,0 ) WHERE idTema=:idTema;";//Cambio de valor en estado
            $stm=$con->conectar()->prepare($consulta); 
            $stm->bindParam(':idTema',$idTema, PDO::PARAM_INT);
            return $stm->execute();
        
        }


    }
?>