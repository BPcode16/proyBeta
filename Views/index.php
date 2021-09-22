<?php
require "../Controller/daoDepartamento.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulario</h2>

    <br><br>

    <form action="" method="post">
        <label for="">ID del departamento</label>
        <input type="text" name="textId" id="textId">
        <label for="">Nombre</label>
        <input type="text" name="textname" id="textname">
        <input type="submit" value="Insertar" name="btnInsetar">
        <input type="submit" value="Modificar" name="btnModificar">
        <input type="submit" value="Eliminar" name="btnEliminar">
    </form>

    <br><br>
    

<?php

$dao = new daoDepartamento();
    function CargarDatos(){
        $depa = new Departamento();
        $depa->setId($_REQUEST['textId']);
        $depa->setNombre($_REQUEST['textname']);
        return $depa;
    }

    if (isset($_REQUEST["btnInsetar"])) {
        # code...
        $dao->insertar(CargarDatos());
    }

    if (isset($_REQUEST["btnModificar"])) {
        # code...
        $dao->modificar(CargarDatos());
    }

    if (isset($_REQUEST["btnEliminar"])) {
        # code...
        $dao->eliminar(CargarDatos());
    }

?>

<table border="1">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
        </tr>
        <?php
        $daoDepa = new daoDepartamento();
        $lis = $daoDepa->lista();
        foreach($lis as $x){
            echo '
            <tr>
                <td>'. $x->getId() .'</td>
                <td>'. $x->getNombre(). '</td>
            
            </tr>';
        }
        ?>
    </table>
</body>
</html>