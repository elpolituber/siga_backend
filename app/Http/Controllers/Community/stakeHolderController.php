<?php

namespace App\Http\Controllers\Community;

use App\Models\Cecy\Modelo1;
use App\Http\Controllers\Controller;
use App\models\Community\StakeHolder;
use App\Http\Controllers\Community\projectsController as project;
use Illuminate\Http\Request;

class stakeHolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($stakeHolder)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cecy\Modelo1  $modelo1
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo1 $modelo1)
    {
        
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
     * 
     */
    public function destroy($id){
        StakeHolder::where('id',$id)->delete();
    }
    public function stakeHolderCreate($id_project,$name,$lastname,$identification,$position,$type){
        // //return $stakeHolders['identification'];
        // if(!!StakeHolder::where('identification',$identification)->where('project_id', $id_project)->first()){
            $stakeHolder=new StakeHolder;
            $stakeHolder->state=true;
            $stakeHolder->project_id=$id_project;
            $stakeHolder->name=$name;
            $stakeHolder->lastname=$lastname;
            $stakeHolder->identification=$identification;
            $stakeHolder->position=$position;
            $stakeHolder->type_id=$type;
            $stakeHolder->save();
            return"se guardo";
        // }
        // return"existe";
    }
    public function stakeHolderUpdate($id_project,$name,$lastname,$identification,$position,$type,$id){
        $stakeHolder=StakeHolder::find($id);
        $stakeHolder->state=true;
        $stakeHolder->project_id=$id_project;
        $stakeHolder->name=$name;
        $stakeHolder->lastname=$lastname;
        $stakeHolder->identification=$identification;
        $stakeHolder->position=$position;
        $stakeHolder->type_id=$type;
     //   $stakeHolder->function=$stakeHolders["function"]["id"];
        $stakeHolder->save();
    }

}
