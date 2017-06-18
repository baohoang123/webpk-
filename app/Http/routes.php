<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::filter('auth', function()           
{
    if (Auth::guest()) return Redirect::guest('/admin');
});

Route::filter('check-login', function(){
	if(!(Session::has('checkuserlogin'))){
		return Redirect::to('/log-in');
	}
});
Route::filter('check-login-staff', function(){
	if(!(Session::has('checkstafflogin'))){
		return Redirect::to('/login-staff');
	}
});
// BH ADMIN
Route::filter('check-login-bhadmin', function(){
	if(!(Session::has('checkloginbhadmin'))){
		return Redirect::to('/bh-admin');
	}
});
Route::filter('check-login-bhadmin-auto', function(){
	if(Session::has('checkloginbhadmin')){
		return Redirect::to('/bh-admin/dashboard');
	}
});
/*Route::filter('check-login-url', function(){
	if(Session::has('nameuser')){
		return Redirect::to('/');
	}
});*/

Route::get('/', [ 'uses' => 'webpkcontroller@webpk']);
Route::get('/introduce', [  'uses' => 'webpkcontroller@pageintroduce']);
Route::get('/articles', [ 'uses' => 'webpkcontroller@pagearticle']);
Route::get('/clinics', [ 'uses' => 'webpkcontroller@pageclinic']);
Route::get('/conduct-createclinic', [ 'uses' =>'webpkcontroller@pageconcreateclinic']);
Route::get('/conduct-staffclinic', [ 'uses' =>'webpkcontroller@pageconstaffclinic']);
Route::get('/conduct-patientclinic', [ 'uses' => 'webpkcontroller@pageconpatientclinic']);
Route::get('/contact', [ 'uses' => 'webpkcontroller@pagecontact']);

Route::get('/register-healing', [ 'uses' => 'webpkcontroller@pageclinic']);
Route::get('/create-clinic', ['before' =>'check-login', 'uses' => 'webpkcontroller@createclinic']);
Route::get('/manage-healing', ['before' =>'check-login-staff', 'uses' => 'webpkcontroller@managehealing']);
Route::get('/reference-service', [ 'uses' => 'webpkcontroller@referservice']);



Route::get('/page-children-clinic', ['as' => 'page-children-clinic', 'uses'=>'webpkcontroller@pagechildrenclinic']);


route::get('/room-one', 'webpkcontroller@roomone');

route::get('/room-two', 'webpkcontroller@roomtwo');

route::get('/room-three', 'webpkcontroller@roomthree');



Route::post('/submit-new-admin', 'webpkcontroller@storeadmin');

Route::get('/sign-up', [ 'uses' => 'webpkcontroller@signup']);

//Route::post('/submit-sign-up', 'webpkcontroller@storesign');
//Route::post('/submit-sign-up', 'Auth\AuthController@storesign');
Route::post('/submit-sign-up', 'webpkcontroller@storesign');

Route::get('/log-in/{idcodecheck}', 'webpkcontroller@loginactivated');

Route::get('/log-in', [ 'uses' => 'webpkcontroller@login']);

Route::get('/log-out', 'webpkcontroller@getLogout');

Route::post('/submit-log-in',['before'=>'csrf', 'uses' => 'webpkcontroller@storelogin']);
//Route::post('/submit-log-in', 'Auth\AuthController@storelogin');

Route::get('/tao-bang', function(){
	Schema::create('product', function($table){
             $table->increments('id');
             $table->string('name');
             $table->integer('car_id')->unsigned();
             $table->foreign('car_id')->references('id')->on('category')->onDelete('cascade');
             $table->timestamps(); 
	});
});





Route::get('profile',['before' =>'check-login', 'uses' => 'webpkcontroller@profile']);

route::post('/update-user-info', ['before' =>'check-login', 'uses' => 'webpkcontroller@updateuserinfo']);

Route::get('register-website', ['before'=>'check-login', 'uses' => 'webpkcontroller@registerweb']);

/*Route::filter('check-sign-step1', function(){
	if(!(Session::has('checkstep1'))){
		return Redirect::to('register-website');
	
	}

});*/





// 'before' => 'check-sign-step1',
Route::get('register-website-step2', ['before'=>'check-login',  'uses' => 'webpkcontroller@registerwebstep2']);


Route::post('/submit-sign-website', ['before'=>'check-login', 'uses' => 'webpkcontroller@signwebsite']);

Route::get('/login-staff', ['before'=>'csrf', 'uses' => 'webpkcontroller@logindoctor']);
Route::get('/logout-staff', ['before'=>'check-login-staff', 'uses' => 'webpkcontroller@logoutstaff']);

Route::post('/submit-staff', [ 'uses' => 'webpkcontroller@submitstaff']);
Route::get('/submit-staff', ['before'=>'check-login-staff', 'uses' => 'webpkcontroller@submitstaffon']);
Route::get('/work-and-edu', ['before'=>'check-login-staff', 'uses' => 'webpkcontroller@workandedu']);
Route::get('/place-you-live', ['before'=>'check-login-staff', 'uses' => 'webpkcontroller@placeyoulive']);
Route::get('/basic-info', ['before'=>'check-login-staff', 'uses' => 'webpkcontroller@basicinfo']);
Route::get('/story-summary', ['before'=>'check-login-staff', 'uses' => 'webpkcontroller@storysummary']);
Route::get('/contact-info', ['before'=>'check-login-staff', 'uses' => 'webpkcontroller@contactinfo']);

/* code new 17/4 */
Route::post('/work-and-edu/professional', ['before'=>'check-login-staff', 'uses' => 'webpkcontroller@workandeduprofessional']);



/*  end */



Route::post('/submit-sign-website-step2', ['before'=>'check-login', 'uses' => 'webpkcontroller@storewebstep2']);


Route::get('/submit-sign-website-step2', ['before'=>'check-login', 'uses' => 'webpkcontroller@storewebstep2']);

Route::post('/login-admin-room', ['before'=>'csrf', 'before'=>'check-login', 'uses' => 'webpkcontroller@loginadminroom']);

Route::get('/login-admin-room', ['before'=>'check-login', 'uses' => 'webpkcontroller@actionstepthree']);




Route::get('admin',['middleware'=>'isrolebhadmin',function(){
    return 'Only admin can see this';
}]);
Route::get('unauthorized',function(){
  return 'You are not admin';
});

Route::get('/bh-admin',['before' => 'check-login-bhadmin-auto', 'uses' =>  'bhadminController@indexadminroom']);

Route::get('/bh-admin/logout',[ 'before' => 'check-login-bhadmin', 'uses' => 'bhadminController@getlogout']);

Route::post('/admin-room',['before'=>'csrf', 'uses' => 'bhadminController@loginbhadmin']);

route::get('/bh-admin/dashboard', [ 'before' => 'check-login-bhadmin', 'uses' =>  'bhadminController@adminroom']);

route::get('/bh-admin/articlenew-admin', [ 'before' => 'check-login-bhadmin', 'uses' =>  'bhadminController@articlenewadmin']);
route::get('/bh-admin/allarticle-admin', [ 'before' => 'check-login-bhadmin', 'uses' =>  'bhadminController@allarticleadmin']);

route::get('/bh-admin/all-admin', [ 'before' => 'check-login-bhadmin',  'uses' =>  'bhadminController@alladmin']);
route::get('/bh-admin/new-admin', [ 'before' => 'check-login-bhadmin',  'uses' =>  'bhadminController@newadmin']);
//route::get('/bh-admin/new-user', [ 'before' => 'check-login-bhadmin',  'uses' =>  'bhadminController@newuser']);
route::get('/bh-admin/all-doctor', [ 'before' => 'check-login-bhadmin',  'uses' =>  'bhadminController@alldoctor']);
route::get('/bh-admin/all-patient', [ 'before' => 'check-login-bhadmin',  'uses' =>  'bhadminController@allpatient']);
//route::get('/bhadmin/submit-add-doctor', [ 'before' => 'check-login-bhadmin',  'uses' =>  'addClinicUser@index']);
//route::post('/bhadmin/submit-add-doctor', [ 'before' => 'check-login-bhadmin',  'uses' =>  'addClinicUser@index']);
Route::resource('/bh-admin/process-add-doctor', 'addClinicUser', ['only' => ['index', 'create', 'show', 'edit', 'store', 'update', 'destroy']]);


Route::get('/room/{codeclinic}', 'bhadminController@roomclinic');

// END BH ADMIN

/*Route::controller([
	'auth' => 'Auth/AuthController',
	'password' => 'Auth/passwordController',
	]);
*/

// Authentication routes...

//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

Route::get('user/{Ma_nhanvien}', function($Ma_nhanvien){
  //$user = App\User()::find($Ma_nhanvien);
  echo "string" . $Ma_nhanvien;
});

// admin web phong kham 
/*Route::get('/home', function(){
	if(Auth::guest()){
       $user = Auth::user();
       return Redirect::to('/admin');
	}else{
     return Redirect::to('/admin/page-admin');
		 
}
});*/// Nó co chuc nang giong nhu auth ben duoi


Route::get('/admin', ['uses' => 'adminController@indexadmin']);
Route::post('/submit-login-admin',['before'=>'csrf', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('/admin/admin-logout','Auth\AuthController@getLogout');

Route::get('auth/login', function(){
	return Redirect::to('/admin');
});
// xac thuc cho route
Route::get('/admin/page-admin', [ 'middleware' => 'auth', 'uses' => 'adminController@dashboard']);
Route::get('/admin/dashboard-admin', ['middleware' => 'auth', 'uses' => 'adminController@dashboard']);
Route::get('/admin/articlenew-admin', ['middleware' => 'auth', 'uses' => 'adminController@articlenew']);
Route::get('/admin/customise-admin', ['middleware' => 'auth', 'uses' => 'adminController@customise']);
//route::get('/admin/all-admin', ['middleware' => 'auth', 'uses' => 'adminController@alladmin']);
route::get('/admin/new-admin', ['middleware' => 'auth', 'uses' => 'adminController@newadmin']);
route::get('/admin/all-userpk',['middleware' => 'auth', 'uses' => 'adminController@alladministrators']);
Route::post('/admin/submit-sign-up-admin', ['middleware' => 'auth', 'uses' => 'adminController@postaddadmin']);
Route::get('/admin/submit-sign-up-admin', ['middleware' => 'auth', 'uses' => 'adminController@getaddadmin']);
// restful
Route::resource('/admin/all-admin', 'adminController', ['only' => ['index', 'create', 'show', 'edit', 'store', 'update', 'destroy']]);


// tam vục
route::get('/{mauseredit}',['before' =>'check-login', 'uses' =>'webpkcontroller@formedituserinfo']);

