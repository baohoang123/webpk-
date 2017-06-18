<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckLogin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use App\clinicuser;
use Session;
use Input;
use DB;

class bhadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      echo "string";
    }

   public function indexadminroom(){
  /*  $input = $request->all();
    $email = input::get('email');
    $email = md5(sha1(input::get('password')));
     if(!empty($input)){
       // $passDB = DB::table('hospitals')->where('email',$email)->pluck('password');
        $emailDB = DB::table('hospitals')->where('emailsign',$email)->pluck('emailsign');
    
        if($email == $emailDB){
           $MapkDB = DB::table('hospitals')->where('emailsign',$email)->pluck('Maphongkham');
           $nameroomDB = DB::table('hospitals')->where('emailsign',$email)->pluck('nameroom');
           Session::put('mapkSec', $MapkDB);
           Session::put('nameroomSec', $nameroomDB);
          return view('themes.index')->with('Mapk', $MapkDB);
        }else{

        }
     }*/
     return view('adminroom.index');
   }   
     public function loginbhadmin(){
      
       $email = Input::get('email');
      $password = md5(sha1(Input::get('password')));    
      //$db = DB::table('clinicusers')->leftJoin('clinics', 'clinics.emailsign', '=', 'clinicusers.email')->get();
       $dbr = DB::table('clinics')->where('emailsign', $email)->get();
       if(!empty($dbr)){
         foreach ($dbr as $key => $value) {
           $emailcheck = $value->emailsign;
     
         }
          $db = DB::table('clinicusers')->where('email', $emailcheck)->where('password', $password)->get();
          if(!empty($db)){
          foreach ($db as $key => $value) {
            $EmaiL = $value->email;
            $PassworD = $value->password;
          }
           $MapkDB = DB::table('clinics')->where('emailsign',$EmaiL)->pluck('clinic_id');
           $nameroomDB = DB::table('clinics')->where('emailsign',$EmaiL)->pluck('clinicname');
           Session::put('mapkSec', $MapkDB);
           Session::put('nameroomSec', $nameroomDB);
            if($email== $EmaiL &&  $password == $PassworD){
            $dbuser = DB::table('clinicusers')->where('email', $EmaiL)->get();
            foreach ($dbuser as $key ) {
            $fullnameDB = $key->fullname; 
            $emailDB = $key->email;
            $imageDB = $key->image;
            $mauserDB = $key->id_user;
            $statusDB = $key->status;
           }
            Session::put('nameuser', $fullnameDB);
            Session::put('emailuser', $emailDB);
            Session::put('imageuser', $imageDB);     
            Session::put('mauser', $mauserDB);
            Session::put('checkuserlogin', 'userlogintrue');
            Session::put('checkloginbhadmin', 'bhadminlogintrue');
            Return redirect::to('/bh-admin/dashboard');
           
           } else{
            Return redirect::to('/bh-admin');
            
           }
         }else{
            Return redirect::to('/bh-admin');
         }
       }else{
       Return redirect::to('/bh-admin');

  /*     $userbhadmin = array('email' => Input::get('email') , 'password' => Input::get('password'));
       $EmaiL = Input::get('email');
       if(Auth::attempt($userbhadmin)){
           echo "string";
       }
*/
    }

      
  /* if(!empty($db)){
           $MapkDB = DB::table('clinics')->where('emailsign',$email)->pluck('id_clinic');
           $nameroomDB = DB::table('clinics')->where('emailsign',$email)->pluck('clinicname');
           Session::put('mapkSec', $MapkDB);
           Session::put('nameroomSec', $nameroomDB);
         
         foreach ($db as $key ) {
              $EMAIL = $key->emailsign;
              $PASSWORD = $key->password;
              echo $EMAIL;
         }
         if($email== $EMAIL &&  $password == $PASSWORD){
            $dbuser = DB::table('clinicusers')->where('email', $email)->get();
            foreach ($dbuser as $key ) {
            $fullnameDB = $key->fullname; 
            $emailDB = $key->email;
            $imageDB = $key->image;
            $mauserDB = $key->id_user;
            $statusDB = $key->status;
           }
            Session::put('nameuser', $fullnameDB);
            Session::put('emailuser', $emailDB);
            Session::put('imageuser', $imageDB);     
            Session::put('mauser', $mauserDB);
          //  Return redirect::to('/bh-admin/dashboard');
           
           } else{
           // Return redirect::to('/bh-admin');
            
           }
     
    }else{
    //   Return redirect::to('/bh-admin');
    }*/
   
 }
   public function roomclinic($codeclinic){
    return view('themes.roomtwo');
   }

   public function getLogout(){
     Session::forget('mapkSec');
     Session::forget('nameroomSec');
     Session::forget('nameuser');
     Session::forget('emailuser');
     Session::forget('imageuser');     
     Session::forget('mauser'); 
     Session::forget('checkuserlogin');     
     Session::forget('checkloginbhadmin'); 
     return Redirect::to('./bh-admin');
   }

   public function adminroom(){
/*  $email = Session::get('emailuser');
  $db = DB::table('hospitals')->join('personnels','personnels.email','=','hospitals.emailsign')->get();
  foreach ($db as $key) {
    # code...
    $MAPK = $key->Maphongkham;
      }
   */
      return view('adminroom.dashboard');
    } 
   
   public function articlenewadmin(){
      return view('adminroom.articlenew');
   } 
   public function allarticleadmin()
   {
     return view('adminroom.allarticle');
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


   public function  alldoctor(){
  
   $doctor = DB::table('clinicusers')->where('id_clinic', Session::get('mapkSec'))->get();
  //  $doctor = clinicuser::all();

 
     return view('adminroom.alldoctor',compact('doctor'));
   }

   public function submitadddoctor(){
    
   }

}
