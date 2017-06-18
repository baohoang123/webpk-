<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\clinicuser;
use Input;
use Redirect;
use DB;
use Session;

class addClinicUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $db = DB::table('clinics')->where('emailsign', Session::get('emailuser'))->pluck('clinic_id');
        Return view('adminroom.adddoctor')->with('coderoom', $db);
       
    }

    /**
     * Show the form for creating a new resource.
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
        $input = $request->all();
        if(!(empty($input))){
           
              $bao = new clinicuser;
              $bao->fullname = Input::get('name'); 
              $bao->email = Input::get('email');
              $bao->password = Input::get('password');                                
              $bao->id_clinic = Input::get('codeclinic');                  
              $bao->id_doctor = Input::get('codedoctor');   
              $bao->datecreateacc = Input::get('datecreateacc');
              $bao->save();
              return Redirect::to('/bh-admin/process-add-doctor');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo "string";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
