
<?php
require('../public/fpdf/fpdf.php');



class PDF extends FPDF

{

// Cabecera de página

    function Header()
    {
        // Logo
        // $this->Image('logo_pb.png',10,8,33);
        // Arial bold 15


        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(20);
        // Título
        $this->Cell(60,20,'Comprobante de pago',0,1,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(40,5, utf8_decode('TIENDA DE ROPA DE BEBÉS "TRB"'),0,1);
        $this->SetFont('Arial','',10);
        $this->Cell(75,5, utf8_decode('Jr. Los incas 300-Urbanización Jorge Chávez'),0,1);
        $this->Cell(75,5, utf8_decode('San Luis - Lima'),0,1);
        $this->Cell(75,5, utf8_decode('Telefono: (01) 512 4856'),0,1);
        $this->Cell(75,5, utf8_decode('RUC: 10712656174'),0,1);
        $this->Cell(15,5, utf8_decode('FECHA:'),0,0);
        $this->Cell(75,5, utf8_decode(date("d-m-y")),0,1);


        // Salto de línea
        $this->Ln(4);
    }
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Pagina '.$this->PageNo().'',0,0,'C');
    }
}

//cliente

require('../database/dbconect.php');
$user_id = $_GET['user_id'];
$datosUser = "SELECT * FROM user WHERE user_id= '$user_id'";
$resultado = mysqli_query($con, $datosUser);
$user = mysqli_fetch_assoc($resultado);
$email =$user['email'];

$query3 = "SELECT * FROM comprobantes ORDER BY id_venta DESC LIMIT 1 ";
$resultado3 = mysqli_query($con, $query3);
$comprobante1=mysqli_fetch_assoc($resultado3);
$id_venta=$comprobante1['id_venta'] + 1;
$archivo="/comprobantes/comprobante-$id_venta.pdf";




$pdf = new PDF('P','mm',array(120,200));
$pdf->AddPage();

$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,5, utf8_decode('Comprobante Nro: 00000'),0,0);
$pdf->Cell(40,5,$id_venta,0,1);
$pdf->Ln(4);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5, utf8_decode('ADQUIRIENTE'),0,1);
//nombre cliente
$pdf->SetFont('Arial','',10);
$pdf->Cell(25,5, 'NOMBRES :',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(15,5, $user['first_name'],0,1);

//Apellidos cliente
$pdf->SetFont('Arial','',10);
$pdf->Cell(25,5, 'APELLIDOS :',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(15,5, $user['last_name'],0,1);

//Identificacio cliente
$pdf->SetFont('Arial','',10);
$pdf->Cell(25,5, 'DNI :',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(15,5,' 71436687',0,1);

$pdf->Ln(10);


//PRODUCTOS

require('../database/dbconect.php');
$user_id = $_GET['user_id'];
$prodCAr = "SELECT * FROM cart WHERE user_id= '$user_id'";
$resultado2 = mysqli_query($con, $prodCAr);
$total=0;
$j=0;

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5, utf8_decode('PRODUCTOS'),0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,5, 'Nro',1,0,'C',0);
$pdf->Cell(40,5,utf8_decode('DESCRIPCIÓN'),1,0,'C',0);
$pdf->Cell(40,5, 'IMPORTE (S/.)',1,1,'C',0);

while($registro = $resultado2->fetch_assoc()){

    $item_id=$registro['item_id'];
    $query= "SELECT * FROM productos WHERE item_id= '$item_id'";
    $resultado3=mysqli_query($con,$query);
    $items=mysqli_fetch_assoc($resultado3);
    $total=$total+$items['precio_normal'];
    $j=$j+1;

    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,5, $j,1,0,'C',0);
    $pdf->Cell(40,5, $items['nombre'],1,0,'C',0);
    $pdf->Cell(40,5, $items['precio_normal'],1,1,'C',0);

}
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,5, '',0,0,'C',0);
$pdf->Cell(40,5,utf8_decode('TOTAL'),1,0,'C',0);
$pdf->Cell(40,5, $total,1,1,'C',0);

$pdf->Output('I');
$pdf->Output('F',$archivo);




$user_id = $_GET['user_id'];
require('../admin/ayuda.php');
require('../database/dbconect.php');
// query
$query3 = "INSERT INTO comprobantes (id_venta,user_id,pdf,fecha_venta) VALUES('$id_venta','$user_id','$archivo', NOW())";
$resultado3 = mysqli_query($con, $query3);
$con->close();

include('enviar_correo.php');
?>


