<?php

namespace App\Http\Controllers\Community;

use App\Models\Cecy\Modelo1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Community\projectsController as project;
use App\Models\Ignug\Catalogue;

class pdfController extends Controller
{
   public function projectVinculacion($id){
    $project= new project;
    $project=$project->edit($id);
    $pdf=\PDF::loadView('pdf/project/project',compact('project'))
    ->setPaper('a4')
    
    ->stream('project.pdf');
    return $pdf;
   }
   public function pdf($id){
    //https://styde.net/genera-pdfs-en-laravel-con-el-componente-dompdf/
    $project= new project;
    $data=$project->edit($id);
    $pdf=\PDF::loadView('pdf/convenio',compact('data'))
    
    ->stream('convenio.pdf');
   // return $pdf->download('prueba.pdf');
   return $pdf;
  }

}
