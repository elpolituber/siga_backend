<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Community\Project;
use Illuminate\Http\Request;
use App\Models\App\Career;
use App\Models\App\Catalogue;
use App\Models\App\Location; 
use App\Models\Authentication\User;

class combosController extends Controller
{//objeto se fue
  public function show(){
    $fraquencyOfActivity=Catalogue::where('type','fraquency_activity_vinculacion')->get(["name","id","type","code"]);
    $assignedLine=Catalogue::where('type','assigned_line_vinculacion')->get(["name","id","type","code"]);
    $linkageAxes=Catalogue::where('type','linkage_axes_vinculacion')->get(["name",'id',"type","code"]);//ejes de vinculacion
    $bondingActivities=Catalogue::where('type','bonding_activities_vinculacion')->get(["name","id","type","code"]);//Actividad de vinculación
    $researchAreas=Catalogue::where('type','research_areas_vinculacion')->get(["name","id","type","code"]);//rea de investigacion
    $aims=Catalogue::where('type','aims_types_vinculacion')->get(["name","id","type","code"]);
    $funtionTeacher=Catalogue::where('type','funtion_vinculacion')->get(["name","id","type","code"]);
    $status=Catalogue::where('type','status_vinculacion')->get(["name","id","type","code"]);
    $cargo=Catalogue::where('type','cargo_vincualcion')->get(["name","id","type","code"]);
    $career=Career::with('modality')->with('institution')->get();
    $combos=array(
        "assignedLine"=>$assignedLine,
        "linkageAxes"=>$linkageAxes,
        "bondingActivities"=>$bondingActivities,
        "fraquency"=>$fraquencyOfActivity,
        "research_areas"=>$researchAreas,
        "objective"=>$aims,
        "teacher_funtion"=>$funtionTeacher,
        "status"=>$status,
        "cargo"=>$cargo,
        "career"=>$career,
      );
    return $combos;
 }
 public function create(Request $request){
    $value=$this->indice($request->type);
    $catalogue= new Catalogue;
    $catalogue->code =$value;
    $catalogue->name = $request->name;
    $catalogue->type = $request->type;//revisar
    $catalogue->state_id=1 ;
    $catalogue->save();
    return "se han completado su peticion";
 }
 
public function indice($type){
  $value=Catalogue::where('type',$type)->count();
  $num=$value+1;
  if($type == 'status_vinculacion'){
    return "status_".$num;
  }
  if($type =='fraquency_activity_vinculacion'){
    return 'fraquency_activity_'.$num;
  }
  if($type =='assigned_line_vinculacion'){
    return 'assigned_line_'.$num;
  }
  if($type =='linkage_axes_vinculacion'){
    return 'linkage_axes_'.$num;
  }
  if($type =='aims_types_vinculacion'){
    return 'aims_types_'.$num;
  }
  if($type =='bonding_activities_vinculacion'){
    return 'bonding_activities_'.$num;
  }
  if($type =='research_areas_vinculacion'){
    return 'research_areas_'.+($num);
  }
  if($type =='cargo_vincualcion'){
    return 'research_areas_'.+($num);
  }
  if($type =='funtion_vinculacion'){
    return 'funtion_'.+($num);
  }
}
  
  public function index(Request $request)
    {
        $locations = Location::with('type')->with('parent')->with(['children' => function ($province) {

            $province->with('type')->with('parent')->with(['children' => function ($canton) {

                $canton->with('type')->with('parent')->with(['children' => function ($parish) {
                    $parish->with('type')->with('parent')->with('children');
                }]);
            }]);
        }])->get();
        return  $locations;      
    }


  public function user(){
    $user=User::get();
    return $user;
  }
}