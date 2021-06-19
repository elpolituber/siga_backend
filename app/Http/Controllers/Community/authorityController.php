<?php

namespace App\Http\Controllers\Community;

use App\Models\Cecy\Modelo1;
use App\Http\Controllers\Controller;
use App\Models\Community\Authority;
use Illuminate\Http\Request;

class authorityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        // $res=$request->user['id'];
        // return $res;
        $authority = new Authority;
        $authority->user_id=$request->user['id'];
        $authority->type_id=$request->type['id'];
        // $authority->status_id=$request->status_id;
        // $authority->start_date=$request->start_date;
        // $authority->end_date=$request->end_date;
        $authority->state=true;
        $authority->save();
        $res= Authority::with('user')->with('type')->where('state',true)->get() ;
        return $res;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cecy\Modelo1  $modelo1
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $res= Authority::with('user')->with('type')
        ->where('state',true)->get();
        return $res;
    }

  
    public function update(Request $request)
    {
        $authority = Authority::find($request->id);
        // $authority->user_id=$request->user_id;
        // $authority->type_id=$request->type['id'];
        // // $authority->status_id=$request->status;
        // $authority->start_date=$request->start_date;
        // $authority->end_date=$request->end_date;
        $authority->state=false;
        $authority->save();
        $authorities = new Authority;
        $authorities->user_id=$request->user['id'];
        $authorities->type_id=$request->type['id'];
        $authority->state=true;
        $authorities->save();
        $res= Authority::with('user')->with('type')->where('state',true)->get();
        return $res;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cecy\Modelo1  $modelo1
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $authority = Authority::find($id);
        $authority->state=false;
        $authority->save();
        $res= Authority::with('user')->with('type')
        ->where('state',true)->get();
        return $res;
    }

    
}
