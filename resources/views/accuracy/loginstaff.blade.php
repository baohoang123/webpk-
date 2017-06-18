@extends('index')
@section('login-hospital')
   <div id="login-hospital" class="login-hospital" style=" background-color: #FFFFFF;">
    <div style="float:right">
       <a href="./"><img  src="../public/image/close.jpg" height="25" width="25"></a>
       </div>
    <div class="content-login-doctor">
    <div class="image">
      <img src="./image/login-staff.png" height="250" width="200">
    </div>
        <div class="title">
      <h1>LOGIN NHÂN VIÊN</h1>
      </div>
         <div class="form-login">
             {!!Form::open(array('method'=>'POST', 'url'=>'submit-doctor', 'id'=>'form-doctor'))!!}
              
               <div class="controls">
              {!! Form::label('maphongkham','Mã Phòng Khám:')!!}
              {!! Form::text('maphongkham', '', array('class'=>'maphongkham', 'placeholder'=>'ví dụ: 54923'))!!}
              @if($errors->has('maphongkham')){{$errors->first('maphongkham')}} @endif
                 @if (Session('notice-error-coderoom'))
                      <div class="alert alert-success">
                          {{ Session('notice-error-coderoom') }}
                      </div>
                 @endif
               </div>
             <div class="clears"></div>
            
               <div class="controls">
              {!! Form::label('email','Email Nhân Viên:')!!}
              {!! Form::text('email', '', array('class'=>'email', 'placeholder'=>'ví dụ: abc@gmail.com'))!!}
              @if($errors->has('email')){{$errors->first('email')}} @endif
               
              </div>
              <div class="clears"></div>
              
               <div class="controls">
              {!! Form::label('password', 'Password:')!!}
              {!! Form::password('password', array('class'=>'password', 'id'=>'span', 'placeholder'=>'ví dụ: ****'))!!}
              @if($errors->has('password')){{$errors->first('password')}} @endif
               @if (Session('notice-error-pass'))
                      <div class="alert alert-success">
                          {{ Session('notice-error-pass') }}
                      </div>
                 @endif
              </div>
               <div class="clears"></div>
               <div class="controls" >
               {!! Form::label('work', 'Công việc:')!!}
               {!! Form::select('work', array('Kế Toán'=>'Kế Toán', 'Giao Dịch Viên' => 'Giao Dịch Viên', 'Quản Lý' => 'Quản Lý'), array('class'=>'select-work'))!!}
               @if($errors->has('work')) {{ $errors->first('work')}} @endif
               </div>

               <div class="controls-submit">
              {!! Form::submit('LogIn', array('class'=>'submit'))!!}
              {!! Form::reset('Reset')!!}
              </div>
               {!!Form::close()!!}  
         </div>
    </div>
   </div>  
@stop