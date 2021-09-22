<?php
function conectar(){
    $con = new mysqli("localhost", "root", "", "depa");

    if ($con->connect_error) {
        # code...
        echo "Ocurrio un error al conectar la base".$con->connect_error;
    }
    return $con;
}
?>