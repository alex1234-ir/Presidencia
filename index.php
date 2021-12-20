<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="jspdf.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="./factura/app.js"></script>
    <script src="./factura/a.js"></script>
    
</head>


<body>
    <header>
        <?php

        include("./factura/header.php");
        ?>

    </header>
    <div class="container mt-4">
        <div class="center">
            <div class="col-md-8 offset-md-2">
                <br><br><br><br>
                <h3>Registro de Productos</h3>
                <hr>
                <form action="./factura/insert.php" method="POST" class="form-resgister" onsubmit="return validar();">
                    

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="num_inventa" class="form-label">NUMERO DE INVENTARIO</label>
                            <input type="text" class="form-control" id="num_inventa" name="num_inventa" required="" >
                            
                        </div>

                    <div class="col-md-6">
                            <label for="descripcion" class="form-label">DESCRIPCION</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" required=""  >
                        </div>
                    </div>
                    

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="marca" class="form-label">MARCA</label>
                            <input type="text" class="form-control" id="marca" name="marca"  required="">
                    </div>

                    
                    <div class="col-md-6">
                         <label for="modelo" class="form-label">MODELO</label>
                         <input type="text" class="form-control" id="modelo" name="modelo"  required="">
                    </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="color" class="form-label">COLOR</label>
                            <input type="text" class="form-control" id="color" name="color" required=""  >
                        </div>
                    
                    <div class="col-md-6">
                                <label for="num_serie" class="form-label">NUMERO DE SERIE</label>
                                <input type="text" class="form-control" name="num_serie" id="num_serie"   required="">
                                
                        </div>
                    </div>

                    <div class="row mb-3">
                    <div class="col-md-6">
                            
                            <label for="estado" class="form-label">ESTADO ACTUAL</label>
                            <input type="text" class="form-control" name="estado" id="estado" required="" >
                                
                    </div>
                

                    <div class="col-md-6">
                            
                            <label for="num_factura" class="form-label">NUMERO DE FACTURACION</label>
                            <input type="text" class="form-control" name="num_factura" id="num_factura"  required="" >
                                
                            </div>
                    </div>

                    <div class="row mb-3">
                    <div class="col-md-6">
                            
                            <label for="fecha_adquisicion" class="form-label">FECHA DE ADQUISICION</label>
                            <input type="date" class="form-control" id="fecha_adquisicion" name="fecha_adquisicion" required="">
                                
                                
                        
                    </div>

                    <div class="col-md-6">
                            
                            <label for="nom_provedor" class="form-label">NOMBRE DEL PROVEEDOR</label>
                            <input type="text" class="form-control" name="nom_provedor" id="nom_provedor"  required="" >
                            
                            </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            
                            <label for="imp_unit" class="form-label">IMPORTE UNITARIO</label>
                            <input type="text" class="form-control" name="imp_unit" id="imp_unit"  required="" >
                                
                                
                    </div>
                     
                        <div class="col-md-6">
                            
                            <label for="pro_adqui" class="form-label">PROCEDIMIENTO DE ADQUISICION</label>
                            <input type="text" class="form-control" name="pro_adqui" id="pro_adqui" required="" >
                                
                            </div>
                    </div>

                        <div class="row mb-3">
                        <div class="col-md-6">
                            
                            <label for="uni_adm" class="form-label">UNIDAD ADMINISTRATIVA</label>
                            <input type="text" class="form-control" name="uni_adm" id="uni_adm"  required="" >
                                
                                
                        </div>

                        <div class="col-md-6">
                            
                            <label for="nom_resguar" class="form-label">NOMBRE DE QUIEN RESGUARDA</label>
                            <input type="text" class="form-control" name="nom_resguar" id="nom_resguar" required=""  >
                                
                                </div>
                        </div>


                        <div class="col-md-6">
                            
                            <label for="fuen_finan" class="form-label">FUENTE DE FINANCIAMIENTO</label>
                            <input type="text" class="form-control" name="fuen_finan" id="fuen_finan" required=""  >
                                
                                </div>
                        
                    
                    
                    

                    

                    
                <div class="col-mt-6"><br> 
                <input type="submit" value="Enviar">
                <br>
                <br>
                <br>
                <br>

                
                    
                </form>
            </div>
        </div>
    </div>




    
</body>

</html>