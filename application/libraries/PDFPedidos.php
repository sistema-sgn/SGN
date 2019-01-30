<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/PHPfpdf/fpdf.php";
 
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class PDFPedidos extends FPDF {

        public function __construct() {
            parent::__construct();
        }

        // El encabezado del PDF
        public function Header(){ 
            $fechaActual=getdate();//Fecha Del sistema
            // $this->Image('imagenes/logo.png',10,8,22);
            $this->SetFont('Arial','B',13);
            $this->Cell(30);
            $this->Cell(120,10,'Listado del pedido',0,0,'C');
            $this->Ln('5');
            $this->SetFont('Arial','B',8);
            $this->Cell(30);
            $this->Cell(120,10,utf8_decode("Pedidos del día: $fechaActual[mday] del $fechaActual[mon] del $fechaActual[year]"),0,0,'C');//el utf8_decode convierte nuestros caracteres a ISO-8859-1.
            $this->Ln(20);
       }
       // El pie del pdf
       public function Footer(){
           $this->SetY(-15);
           $this->SetFont('Arial','I',8);
           $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
      }
    }
?>