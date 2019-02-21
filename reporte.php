<?php 
require_once('class.ezpdf.php');
$pdf = new Cezpdf('A4'); // Seleccionamos tipo de hoja
$pdf->selectFont('fonts/Helvetica.afm'); //Seleccionamos fuente a utilizar


    $con = new mysqli("localhost","root","","empresabd");

    if($con->connect_errno){

        echo "Fallo la conexion con MySQL: (".$con-> connect_errno.")".$con->connect_error;


    }

    $consulta="SELECT empid,empnom,empapellido  FROM empleado";

    if($resultado = mysqli_query($con, $consulta)){

        while ($row=mysqli_fetch_array($resultado)) {

            $data[]=array('empid'=>$row[0], 'empnom'=>$row[1],'empapellido'=>$row[2]);

        
        }

        $titles=array('empid'=>'empid','empnom'=>'empnom','empapellido'=>'empapellido');

        $pdf->ezTable($data);
        $pdf->ezStream();

            $resultado->free();

        }

        $con->close();


?>