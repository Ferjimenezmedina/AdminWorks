<?php

namespace empleaDos\Http\Controllers;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\User;
use Auth;

class PdfController extends Controller
{
   public function invoice() 
   {
       $user = $this->getData();
       $view =  \View::make('pdf.invoice', compact('user'))->render();
       $pdf = \App::make('dompdf.wrapper');
       $pdf->loadHTML($view);
       return $pdf->stream('invoice.pdf');
   }

   public function getData() 
   {	
   	$id = Auth::user()->id;
   	$user = User::findOrFail($id);
      return $user;
   }
    public function invoicecomp($id)
    {
    
        $user = User::findOrFail($id);
        $view =  \View::make('pdf.invoice', compact('user'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('cv.pdf');
    }
    

    public function reportes() 
    {
        $users = User::where('type', 'user')->orderBy('id', 'ASC')->get();
        $date = date('Y-m-d');
        $view =  \View::make('pdf.aspirantes', compact('date','users'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteAspirante.pdf');
    }

    public function getData2() 
    {	
        	
    $users = User::where('type', 'user')->get();
      return $users;

      
    }

    public function reportesEmpresa() 
    {
        $users = User::where('type', 'company')->orderBy('id', 'ASC')->get();
        $date = date('Y-m-d');
        $view =  \View::make('pdf.empresas', compact('date','users'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteEmpresas.pdf');
    }
  public function reportesVacantes() 
    {
        $vacants = vacant::where('activo', 'true')->orderBy('id', 'ASC')->get();
        $date = date('Y-m-d');
        $view =  \View::make('pdf.vacantespostuladas', compact('date','vacants'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteVacantes-Activas.pdf');
    }


    public function getData3() 
    {	
        	
    $users = User::where('type', 'company')->get();
      return $users;

      
    }

    
}
