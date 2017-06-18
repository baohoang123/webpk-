<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CheckAddAdminRequest;
use App\Http\Controllers\Controller;
use App\admin;
use Auth;
use Redirect;
use Input;
use Session;
use App\User;
use App\clinicuser;
use Hash;
use Mail;
use DB;


class adminController extends Controller
{

    /*public function __construct(){
    // Closure as callback
        $this->beforeFilter(function(){
            if (!Auth::user())
            return Redirect('login');
            if (Auth::user()->role != 'admin')
                return 'oops!You don\'t have permission to access this page!';
        });
       
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* RESTful admin */
    public function index()
    {
        //
        if(Auth::check()){
         $admin = user::all();
          //   printf($admin);
         //return view('admin.alladmin')->with("listadmin", $admin);
        return view('admin.alladmin', compact('admin'));
      }else{
        return Redirect::to('/admin');
       }
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
        return User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'image' => $data['image'],
        ]);
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

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
        if(Auth::check()){
        $editadmin = user::findOrFail($id);
       return view('admin.editadmin', compact('editadmin'));
       }else{
        return Redirect::to('/admin');
       }
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
       // $updateadmin = user::findOrFail($id);
       if(Auth::check()){
        $name = Input::get('name');
        $email = Input::get('email');
        $password = bcrypt(Input::get('password'));
              DB::table('users')->where('id', $id)->update(['name'=>$name,'email'=>$email,'password'=>$password]);
        Return Redirect()->route('admin.all-admin.index');
        }else{
        return Redirect::to('/admin');
    }
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
        if(Auth::check()){
        $delete = user::findOrFail($id);
        $delete->delete();
        Return Redirect()->route('admin.all-admin.index');
       }else{
        return Redirect::to('/admin');
    }
    }
    /* end RESTful */
     
     public function indexadmin()
    {
        //
        if(Auth::check()){
          return Redirect::to('/admin/page-admin');
         }else{   
           return view('admin.index'); 
        }
    }
   

    public function pageadmin(){
        if(Auth::check()){
        return view('admin.pageadmin'); 
      // return Redirect::to('/trang-chu');
    }else{
        return Redirect::to('/admin');
    }
  }
  
  public function dashboard(){
        if(Auth::check()){
        $user = Auth::user()->name;  // lay du lieu trong auth luu tam
        Session::put('useradmin', $user);
        return view('admin.dashboard');
      

            
      // return Redirect::to('/trang-chu');
    }else{
        return Redirect::to('/admin');
    }
  }
   
   public function customise(){
    if(Auth::check()){
        return view('admin.customise');
    }else{
        return Redirect::to('/admin');
    }
  

   } 

   public function alladmin(){

         }

    public function newadmin(){
        
        if(Auth::check()){ 
        return view('admin.newadmin');
        }else{
         return Redirect::to('/admin');
       }
    } 

    public function alladministrators(){
        
        if(Auth::check()){ 
         $alladministrators = clinicuser::all();   
        return view('admin.allqtv',compact('alladministrators'));
        }else{
         return Redirect::to('/admin');
       }
    }     
    public function inforoom(){  
        if(Auth::check()){ 
        return view('admin.inforoom');
        }else{
         return Redirect::to('/admin');
       }
    } 

    // Registration routes...   
   

    

    public function postaddadmin(CheckAddAdminRequest $request)
    {
      if(Auth::check()){ 
       $input = $request->all();
       if(!empty($input)){ 
       $store = new User(); 
       $store->name = Input::get('name');
       $store->email = Input::get('email');
       $store->password = Hash::make(Input::get('password'));
       $store->image = Input::get('image');
       $store->save();

       Mail::send('mails.addadmin', array('fullname'=>Input::get('name'),'email'=>Input::get('email'),'password'=>Input::get('password')), function($message){        
        $message->to(Input::get('email'), Input::get('name'))->subject('Xin chào bạn đến với BHNet');
        });
       }
       Return Redirect::to('/admin/new-admin');
       }else{
         return Redirect::to('/admin');
       }  
    }
    public function getaddadmin()
    {
        if(Auth::check()){ 
        return view('admin.newadmin');
        }else{
         return Redirect::to('/admin');
       } 
    }

    public function articlenew(){
       if(Auth::check()){
        return view('admin.articlenew');
       }else{
        return Redirect::to('/admin');
       }
    }

    
}
