<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Requests\CheckFormRequest;
use App\Http\Requests\Checkregiswebsite;
use App\Http\Requests\CheckAdminRoom;
use App\Http\Requests\Check;
use App\Http\Requests\CheckLogin;
use App\Http\Requests\CheckEditUserInfo;
use App\Http\Requests\CheckLoginStaff; 
use App\Http\Controllers\Controller;
use App\admin;
use App\personnel;
use App\hospital;
use App\clinicuser;
use App\clinic;
use App\clinicwebsite;
use App\clinicusertemp;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validale;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Session;
use Illuminate\Http\Request;



class webpkcontroller extends Controller
{
    //
    public function webpk(){
      return view('webpk');
    }

    public function pageintroduce(){
    	return view('introduce');
    }
    public function pagearticle(){
      return view('articles'); 
    }
    public function pageclinic(){
      
      $arrdepart = DB::table('departments')->paginate(4);
      $arrnhikhoa = DB::table('clinics')->get();
 
      
      return view('clinic')->with(['arrdepart' => $arrdepart, 'arrnhikhoa' => $arrnhikhoa]);
    }
    public function pageconcreateclinic(){
      return view('introduce');
    }
    public function pageconstaffclinic(){
      return view('introduce');
    }
    public function pageconpatientclinic(){
      return view('introduce');
    }  
    public function pagecontact(){
      return view('contact');
    } 
    public function referservice(){
      return view('contact');
    } 
    public function phongkham(){
      $db = DB::table('clinics')->select('image','clinic_id')->join('clinicusers','clinicusers.email','=','clinics.emailsign')->get();     
      if(!empty($db)){
        foreach ($db as $key) {
          # code...
          $IMAGE = $key->image;
          $MAPK = $key->clinic_id;

        }
     
    }
    return view('phongkham')->with('Maphongkham',$MAPK);
    }
    public function pagechildrenclinic(){
      return view('clinics.pagechildrenclinic');
    }
 

     public function admin(){
     	return view('admin.dashboard');
     }

      public function abc(){
    	 $users = users::all();
    	 return view("users")->with("users", $artic);
    }

     

    public function roomone(){
      return view('themes.roomone');
    }   
    
    public function roomtwo(){
      return view('themes.roomtwo');
    } 

    public function roomthree(){
      return view('themes.roomthree');
    } 

    
    public function storeadmin(CheckFormRequest $request){
     
     
    $dulieu_tu_input = $request->all();

     admin::create($dulieu_tu_input);
 
      return redirect('new-admin');
  }

   public function signup(){
 
    return view('signup');    
   }

   public function storesign(CheckFormRequest $request){
      $imagepath = './album/image';
      $nameimage = $request->file('image')->getClientOriginalName(); 
      $request->file('image')->move($imagepath, $nameimage);
      $input = $request->all();
  
     if(!empty($input)){
      $bao = new clinicuser;
      $bao->fullname = Input::get('fullname'); 
      $bao->email = Input::get('email');
      $bao->password = '';      
      $bao->idnumber = Input::get('idnumber');
      $bao->datecreateacc = Input::get('datecreateacc');
      $bao->birthday = Input::get('birthday');
      $bao->tel = Input::get('tel');
      $bao->image = $nameimage;
      $bao->street = Input::get('street');
      $bao->district = Input::get('district');
      $bao->city = Input::get('city');
      $bao->status = 'not activated';      
      $bao->save();

      $baotemp = new clinicusertemp;    
      $baotemp->emailtemp = Input::get('email');
      $baotemp->passwordtemp = md5(sha1(Input::get('password')));
      $baotemp->id_codecheck = rand(0,1000).rand(1000, 10000);
      $baotemp->save();

      $idcodecheck = DB::table('clinicusertemps')->where('emailtemp', Input::get('email'))->pluck('id_codecheck');     
       
     }
      
      Mail::send('mails.welcome', array('fullname'=>Input::get('fullname'),'email'=>Input::get('email'),'idcodecheck' => $idcodecheck), function($message){
        
        $message->to(Input::get('email'), Input::get('fullname').' '.Input::get('idnumber'))->subject('Xin chào bạn đến với BHNet');
        });
       Session::put('register_success', "Đã thành công, Vào mail để kích hoạt tài khoản");
      Return Redirect::action('webpkcontroller@signup');
 //  }
}


    
  public function loginactivated($idcodecheck){
    $db = DB::table('clinicusertemps')->select('emailtemp','passwordtemp')->where('id_codecheck', $idcodecheck)->get();
   foreach ($db as $key ) {
     # code...
    $emailtemp = $key->emailtemp;
    $passwordtemp = $key->passwordtemp;
   }
    
    DB::table('clinicusers')->where('email', $emailtemp)->update(['password' => $passwordtemp, 'status' => 'activated']);
    DB::table('clinicusertemps')->where('id_codecheck', $idcodecheck)->delete();
    $dbuser = DB::table('clinicusers')->where('email', $emailtemp)->get();
    foreach ($dbuser as $key ) {
    $fullnameDB = $key->fullname; 
    $emailDB = $key->email;
    $imageDB = $key->image;
    $mauserDB = $key->id_user;
    $statusDB = $key->status;
   }
    if($emailtemp == $emailDB && $statusDB == 'activated'){
      Session::put('nameuser', $fullnameDB);
      Session::put('emailuser', $emailDB);
      Session::put('imageuser', $imageDB);     
      Session::put('mauser', $mauserDB);
      Session::put('checkuserlogin', 'userlogintrue');
       return Redirect::to('/');
    }
   
  } 
   

   public function login(){
    
    return view('login');    
   }

    public function storelogin(CheckLogin $request){
    $input = $request->all();

    if(!empty($input)){
     $email = Input::get('email');
     $password= md5(sha1(Input::get('password')));
     $name = DB::table('clinicusers')->where('email',$email);
     $pass = $name->pluck('password');
     $fullname = DB::table('clinicusers')->where('email',$email)->pluck('fullname');
     $emailDB = DB::table('clinicusers')->where('email',$email)->pluck('email');
     $imageDB = DB::table('clinicusers')->where('email',$email)->pluck('image');
     $mauserDB = DB::table('clinicusers')->where('email',$email)->pluck('id_user');
     $statusDB = DB::table('clinicusers')->where('email',$email)->pluck('status');
    
     if ($emailDB == $email && $statusDB == 'not activated') {
       # code...
      return Redirect::to('log-in')->with('errors-message-activated','Bạn chưa kích hoạt tài khoản trên email đăng ký');
     }else{
          if($password == $pass && $email == $emailDB && $statusDB == 'activated'){
          Session::put('nameuser', $fullname);
          Session::put('emailuser', $emailDB);
          Session::put('imageuser', $imageDB);     
          Session::put('mauser', $mauserDB);
          Session::put('checkuserlogin', 'userlogintrue');
           $checkroomDB = DB::table('clinics')->where('emailsign',$email)->get();
          if(!empty($checkroomDB)){
          foreach ($checkroomDB as $key => $value) {
            # code...
            $MapkDB = $value->clinic_id;
            $nameroomDB = $value->clinicname;
             
          }
              Session::put('mapkSec', $MapkDB);
              Session::put('nameroomSec', $nameroomDB);
              Session::put('checkloginbhadmin', 'bhadminlogintrue');
              
          }


           return Redirect::to('/');
          }else{
           if($password == $pass && $email != $emailDB && $statusDB == 'activated'){
           return Redirect::to('log-in')->with('errors-message-email','Email không đúng');    // lenh chuyen huong trong laravel no den dau day :: action(), to()
           }elseif ($password != $pass && $email == $emailDB && $statusDB == 'activated') {
           return Redirect::to('log-in')->with('errors-message-password','Password không đúng');
           }else{
            return Redirect::to('log-in')->with('errors-message-email','Email không đúng','errors-message-password','Password không đúng');  
           }
           
         }//
     }

    
    }
    
   }


   public function getLogout(){
     Session::forget('nameuser');
     Session::forget('emailuser');
     Session::forget('imageuser');
     Session::forget('mauser');
     //Session::forget('checkstep1');
     Session::forget('checkstafflogin');
     Session::forget('checkuserlogin');
     Session::forget('checkloginbhadmin');
     
     return view('login');
   }

   public function profile(){
 
    $nameuser = Session::get('nameuser');
    $emailuser = Session::get('emailuser');
    $users = DB::table('clinicusers')->where('email', $emailuser)->get();

    return view('accuracy.infouser', ['users' =>  $users]);
   }

   public function registerweb(){
   // if(Session::has('checkstep1')){
   //   return Redirect::to('/register-website-step2');
   // }else{
    return view('accuracy.registerweb');
  // }
   }
   public function registerwebstep2(){
    return view('accuracy.regissteptwo');
   }
  
  public function signwebsite(Checkregiswebsite $request){
    $input = $request->all();
   // if(Session::has('checkstep1')){
  //   return Redirect::to('/register-website-step2');
 //   }else{
    if(!empty($input)){
      $roomhospital = new clinic;
       $roomhospital ->clinicname = Input::get('nameroom');
       $roomhospital ->opendate = Input::get('datecreate');
       $roomhospital ->static = Input::get('static');
       
       $roomhospital ->emailsign = Session::get('emailuser');
     // $checkstep1 = $roomhospital ->Maphongkham = "ABC".rand(100,10000);
       $checkstep1 = rand(0,10000);
      
  
        // mot ham xu ly chuoi tai day
       $roomhospital ->save();
    }
    // gui qua mail tai day
      
    // Session::put('checkstep1',$checkstep1); 
      return Redirect::to('/register-website-step2');

  //  }

   }
   public function logindoctor(){
    return view('accuracy.logindoctor');
   }
   public function logoutstaff(){
   // Session::put('nameuser', $fullname);
   // Session::put('emailuser', $email);
   // Session::put('imageuser', $imageDB);     
   // Session::put('checkstafflogin', 'stafflogintrue');
    Session::flush();
    return view('accuracy.logindoctor');
   }
   

   public function submitstaffon(){
    return view('accuracy.infostaff.overview');
   }
   public function submitstaff(CheckLoginStaff $request){
     $input = $request->all();
     if(!(empty($input))){
      $coderoom = Input::get('coderoom');
      $email = Input::get('email');
      $password = Input::get('password');
     
      $db = DB::table('clinicusers')->where('email', $email)->get();
      if(!empty($db)){
         $dbp = DB::table('clinicusers')->where('email', $email)->where('password', $password)->get(); 
         if(!empty($dbp)){
             $dbcr = $dbp = DB::table('clinicusers')->where('email', $email)->where('password', $password)->where('id_clinic', $coderoom)->get();
                if(!empty($dbcr)){
                 foreach ($dbcr as $key => $value) {
                    # code...
                    $fullname = $value->fullname;
                    $imageDB = $value->image;
                  }
                  
                  Session::put('nameuser', $fullname);
                  Session::put('emailuser', $email);
                  Session::put('imageuser', $imageDB);     
                  Session::put('checkstafflogin', 'stafflogintrue');
                  return view('accuracy.infostaff.overview');

                }else{
                 return Redirect::to('/login-staff')->with('notice-error-coderoom', 'Mã phong của bạn không tồn tại');
                }
          }else{
             return Redirect::to('/login-staff')->with('notice-error-pass', 'Password của bạn không tồn tại');
         }
      }else{
        return Redirect::to('/login-staff')->with('notice-error-email', 'Email của bạn không tồn tại');
      }

      

     }else{
     return Redirect::to('/login-staff');
   }
   }

   public function workandedu(){
      return view('accuracy.infostaff.workandedu');
   }
   
   public function workandeduprofessional(){
        if(request::ajax()) {
          $data = Input::all();
          print_r($data);die;
    }


   }

   public function placeyoulive(){
      return view('accuracy.infostaff.placeyoulive');
   }
   public function basicinfo(){
      return view('accuracy.infostaff.basicinfo');
   }
   public function storysummary(){
      return view('accuracy.infostaff.storysummary');
   }
   public function contactinfo(){
      return view('accuracy.infostaff.contactinfo');
   }




   public function storewebstep2(){
    
    // luu du lieu tai day
   $email = Session::get('emailuser');
    $username = Session::get('nameuser');
      $roomhospital = new clinic;
      $themes = Input::get('themes');
      $typeroom = utf8tourl(utf8convert(Input::get('typeroom')));
      $colorbackground = Input::get('colorbackground');
      $description = Input::get('description');     
      $codeclinic = "ABC".rand(100,10000);
      DB::table('clinics')->where('emailsign', $email)->update(['clinic_id' => $codeclinic,'themes'=>$themes, 'typeclinic' => $typeroom]);
      DB::table('clinicwebsites')->insert(['titlename' => $description, 'background'=> $colorbackground, 'id_clinic' => $codeclinic]);
      Mail::send('mails.codeclinics', array('nameuser'=> $username,'codeclinic'=>$codeclinic), function($message){
        
        $message->to(Session::get('emailuser'), Session::get('nameuser'))->subject('Cảm ơn bạn đã chọn BHNet');
        }); 
      $messagereport = "Hãy lên mail của bạn, để nhận mã Phòng khám";  
    return view('accuracy.regisstepthree')->with('messagereport', $messagereport);
  }

   public function loginadminroom(Check $request){   
    $input = $request->all();
    if(!empty($input)){
      $Mapk = Input::get('nameroom');

     // $email = Input::get('email');
     // $password = Input::get('password');
     
     // $db = DB::table('hospitals')->select('Ma_phongkham','email','password')->where('Ma_phongkham', $Mapk)->where('email',$email)->where('password', $password)->get();
    $db = DB::table('clinics')->join('clinicusers','clinicusers.email','=','clinics.emailsign')->get();
     if(!empty($db)){
    foreach ($db as $check) {
          $MAPK = $check->clinic_id;
          $EMAIL = $check->emailsign;
          $NAME = $check->clinicname;
          
          $IMAGE = $check->image;
      } 
 
    if($Mapk ==  $MAPK ){
         Session::put('mapkSec',  $MAPK);
         Session::put('nameroomSec', $NAME);
         Session::put('checkloginbhadmin', 'loginbhadmintrue');      
        Return redirect::to('./bh-admin/dashboard');
     }else{
       
        $messagereport = "Mã Phòng khám không chính xác";
        return view('accuracy.regisstepthree')->with('messagereport', $messagereport);
 
         }
      }
    }
  
   }
  public function actionstepthree(){
    $messagereport = "Mã Phòng khám không chính xác";
    return view('accuracy.regisstepthree')->with('messagereport', $messagereport);
  }
  
 
   

  public function formedituserinfo($mauseredit)
    {
        //
     // $cate = cate::select('id','email','parent_id')->get()->toArray();
        $useredit = DB::table('clinicusers')->where('id_user',$mauseredit)->get();
         
        return view('accuracy.edituserinfo')->with('useredit', $useredit);
        
    } 

  public function updateuserinfo()
    {
        //
      $emailold = Session::get('emailuser');
      $checkpass = clinicuser::select('password')->where('email',$emailold)->get();
      foreach ($checkpass as $key ) {
        # code...
        $passwordDB = $key->password;
      }
          $fullname = Input::get('fullname');
          $email = Input::get('email');        
          $password = Input::get('password');
          $numeric = Input::get('tel');
          $cmtnd = Input::get('idnumber');
          $datebirth = Input::get('birthday');
          $street = Input::get('street'); 
          $country= Input::get('district');
          $town   = Input::get('city');
          //if($password)
        if($passwordDB==$password && $emailold == $email){
          DB::table('clinicusers')
                   ->where('email', $emailold)
                        ->update(['fullname'=>$fullname,                            
                                  'idnumber' => $cmtnd,
                                  'tel' => $numeric,
                                  'birthday' => $datebirth,
                                  'street' => $street,
                                  'district' => $country,
                                  'city' => $town
                                   ]);
               return redirect::to('./profile');
        }elseif ($passwordDB==$password && $emailold != $email) {
          DB::table('clinicusers')
                   ->where('email', $emailold)
                        ->update(['fullname'=>$fullname, 
                                  'email'=> $email,
                                  'idnumber' => $cmtnd,
                                  'tel' => $numeric,
                                  'birthday' => $datebirth,
                                  'street' => $street,
                                  'district' => $country,
                                  'city' => $town
                                   ]);
               return redirect::to('./log-out');
        }elseif ($passwordDB != $password && $emailold == $email) {
          $Passwordnew = md5(sha1(Input::get('password')));
          DB::table('clinicusers')
                   ->where('email', $emailold)
                        ->update(['fullname'=>$fullname, 
                                  'password'=> $Passwordnew,
                                  'idnumber' => $cmtnd,
                                  'tel' => $numeric,
                                  'birthday' => $datebirth,
                                  'street' => $street,
                                  'district' => $country,
                                  'city' => $town
                                   ]);
               return redirect::to('./log-out');
        }else{
          DB::table('clinicusers')
                   ->where('email', $emailold)
                        ->update(['fullname'=>$fullname, 
                                  'email'=> $email,
                                  'password' => $Password,
                                  'idnumber' => $cmtnd,
                                  'tel' => $numeric,
                                  'birthday' => $datebirth,
                                  'street' => $street,
                                  'district' => $country,
                                  'city' => $town
                                   ]); 
            return redirect::to('./log-out');
        }

    }

 


}
