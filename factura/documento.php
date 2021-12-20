
<?php
    //-----------------------------------------------------------------------------------
    //    Ejemplo básico de utilización de fPDF
    //-----------------------------------------------------------------------------------
    include('cone.php');
    require('../fpdf/fpdf.php');

    
    
    
    $pdf = new FPDF('p');
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);

    
    date_default_timezone_set('America/Mexico_city');
    $datos = mysqli_query($conexion, "SELECT  * FROM factura order by id desc"); 
    $filas = mysqli_num_rows($datos);

    $pdf->Cell(0,12,utf8_decode('UNIVERSIDAD DE LOS ANGELES PUEBLA'),0,1,"C");
    $pdf->Cell(0,12,utf8_decode('ORDEN DE COBRO'),0,1,"C");
    setlocale(LC_ALL,"es_ES.UTF-8");
    $pdf->Cell(50, 30, "Fecha de la Factura: " .date('d-m-Y'), 0, 1, "L");
    
        $campo = mysqli_fetch_assoc($datos);
        $pdf->Cell(10, 10, "Numero de Factura: ".$campo["id"], 0, 1, "L");
        $pdf->Cell(10, 10, "Carrera: ".$campo["carrera"], 0, 1, "L");
        $pdf->Cell(10, 10, "Nombre del Contribuyente: ".$campo["nombre"], 0, 1, "L");
        $pdf->Cell(10, 10, "Apellido: ".$campo["apellido"], 0, 1, "L");
        $pdf->Cell(10, 10, "Email: ".$campo["email"], 0, 1, "L");
        $pdf->Cell(10, 10, "Matricula: ".$campo["matricula"], 0, 1, "L");
        $pdf->Cell(10, 10, "Telefono: ".$campo["telefono"], 0, 1, "L");
        $pdf->Cell(10, 10, "Semestre: ".$campo["semestre"], 0, 2, "L");
        $pdf->Cell(10, 10, " ", 0, 2, "L");


        $pdf->Cell(10, 10, "Cantidad de Semestres: ".$campo["cantidad"], 0, 1, "L");
        $pdf->Cell(10, 10, "Precio Unitario: ".$campo["precio"], 0, 1, "L");
        $pdf->Cell(10, 10, "Total a Pagar: ".$campo["resultado"], 0, 1, "L");

    $pdf->Cell(140, 50, "", 0, 2, "C");
    $pdf->SetDrawColor(61, 174, 233);
    $pdf->Image('../img/7611530_orig.png', 10, 6, 30,);
    $pdf->SetLineWidth(1);
    $pdf->SetFillColor(0,0,0);
    $pdf->Line(10, 40, 200, 40 );
    $pdf->Line(10, 55, 200, 55 );
    $pdf->Line(10, 150, 200, 150 );

    

    
        
        
    
    
    $pdf->Output();

    


   

    
 ?>