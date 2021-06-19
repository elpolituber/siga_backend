<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cecy\Modelo1;
use App\Models\Community\Participant;
use App\Models\App\Catalogue;

class participantController extends Controller
{
    public function destroy($id)
    {
        Participant::where('id',$id)->delete();
    }
    public function studentCreate(Request $request){

        $type=Catalogue::where('code','CARGO_6')->first();
        $participant= new Participant;
        $participant->user_id=$request->user['id'];
        $participant->project_id=$request->project_id;
        $participant->type_id=$type['id'];//estudiante profesor
        $participant->position=$request->position; 
        $participant->working_hours=$request->working_hours;
        $participant->save();
        return $participant;
    }

    public function teacherCreate(Request $request){
        $type=Catalogue::where('code','CARGO_7')->first();
        $participant= new Participant;
        $participant->user_id=$request->user['id'];
        $participant->project_id=$request->project_id;
        $participant->type_id=$type['id'];//estudiante profesor
        $participant->working_hours=$request->working_hours;    
        $participant->function_id=$request->function['id'];
        $participant->save();
        return $participant;
    }
    public function teacherUpdate(Request $request){
        $participant= Participant::find($request->id_participant);
        $participant->user_id=$request->user['id'];
        $participant->working_hours=$request->working_hours;
        $participant->function_id=$request->function['id'];
        $participant->save();
        return $participant;
    }

    public function studentUpdate(Request $request){
        $participant= Participant::find($request->id_participant);
        $participant->user_id=$request->user['id'];
        $participant->position=$request->position; 
        $participant->working_hours=$request->working_hours;
        $participant->save();
        return $participant;
    }
}
