<?php

namespace App\Http\Controllers\Community;

use App\Models\Cecy\Modelo1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Community\Objetive;

class objetiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cecy\Modelo1  $modelo1
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo1 $modelo1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cecy\Modelo1  $modelo1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo1 $modelo1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cecy\Modelo1  $modelo1
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Objetive::where('id',$id)->delete();
    }

    public function aimsCreate($id_project,$objective,
          $indicator,
          $means_verification,
          $description){

        $SpecificAim = new Objetive;
        $SpecificAim->project_id=$id_project;
        $SpecificAim->indicator= $indicator;
        $SpecificAim->means_verification=$means_verification;
        $SpecificAim->description=$description;
        $SpecificAim->type_id=$objective;
      //  $SpecificAim->parent_id=$fkaims;
        $SpecificAim->save();
    }
    public function aimsUpdate($id_project,array $objective,
    $indicator,
    $means_verification,
    $description,
    $id){
        $SpecificAim = Objetive::find($id);
        $SpecificAim->project_id=$id_project;
        $SpecificAim->indicator= $indicator;
        $SpecificAim->means_verification=$means_verification;
        $SpecificAim->description=$description;
        $SpecificAim->type_id=$objective["id"];
        $SpecificAim->save();
      }
}

/*  
    obejetive:[
        mv:asda 
        i:documento   
        d:desraoollar un sistemas erb quw de todo
        t:2 //cata logo objE resultado obg actividad 
        obj<-obs<-actividad o 
        children: desraoollar un sistemas erb quw de todo
        ]
    ]
*/
