<?php

include("cone.php");

$id=$_GET['id'];

$datos = mysqli_query($conexion, "SELECT * FROM prod WHERE id='$id'");
$filas = mysqli_num_rows($datos);

$campo=mysqli_fetch_array($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="jspdf.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="app.js"></script>
    
</head>
<body>
<header>
        <?php

        include("header.php");
        ?>

    </header>
    <br><br>
<div class="container mt-4">
        <div class="center">
            <div class="col-md-8 offset-md-2">
                <br><br><br><br>
                <h3>Facturacion</h3>
                <hr>
                <form action="update.php" method="POST">
                    
               
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="num_inventario" class="form-label">NUMERO DE INVENTARIO</label>
                            <input type="text" class="form-control" id="num_inventa" name="num_inventa" require="" value="<?php echo $campo['num_inventa']; ?>">
                            
                        </div>

                    <div class="col-md-6">
                            <label for="descripcion" class="form-label">DESCRIPCION</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" require="" value="<?php echo $campo['descripcion'];?> " >
                        </div>
                    </div>
                    

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="marca" class="form-label">MARCA</label>
                            <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $campo['marca'];?>">
                    </div>

                    
                    <div class="col-md-6">
                         <label for="modelo" class="form-label">MODELO</label>
                         <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $campo['modelo']; ?>">
                    </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="color" class="form-label">COLOR</label>
                            <input type="text" class="form-control" id="color" name="color" value="<?php echo $campo['color']; ?>" >
                        </div>
                    
                    <div class="col-md-6">
                                <label for="num_serie" class="form-label">NUMERO DE SERIE</label>
                                <input type="text" class="form-control" name="num_serie" id="num_serie"  value="<?php echo $campo['num_serie']; ?>" >
                                
                        </div>
                    </div>

                    <div class="row mb-3">
                    <div class="col-md-6">
                            
                            <label for="estado" class="form-label">ESTADO ACTUAL</label>
                            <input type="text" class="form-control" name="estado" id="estado" value="<?php echo $campo['estado']; ?>" >
                                
                    </div>
                

                    <div class="col-md-6">
                            
                            <label for="num_factura" class="form-label">NUMERO DE FACTURACION</label>
                            <input type="text" class="form-control" name="num_factura" id="num_factura"  value="<?php echo $campo['num_factura']; ?>" >
                                
                            </div>
                    </div>

                    <div class="row mb-3">
                    <div class="col-md-6">
                            
                            <label for="fecha_adquisicion" class="form-label">FECHA DE ADQUISICION</label>
                            <input type="date" class="form-control" id="fecha_adquisicion" name="fecha_adquisicion" value="<?php echo $campo['fecha_adquisicion']; ?>">
                                
                                
                        
                    </div>

                    <div class="col-md-6">
                            
                            <label for="nom_provedor" class="form-label">NOMBRE DEL PROVEEDOR</label>
                            <input type="text" class="form-control" name="nom_provedor" id="nom_provedor"   value="<?php echo $campo['nom_provedor']; ?>">
                            
                            </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            
                            <label for="imp_unit" class="form-label">IMPORTE UNITARIO</label>
                            <input type="text" class="form-control" name="imp_unit" id="imp_unit"  value="<?php echo $campo['imp_unit']; ?>" >
                                
                                
                    </div>
                     
                        <div class="col-md-6">
                            
                            <label for="pro_adqui" class="form-label">PROCEDIMIENTO DE ADQUISICION</label>
                            <input type="text" class="form-control" name="pro_adqui" id="pro_adqui" value="<?php echo $campo['pro_adqui']; ?>" >
                                
                            </div>
                    </div>

                        <div class="row mb-3">
                        <div class="col-md-6">
                            
                            <label for="uni_adm" class="form-label">UNIDAD ADMINISTRATIVA</label>
                            <input type="text" class="form-control" name="uni_adm" id="uni_adm"  value="<?php echo $campo['descripcion']; ?>" >
                                
                                
                        </div>

                        <div class="col-md-6">
                            
                            <label for="nom_resguar" class="form-label">NOMBRE DE QUIEN RESGUARDA</label>
                            <input type="text" class="form-control" name="nom_resguar" id="nom_resguar"  value="<?php echo $campo['nom_resguar']; ?>" >
                                
                                </div>
                        </div>


                        <div class="col-md-6">
                            
                            <label for="fuen_finan" class="form-label">FUENTE DE FINANCIAMIENTO</label>
                            <input type="text" class="form-control" name="fuen_finan" id="fuen_finan"  value="<?php echo $campo['fuen_finan']; ?>" >
                                
                                </div>
                        
                    
                    
                    

                    

                    
                <div class="col-mt-6"><br> 
                <input type="submit" value="Enviar">
                
                <br><br><br>

                
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>