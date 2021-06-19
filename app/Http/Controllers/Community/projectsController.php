<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Community\beneficiaryInstitutionController as institute;
use App\Http\Controllers\Community\objetiveController as objetiveC;
use App\Http\Controllers\Community\stakeHolderController as stake; 
use App\Http\Controllers\Community\activityController as Activity;
use App\Http\Controllers\Community\participantController as Participant;
use App\Http\Controllers\Community\authorityController as authority;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Community\Project;
use App\Models\Community\Objetive;
use App\Models\Authentication\Role;
use App\Models\Ignug\Address;
use phpDocumentor\Reflection\PseudoTypes\True_;
use App\Models\App\Catalogue;
use App\Models\Community\Activities;
use Illuminate\Support\Carbon;

use App\Models\Community\Participant as part;
use Mockery\Undefined;

class projectsController extends Controller
{

  public function show(Request $request){
    $project_env=array();
    //coodinador de vinculacion
    $projects=Project::with(['frequency_activities'=>function($frequency_activity){$frequency_activity;}])
     // ->with(['school_period'=>function($school){$school;}])
      ->with(['beneficiaryInstitution'=>function($BeneficiaryInstitution){
        $BeneficiaryInstitution->with(['location'=>function($canton){
          $canton->with('type')->with(['parent'=>function($provincia){
            $provincia->with('type')->with('parent');
          }]);
        }]);
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
        $location->with('type')->with(['parent'=>function($canton){
          $canton->with('type')->with(['parent'=>function($provincia){
            $provincia->with('type');
          }]);
        }]);
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
 public function status($id,Request $request){
  $status=Catalogue::where('code',$request->status)->first();
if($request->status=='STATUS_3'){
    $Project=Project::find($id);
    $Project->status_id= $status->id;
    $Project->observations= $request->observation;
    $Project->save();
  }else{
    $Project=Project::find($id);
    $Project->status_id= $status->id;
    $Project->save();
  }
  $Project->save();
  $res=$this->edit($id);
  return $res; 
}
public function file($id,Request $request){
  $Project=Project::find($id);
  if($Project->document <> null || $Project->document <> ''){
    Storage::delete('strorage/'.$Project->document);
  }
  $file = $request->file('document');
  $date =time();
  $name=$date.$file->getClientOriginalExtension();
  $filePath = $file->storeAs('file',$name, 'public');
  $url=Storage::url($filePath);
  $Project->document=$url;
  $Project->save();
  return $Project; 
}

public function schedules($id,Request $request){
  $Project=Project::find($id);
  $file = $request->file('document');
  if($Project->schedules <> null || $Project->schedules <> ''){
    Storage::delete($Project->schedules);
  }
  $filePath = $file->storeAs('schedules',$file->getClientOriginalName(), 'public');
  $url=Storage::url($filePath);
  $Project->schedules=$url;
  $Project->save();  
  return $Project; 
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
    $status=Catalogue::where([['type','status_vinculacion'],['code','STATUS_1']])
    ->first('id');
    $Project->status_id= $status->id;
    $Project->career_id=$request->career["id"];
    $Project->location_id=$request->location["id"]; 
    $Project->lead_time=$request->lead_time;
    $Project->delivery_date=$request->delivery_date;// tiempo
    $Project->start_date=$request->start_date;// tiempo
    $Project->end_date=$request->end_date;//tienmpo
    // $Project->create_by_id=$request->user;
    $Project->create_by_id=1;
    $Project->save();
    $rest=Project::where('code',$request->code)->first('id');
    $res=$this->edit($rest->id);
    return $res; 
    break;
  case "second":
   //CharatableInstitution
    $charitableInstitution = new institute;
    $fkCharitableInstitution= $charitableInstitution->create($request);
    $valur=$request->project_id;
    $Project=Project::find($valur);
    $Project->beneficiary_institution_id=$fkCharitableInstitution;
    $Project->indirect_beneficiaries=$request->indirect_beneficiaries;
    $Project->direct_beneficiaries=$request->direct_beneficiaries;
    $Project->save();
    // //stakeHolderCreate
     
    $res=$this->edit($valur);
    //$res=$request->stake_holder;
    return $res;
    break;  
  case "holders":
    $stake= new stake;
    $valor= $request->type['id']== "undefined" ? null : $request->type['id'];
          
   $res= $stake->stakeHolderCreate(
      $request->project_id,
      $request->name,
      $request->lastname,
      $request->identification,
      $request->position, 
      $valor
    );
   // return $res;
    $rest=$this->edit($request->project_id);
    $res=$rest->stake_holder;
    return $res;  
  break;
  case "third":
    $Project=Project::find($request->project_id);
    $Project->introduction=$request->introduccion;
    $Project->situational_analysis=$request->situational_analysis;
    $Project->foundamentation=$request->fundamentacion;
    $Project->justification=$request->justificaion;
    $Project->save();
    $res=$this->edit($request->project_id);
   // $res=$request->project_id;
    return $res;
    break;
    case "aims":
      //  $res=$request;
      //  return $res;
      $aims= new objetiveC;
      $aims->aimsCreate(
        $request->project_id,
        $request->type['id'],
        $request->indicator,
        $request->means_verification,
        $request->description
      );
       $res=$this->edit($request->project_id);
     // $res=$request->project_id;
      return $res;
    break;
  case "sixth":
    //  ProjectActivities
    $activities=new Activity;
    for($con=0;$con<=(count($request->actividadesVincu)-1);$con++){
      $activity=$request->actividadesVincu[$con];
      
      $activities->projectActivitiesCreate(
        $request->project_id,
        $activity
      );
     }
     
     for($con=0;$con<=(count($request->ejesEstrategicos)-1);$con++){
      $activity=$request->ejesEstrategicos[$con];
      $activities->projectActivitiesCreate(
        $request->project_id,
        $activity
      );
     }
     
     for($con=0;$con<=(count($request->areasAplicacion)-1);$con++){
      $activity=$request->areasAplicacion[$con];
      $activities->projectActivitiesCreate(
        $request->project_id,
        $activity
      );
     }
     $Project=Project::find($request->project_id);
     $Project->frequency_activities_id=$request->frecuenciaActiv["id"];
     $Project->description=$request->descripGeneral;
     $Project->bibliografia=$request->bibliografia;
     $Project->save();
     
     $res=$this->edit($request->project_id);
    // $res=$request;
    return $res;
    break;
}
}

  public function update(Request $request){
    switch ($request->tabPanel) {
      case "first":  
        
        $Project=Project::find($request->id_project);
        $Project->code=$request->code;
        $Project->title=$request->title;
        $Project->field=$request->field;
        $Project->cycle=$request->cycle;
        $Project->career_id=$request->career["id"];
        $Project->location_id=$request->location["id"]; //localitation'
        $Project->lead_time=$request->lead_time;
        $Project->delivery_date=$request->delivery_date;// tiempo
        $Project->start_date=$request->start_date;// tiempo
        $Project->end_date=$request->end_date;//tienmpo
        $Project->save();
        $res=$this->edit($request->project_id);
        return $res; 
        break;
      case "second":
       //CharatableInstitution
      //  $res=$request;
      //   return $res;
        $charitableInstitution = new institute;
        $fkCharitableInstitution= $charitableInstitution->update($request,$request->beneficiary_id);
        $Project=Project::find($request->project_id);
        //$Project->beneficiary_institution=$fkCharitableInstitution;
        $Project->indirect_beneficiaries=$request->indirect_beneficiaries;
        $Project->direct_beneficiaries=$request->direct_beneficiaries;
        $Project->save();
        $res=$this->edit($request->project_id);
        //$res=$request->stake_holder;
        return $fkCharitableInstitution;
        break;  
        case "holders":
          $valor= $request->type['id']== "undefined" ? null : $request->type['id'];
          $stake= new stake;
          $stake->stakeHolderUpdate(
            $request->project_id,
            $request->name,$request->lastname,
            $request->identification,
            $request->position, 
            $valor,
            $request->id_holder
          );
          $rest=$this->edit($request->project_id);
          $res=$rest->stake_holder;
          return $res;  
        break;
      case "third":
       //Objective 
       
        $Project=Project::find($request->project_id);
        $Project->introduction=$request->introduccion;
        $Project->situational_analysis=$request->situational_analysis;
        $Project->foundamentation=$request->fundamentacion;
        $Project->justification=$request->justificaion;
        $Project->save();
        $res=$this->edit($request->project_id);
       // $res=$request->project_id;
        return $res;
        break;
      case "aims":
        $aims= new objetiveC;
        $aims->aimsUpdate(
          $request->project_id,
          $request->type,
          $request->indicator,
          $request->means_verification,
          $request->description,
          $request->id_objetive
        );
        $res=$this->edit($request->project_id);
       // $res=$request->project_id;
        return $res;
      break;  
      case "fourth"://cagar o editara estados
        $Project=Project::find($request->project_id);
        $Project->save();
        return;
        break;
      case "sixth":
         //ProjectActivities
        $activities=new Activity;       
        $activities->destroy($request->project_id); 
        for($con=0;$con<=(count($request->actividadesVincu)-1);$con++){
          $activity=$request->actividadesVincu[$con];
          $activities=new Activity;   
          $activities->projectActivitiesCreate(
            $request->project_id,
            $activity
          );
         }
         
         for($con=0;$con<=(count($request->ejesEstrategicos)-1);$con++){
          $activity=$request->ejesEstrategicos[$con];
          $activities=new Activity;   
          $activities->projectActivitiesCreate(
            $request->project_id,
            $activity
          );
         }
         
         for($con=0;$con<=(count($request->areasAplicacion)-1);$con++){
          $activity=$request->areasAplicacion[$con];
          $activities=new Activity;   
          $activities->projectActivitiesCreate(
            $request->project_id,
            $activity
          );
         }
         $Project=Project::find($request->project_id);
         $Project->frequency_activities_id=$request->frecuenciaActiv["id"];
         $Project->description=$request->descripGeneral;
         $Project->save();
         $res=$this->edit($request->project_id); 
         return $res->activities; 
        break; 
    }
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
        $BeneficiaryInstitution->with(['location'=>function($canton){
          $canton->with('type')->with(['parent'=>function($provincia){
            $provincia->with('type')->with('parent');
          }]);
        }]);
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
        $location->with('type')->with(['parent'=>function($canton){
          $canton->with('type')->with(['parent'=>function($provincia){
            $provincia->with('type');
          }]);
        }]);
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
      ->with(['create_by'=>function($create_by){

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