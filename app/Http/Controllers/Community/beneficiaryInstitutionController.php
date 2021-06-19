<?php

namespace App\Http\Controllers\Community;

use App\Models\Cecy\Modelo1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community\BeneficiaryInstitution;
use Illuminate\Support\Facades\Storage;
use App\Models\Ignug\Address;


class beneficiaryInstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $beneficiary_institution )
    {
        //institution 
        $CharitableInstitution= new BeneficiaryInstitution; 
        $CharitableInstitution->state=true;
       // $CharitableInstitution->logo=$filePath;
        $CharitableInstitution->ruc=$beneficiary_institution["ruc"];
        $CharitableInstitution->name=$beneficiary_institution["nameInstitute"];
       $CharitableInstitution->location_id=$beneficiary_institution["location"]["id"];
        $CharitableInstitution->address=$beneficiary_institution["address"];
        $CharitableInstitution->parroquia=$beneficiary_institution["parroquia"];  
        $CharitableInstitution->save();
        return BeneficiaryInstitution::where('ruc', $beneficiary_institution["ruc"])->first()->id;   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logo($id ,Request $request)
    {
        $CharitableInstitution= BeneficiaryInstitution::find($id); 
        if($CharitableInstitution->logo <> null || $CharitableInstitution->logo <> ''){
            Storage::delete($CharitableInstitution->logo);
        }
        $file = $request->file('logo');//->store('public/beneficiaryLogos');
        
         $filePath = $file->storeAs('institutions/vincu', $file->getClientOriginalName(), 'public');
        $url=Storage::url($filePath);
        $CharitableInstitution->logo=$url;
        $CharitableInstitution->save();
        return $CharitableInstitution;
        
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
    public function update($beneficiary_institution,$id)
    {
         
         $CharitableInstitution=BeneficiaryInstitution::find($id); 
         //$CharitableInstitution->state=true;
         $CharitableInstitution->ruc=$beneficiary_institution["ruc"];
         $CharitableInstitution->name=$beneficiary_institution["nameInstitute"];
        $CharitableInstitution->location_id=$beneficiary_institution["location"]["id"];
         $CharitableInstitution->address=$beneficiary_institution["address"];
       $CharitableInstitution->parroquia=$beneficiary_institution["parroquia"];             
    //     // $CharitableInstitution->function=$beneficiary_institution["function"];
         $CharitableInstitution->save();
         $res=BeneficiaryInstitution::where('ruc', $beneficiary_institution["ruc"])->first("id");
         return  $res;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cecy\Modelo1  $modelo1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo1 $modelo1)
    {
        //
    }
    public function search(Request $request)
    {
        
        $charitable=!!BeneficiaryInstitution::where('ruc',$request->ruc)->first()?
        BeneficiaryInstitution::where('ruc',$request->ruc)->first():
        null ;
        return $charitable;
    }
     
}
