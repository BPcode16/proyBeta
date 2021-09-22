<?php
class Departamento{
    var $id;
    var $nombre;

    public function __construct(){

    }

    public function getId(){
        return $this->id;
    }

    public function setId($valor){
         $this->id=$valor;
    }

    public function getNombre(){
        return $this->nombre;

    }

    public function setNombre($valor){
         $this->nombre= $valor;
    }
}
?>