<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
        <?php

        include("header.php");
        ?>

    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    
<div class="table-responsive">
  <table class="table table-bordered  ">
      <th scope="col">ID</th>
      <th scope="col">NUMERO DE INVENTARIO</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">MARCA</th>
      <th scope="col">MODELO</th>
      <th scope="col">COLOR</th>
      <th scope="col">NUMERO DE SERIE</th>
      <th scope="col">ESTADO ACTUAL</th>
      <th scope="col">NUMERO DE FACTURACION</th>
      <th scope="col">FECHA DE ADQUISICION</th>
      <th scope="col">NOMBRE DEL PROVEEDOR</th>
      <th scope="col">IMPORTE UNITARIO</th>
      <th scope="col">PROCEDIMIENTO DE ADQUISICION</th>
      <th scope="col">UNIDAD ADMINISTRATIVA</th>
      <th scope="col">NOMBRE DE QUIEN RESGUARDA</th>
      <th scope="col">MODIFICAR</th>

      <tbody>
    <!--registros de base de datos-->

    <?php
    include ('cone.php');
    ?>

    <?php $datos = mysqli_query($conexion, "SELECT  * FROM prod ");
    $filas = mysqli_num_rows($datos);

    

    while($campo=mysqli_fetch_array($datos)){


    
    ?>    
    

        <tr>
            <td><?php echo $campo['id']?></td>
            <td><?php echo $campo['num_inventa']?></td>
            <td><?php echo $campo['descripcion']?></td>
            <td><?php echo $campo['marca']?></td>
            <td><?php echo $campo['modelo']?></td>
            <td><?php echo $campo['color']?></td>
            <td><?php echo $campo['num_serie']?></td>
            <td><?php echo $campo['estado']?></td>
            <td><?php echo $campo['num_factura']?></td>
            <td><?php echo $campo['fecha_adquisicion']?></td>
            <td><?php echo $campo['nom_provedor']?></td>
            <td><?php echo $campo['imp_unit']?></td>
            <td><?php echo $campo['pro_adqui']?></td>
            <td><?php echo $campo['uni_adm']?></td>
            <td><?php echo $campo['nom_resguar']?></td>
            <td><?php echo $campo['fuen_finan']?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $campo['id'] ?>" class="btn btn-info">Editar</a>
                <a href="delete.php?id=<?php echo $campo['id'] ?>" class="btn btn-danger">Eliminar</a>
            </td>

        </tr>

        <?php
        }
        ?>
            
            
        
    
    
    
  </tbody>



    
  </table>
    
    </div>
</body>
</html>

