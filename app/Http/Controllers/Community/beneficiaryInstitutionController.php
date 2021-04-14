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
        //img 
        // $filePath = !!$beneficiary_institution["logo"] <> null?
        // $beneficiary_institution["logo"]->storeAs('charitable_institution',  $beneficiary_institution["name"]. '.png', 'public')
        // :null;  
        //files

        //institution 
        $CharitableInstitution= new BeneficiaryInstitution; 
        $CharitableInstitution->state=true;
       // $CharitableInstitution->logo=$filePath;
        $CharitableInstitution->ruc=$beneficiary_institution["ruc"];
        $CharitableInstitution->name=$beneficiary_institution["name"];
       // $CharitableInstitution->location_id=$beneficiary_institution["location"];
        $CharitableInstitution->address=$beneficiary_institution["address"];
       // $CharitableInstitution->function=$beneficiary_institution["function"];
        $CharitableInstitution->save();
        return BeneficiaryInstitution::where('ruc', $beneficiary_institution["ruc"])->first()->id;
   
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cecy\Modelo1  $modelo1
     * @return \Illuminate\Http\Response
     */
    public function update($beneficiary_institution)
    {
         //img 
        $filePath = !!$beneficiary_institution["logo"] <> null?
        $beneficiary_institution["logo"]->storeAs('charitable_institution',  $beneficiary_institution["name"]. '.png', 'public')
        :null; 
        //institution 
        $CharitableInstitution= BeneficiaryInstitution::find($beneficiary_institution["id"]); 
        $CharitableInstitution->state=true;
        $CharitableInstitution->logo=$filePath;
        $CharitableInstitution->ruc=$beneficiary_institution["ruc"];
        $CharitableInstitution->name=$beneficiary_institution["name"];
        $CharitableInstitution->address=$beneficiary_institution["address"];
        $CharitableInstitution->location_id=$beneficiary_institution["location"];
        $CharitableInstitution->function=$beneficiary_institution["function"];
        $CharitableInstitution->save();
        return BeneficiaryInstitution::where('ruc', $beneficiary_institution["ruc"])->first()->id;
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
        [];
        return $charitable;
    }
     //pdf o documentos escaneados
    // $beneficiary = BeneficiaryInstitution::findOrFail($request->user_id);
    //       $filePath = $request->beneficiary_institution["file"]
    //            ->storeAs('avatars', $user->username . '.png', 'public');
    //           $pdf = new File([
    //            // 'fileable';
                    // 'name'=>$request->beneficiary_institution["name"],
                    // 'description=>documentos',
                    // 'uri'=>filePath
                    // 'type'=>'community';
    //           ]);
    //           $pdf->fileable()->associate($beneficiary);
    //           $avatar->state()->associate(State::where('code', '1')->first());
    //           $avatar->save();
}
