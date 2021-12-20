<?php 

include ("cone.php");
 

    $num_inventa = ($_POST["num_inventa"]);
    $descripcion = ($_POST["descripcion"]);
    $marca = ($_POST["marca"]);
    $modelo = ($_POST["modelo"]);
    $color = ($_POST["color"]);
    $num_serie = ($_POST["num_serie"]);
    $estado = ($_POST["estado"]);
    $num_factura = ($_POST["num_factura"]);
    $fecha_adquisicion = ($_POST["fecha_adquisicion"]);
    $nom_provedor = ($_POST['nom_provedor']);
    $imp_unit = ($_POST['imp_unit']);
    $pro_adqui = ($_POST['pro_adqui']);
    $uni_adm = ($_POST['uni_adm']);
    $nom_resguar = ($_POST['nom_resguar']);
    $fuen_finan = ($_POST['fuen_finan']);
    

    $insertar = "INSERT INTO prod VALUES  (null, '$num_inventa', '$descripcion', '$marca', '$modelo', '$color', '$num_serie', '$estado', '$num_factura', '$fecha_adquisicion', '$nom_provedor', '$imp_unit', '$pro_adqui', '$uni_adm', '$nom_resguar', '$fuen_finan') ";
    
    $query = mysqli_query($conexion, $insertar);
    
    if ($query) {
        echo "<script>alert('Registro exitoso')</script>";
        header("Location: list.php");
       
        

    }else {
        echo 'conexion fallida';
    }
    


 
    

   

    
        

   

?>