<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Community\beneficiaryInstitutionController as institute;
use App\Http\Controllers\Community\objetiveController as objetiveC;
use App\Http\Controllers\Community\stakeHolderController as stake; 
use App\Http\Controllers\Community\activityController as Activity;
use App\Http\Controllers\Community\participantController as Participant;
use Illuminate\Http\Request;
use App\Models\Community\Project;
use App\Models\Community\Objetive;
use App\Models\Authentication\Role;
use App\Models\Ignug\Address;
use phpDocumentor\Reflection\PseudoTypes\True_;
use App\Models\App\Catalogue;


class projectsController extends Controller
{

  public function show(Request $request){
    $project_env=array();
    //coodinador de vinculacion
    $projects=Project::with(['frequency_activities'=>function($frequency_activity){$frequency_activity;}])
     // ->with(['school_period'=>function($school){$school;}])
      ->with(['beneficiaryInstitution'=>function($BeneficiaryInstitution){
       // $BeneficiaryInstitution ->with(['address'=>function($address){$address;}]);
      }])
      
      ->with(['status'=>function($status){
       // $status;
      }])
      ->with(['career'=>function($career){
        $career//
          ->with('modality')
          ->with('institution');
      }])
      //
      ->with(['location'=>function($location){
    //    $location;
      }])
      ->with(['participant'=>function($participants){
         $participants//
         ->with(['user'=>function($user){$user;}])
         ->with(['type'=>function($type){$type;}])
         ->with(['function'=>function($function){$function;}]);
      }])
      ->with(['activities'=>function($activity){
        $activity//
        ->with(['type'=>function($type){$type;}]);
      }])
      ->with(['stake_holder'=>function($function){
        $function//
        ->with('type');
      }])
      ->with(['objetive'=>function($objetive){
        $objetive//->with('children')
          ->with('type');
      }])
      ->where($this->rol($request->role_id ,$request->career_id, $request->user_id))
      
       ->get();
    
    return response()->json($projects);
    
 }

 public function create(Request $request){
//  ELIMINAR EL FIELD utilizar case

switch ($request->tabPanel) {
  case "first":  
    $Project=new Project;
    $Project->code=$request->code;
    $Project->title=$request->title;
    $Project->field=$request->field;
    $Project->cycle=$request->cycle;
    $status=Catalogue::where('type','status_vinculacion')->first("id");
    $Project->career_id=$request->career["id"];
  //   $Project->location_id=$request->location["id"]; //localitation'
  //  $Project->lead_time=$request->lead_time;
  //  $Project->delivery_date=$request->delivery_date;// tiempo
  //  $Project->start_date=$request->start_date;// tiempo
  //  $Project->end_date=$request->end_date;//tienmpo
    $Project->create_by_id=$request->user;
    $Project->save();
    $rest=Project::where('code',$request->code)->first('id');
    $res=$this->edit($rest->id);
    return $res;
    break;
  case "second":
   //CharatableInstitution
    $charitableInstitution = new institute;
    $fkCharitableInstitution= $charitableInstitution->create($request);
    $Project=Project::find($request->project_id);
    $Project->beneficiary_institution=$fkCharitableInstitution;
    $Project->indirect_beneficiaries=json_encode([$request->indirect_beneficiaries]);
    $Project->direct_beneficiaries=json_encode([$request->direct_beneficiaries]);
    $Project->save();
    //stakeHolderCreate
    for($con=0;$con<(count($request->stake_holder)-1);$con++){
      $stakeHolder=$request->stake_holder[$con];
      $stake= new stake;
      $stake->stakeHolderCreate(
        $request->project_id,
        $stakeHolder
      );
    }
    $res=$this->edit($request->project_id);
    return $res;
    break;  
  case "third":
   //Objective 
   for($con=0;$con<count($request->objetive);$con++){
    $objective=$request->objetive[$con];
    $aims= new objetiveC;
    $aims->aimsCreate(
      $request->project_id,
      $objective,
    );  
   }
    $Project=Project::find($request->project_id);
    $Project->introduction=$request->introduction;
    $Project->situational_analysis=$request->situational_analysis;
    $Project->foundamentation=$request->foundamentation;
    $Project->justification=$request->justification;
    $Project->save();
    return;
    break;
  case "fourth"://cagar o editara estados
    $Project=Project::find($request->project_id);
    $Project->save();
    return;
    break;
  case "fifth":
     //Participant
     for($con=0;$con<(count($request->participants)-1);$con++){
    $participant=$request->participants[$con];
    $participants=new Participant;
    $participants->participantCreate(
      $request->project_id,
      $participant
    );
  } 
    $res=$this->edit($request->project_id);
    return $res;
    break;
  case "sixth":
     //ProjectActivities
     for($con=0;$con<count($request->activities);$con++){
      $activity=$request->activities[$con];
      $activities=new Activity;
      $activities->projectActivitiesCreate(
        $request->project_id,
        $activity
      );
      
     }
     $Project=Project::find($request->project_id);
     $Project->frequency_activities_id=$request->frecuenciaActiv["id"];
     $Project->description=$request->description;
     $Project->save();
    return;
    break;
  case "observation":
    return;
    break;
  case "file";
    return; 
    break; 
}
 
   //fk Search
  // $fkCharitableInstitution=BeneficiaryInstitution::where('ruc', $request->beneficiary_institution["ruc"])->first();
   //project    
   $Project=new Project;
 //  $Project->beneficiary_institution_id=$fkCharitableInstitution;                 
  // $Project->school_period=$request->school_period["id"];
   
    //$Project->assigned_line_id=$request->assigned_line_id;
  
   $Project->status_id= $request->status["id"];
   $Project->state=true;
   //$Project->field=$request->field;//campo nulleable
  // //  $Project->aim=$request->aim;//ojo no exixste pero proximo cambio
   
  
  // 
   
   $Project->bibliografia=$request->bibliografia;
   $Project->observations=$request->observations;
   $Project->save();
   //fk Project searh
   $fkProject=Project::where('code',$request->code)->first("id");
 
 
  
    //stakeHolderCreate
    for($con=0;$con<count($request->stake_holder);$con++){
        $stakeHolder=$request->stake_holder[$con];
        $stake= new stake;
        $stake->stakeHolderCreate(
          $fkProject->id,
          $stakeHolder
        );
    }
   return true; 
  }

  public function update(Request $request, $id){
    //CharatableInstitution
    $charitableInstitution = new institute;
    $fkCharitableInstitution= $charitableInstitution->update($request->beneficiary_institution);
    //fk Search
    //project    
    $Project=Project::find($id);
    $Project->beneficiary_institution=$fkCharitableInstitution;                 
    $Project->school_period=$request->school_period;
    $Project->career_id=$request->career["id"];
      //$Project->assigned_line_id=$request->assigned_line_id;
    $Project->code=$request->code;
    $Project->title=$request->title;
    $Project->status_id= $request->status["id"];
    $Project->state_id=1;
    $Project->field=$request->field;//campo nulleable
    //  $Project->aim=$request->aim;//ojo no exixste pero proximo cambio
    $Project->frequency_activities=$request->frequency_activities["id"];
    $Project->cycle=$request->cycle;
    $Project->location_id=$request->location["id"]; //localitation'
    $Project->lead_time=$request->lead_time;
    $Project->delivery_date=$request->delivery_date;// tiempo
    $Project->start_date=$request->start_date;// tiempo
    $Project->end_date=$request->end_date;//tienmpo
    $Project->description=$request->description;
    $Project->indirect_beneficiaries=$request->indirect_beneficiaries;
    $Project->direct_beneficiaries=$request->direct_beneficiaries;
    $Project->introduction=$request->introduction;
    $Project->situational_analysis=$request->situational_analysis;
    $Project->foundamentation=$request->foundamentation;
    $Project->justification=$request->justification;
    $Project->create_by=$request->user;
    $Project->bibliografia=$request->bibliografia;
    $Project->observations=$request->observations;
    $Project->save();
    //fk Project searh
    $fkProject=Project::where('code',$request->code)->first("id");
    //Objective
    for($con=0;$con<count($request->objetive);$con++){
      $objective=$request->objetive[$con];
      $fkaims=$objective["children"]["description"] <> null ?
      Objetive::where('description',$objective["children"]["description"])->first("id") : 
      (object) array("id"=>null);
      $aims= new objetiveC;
      $aims->aimsUpdate(
        $fkProject->id,
        $objective,
        $fkaims
      );  
    }
    //ProjectActivities
      for($con=0;$con<count($request->activities);$con++){
      $activity=$request->activities[$con];
      $activities=new Activity;
      $activities->projectActivitiesUpdate(
        $fkProject->id,
        $activity
      );
    }
    //Participant
    for($con=0;$con<count($request->participant);$con++){
        $participant=$request->participant[$con];
        $participants=new Participant;
        $participants->participantUpdate(
          $fkProject->id,
          $participant
        );
      } 
      //stakeHolder
      for($con=0;$con<count($request->stake_holder);$con++){
          $stakeHolder=$request->stake_holder[$con];
          $stake= new stake;
          $stake->stakeHolderUpdate(
            $fkProject->id,
            $stakeHolder
          );
      }
   return true; 
  }

  public function destroy($id){
    // cambiar de estado de 1 a 2
    $Project=Project::find($id);
    $Project->state=false;
    $Project->save();
      return "proyecto eliminado";
  }
  public function edit($id){
    $projects=Project::with(['frequency_activities'=>function($frequency_activity){$frequency_activity;}])
    //  ->with(['school_period'=>function($school){$school;}])
      ->with(['beneficiaryInstitution'=>function($BeneficiaryInstitution){
        $BeneficiaryInstitution;//
        
      }])
      
      ->with(['status'=>function($status){
       // $status;
      }])
      ->with(['career'=>function($career){
        $career//
          ->with(['modality'=>function($modality){$modality;}])
          ->with('institution');
      }])
      //
      ->with(['location'=>function($location){
    //    $location;
      }])
      ->with(['participant'=>function($participants){
         $participants//
         ->with(['user'=>function($user){$user;}])
         ->with(['type'=>function($type){$type;}])
         ->with(['function'=>function($function){$function;}]);
      }])
      ->with(['activities'=>function($activity){
        $activity//
        ->with(['type'=>function($type){$type;}]);
      }])
      ->with(['stake_holder'=>function($function){
        $function//
        ->with('type');
      }])
      ->with(['objetive'=>function($objetive){
        $objetive//->with('children')
          ->with('type');
      }])
      ->where('id',$id)
      ->first();
    
    return $projects;
    
   }
   
  public function rol($rol=2, $career=1,$user=1){
    $i=1;
    $Rol=[
      [],
      ['code','CAREER_COORDINATOR'],
      ['code','COMMUNITY_COORDINATOR'],
      ['code','teacher'],
    ];
    $Condicion=[
      [],
      [//CAREER_COORDINATOR coodinador de carrera 0
        ['career_id', $career],
        ['projects.state',true],
      	['projects.state',true]
      ],
      [//COMMUNITY_COORDINATOR coodrinador de vincyulacion 1
        ['projects.state',true],
        ['projects.state',true]
      ],
      [//TEACHER   
        ['projects.state',true],
        ['create_by',$user],
	      ['projects.state',true]
      ]
    ];
    do{
   $valor=!!Role::where($Rol[$i][0],$Rol[$i][1])->first('id') ?
    Role::where($Rol[$i][0],$Rol[$i][1])->first('id'):
    (object) array("id"=>0);
      if($rol==$valor->id){
        return $Condicion[2];
      }
      $i++;
    }while($rol== $valor->id ||  $i<count($Rol));   
  }
  public function creador(Request $request){
    switch ($request->tabPanel) {
      case "first":  
        $Project=Project::find($request->id_project);;
        $Project->code=$request->code;
        $Project->title=$request->title;
        $Project->field=$request->field;
        $Project->cycle=$request->cycle;
        //$Project->create_by=$request->user;
        $Project->save();
        $rest=Project::where('code',$request->code)->first('id');
        $res=$this->edit($rest->id);
        return $res;
        break;
    }
    
  }
 
}

    /**
     * $request->role 
     * $request->user
     * $request->institution se necesita
     * $request->career_id ADMINISTRADOR
      *ESTUDIANTE
      *PROFESOR
      *RECTOR
      *VICERRECTOR
      *CONSERJE
      *COORD. CARRERA
      *COORD. ACADEMICO
      *COORD. VINCULACION
      *COORD. INVESTIGACION
      *COORD. ADMINISTRATIVO
      *ADMIN
      *STUDENT
      *TEACHER
      *CHANCELLOR
      *VICE_CHANCELLOR
      *CONCIERGE
      *CAREER_COORDINATOR
      *ACADEMIC_COORDINATOR
      *COMMUNITY_COORDINATOR
      *INVESTIGATION_COORDINATOR
      *ADMINISTRATIVE_COORDINATOR
     */