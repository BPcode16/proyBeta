<?php
include_once "../Config/Conexion.php";
require "../Class/Departamento.php";

class daoDepartamento{
    public function daoDepartamento(){

    }

    public function insertar($objDepa){
        $c=conectar();
        $nombre = $objDepa->getNombre();

        $sql = "INSERT INTO departamento(nombre) VALUES('".$nombre."')";

        if (!$c->query($sql)) {
            # code...
            echo "Error al insertar".$c->connect_error;
        }else{
            echo '<script languaje="JavaScript">alert("GUARDADO");</script>';
        }
        mysqli_close($c);
    }

    public function eliminar($objDepa){
        $c=conectar();
        $id=$objDepa->getId();
        
        $sql="DELETE FROM departamento WHERE idDepa = '".$id."'";

        if (!$c->query($sql)) {
            # code...
            echo "Error al Eliminar".$c->connect_error;
        }else{
            echo '<script languaje="JavaScript">alert("ELIMINADO");</script>';
        }
        mysqli_close($c);
    }

    public function modificar($objDepa){
        $c=conectar();
        $id=$objDepa->getId();
        $nombre=$objDepa->getNombre();

        $sql="UPDATE departamento SET nombre='".$nombre."' WHERE idDepa='".$id."' ";

        if (!$c->query($sql)) {
            # code...
            echo "Error al Modificar".$c->connect_error;
        }else{
            echo '<script languaje="JavaScript">alert("MODIFICADO");</script>';
        }
        mysqli_close($c);
    }

    public function Lista(){
        $c = conectar();
        $sql = "SELECT idDepa, nombre from departamento";
        $res = $c->query($sql);
        $lista = array();
        if ($res) {
            # code...
            while ($row = $res->fetch_array()) {
                # code...
                $depa = new Departamento();
                $depa->setId($row['idDepa']);
                $depa->setNombre($row['nombre']);
                array_push($lista, $depa);
            }
            mysqli_close($c);
            return $lista;
        }
    }
}
?>