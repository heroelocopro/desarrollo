<?php

namespace App\Http\Controllers;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
	protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }

    public function index() 
    {
        $certificados = DB::table('certificados')
        ->select('sondeos.tema','certificados.fecha_gen','certificados.num_cert','ciudadanos.nombres','ciudadanos.apellidos','ciudadanos.num_docs')
        ->join('sondeos', 'certificados.sondeos_id', '=' ,'sondeos.id')
        ->join('ciudadano_has_sondeos','sondeos.id','=','ciudadano_has_sondeos.ciudadano_has_sondeos')
        ->join('ciudadanos','ciudadano_has_sondeos.ciudadano_usuario_idusuario', '=' ,'ciudadanos.usuario_idusuario')
        ->WHERE('ciudadano_has_sondeos.ciudadano_has_sondeos','=','certificados.sondeos_id')
        ->get();


        $this->fpdf->SetFont('Arial', 'B', 20);
        $this->fpdf->AddPage("L", ['200', '200']);
         foreach($certificados as $certificado){
            $this->fpdf->SetTitle('Certificado de participacion en el sondeo de opinion');
            $this->fpdf->Text(15, 10, "Certificado de participacion en el sondeo de opinion");  
            $this->fpdf->SetFontSize(14.0); 
            $this->fpdf->Write(45,'Tema del sondeo:' . $certificado->tema);
            $this->fpdf->Ln(10.0);
            $this->fpdf->Write(45,'Fecha de generacion:' . $certificado->fecha_gen);
            $this->fpdf->Ln(10.0);
            $this->fpdf->Write(45,'Numero de certificado:' . $certificado->num_cert);
            $this->fpdf->Ln(10.0);
            $this->fpdf->Write(45,'Nombre del ciudadano:' . $certificado->nombres);
            $this->fpdf->Ln(10.0);
            $this->fpdf->Write(45,'Apellido del ciudadano:' . $certificado->apellidos);
            $this->fpdf->Ln(10.0);
            $this->fpdf->Write(45,'Numero de documento:' . $certificado->num_docs);
            $this->fpdf->Ln(50.0);
        }

        $this->fpdf->SetFontSize(14.0); 
        $this->fpdf->Write(5,'Validez del certificado:' . 'Todo certificado debe tener un numero ya registrado una vez se realizo el sondeo, en caso de que el certificado sea falso no exista, el documento no se generara, si no hay un certificado realizado, estara en blanco');
        $this->fpdf->Output();

        exit;
    }
}
