<?php

include ("cone.php");


$id = $_POST['id'];
$num_inventa = $_POST["num_inventa"];
$descripcion = $_POST["descripcion"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$color = $_POST["color"];
$num_serie = $_POST["num_serie"];
$estado = $_POST["estado"];
$num_factura = $_POST["num_factura"];
$fecha_adquisicion = $_POST["fecha_adquisicion"];
$nom_provedor = $_POST['nom_provedor'];
$imp_unit = $_POST['imp_unit'];
$pro_adqui = $_POST['pro_adqui'];
$uni_adm = $_POST['uni_adm'];
$nom_resguar = $_POST['nom_resguar'];
$fuen_finan = $_POST['fuen_finan'];

$actualizar = "UPDATE prod SET    num_inventa='$num_inventa', descripcion='$descripcion', marca='$marca',
 modelo='$modelo', color='$color', num_serie='$num_serie', estado='$estado', num_factura='$num_factura',
  fecha_adquisicion='$fecha_adquisicion', nom_provedor='$nom_provedor', imp_unit='$imp_unit', pro_adqui='$pro_adqui',
   uni_adm='$uni_adm', nom_resguar='$nom_resguar', fuen_finan='$fuen_finan' WHERE id='$id'";
    
    $query = mysqli_query($conexion, $actualizar);
    
    if ($query) {
        echo "<script>alert('Registro exitoso')</script>";
        header("Location: list.php");
       
    }else{
        echo ('fallido');
    }




?>