@extends('index')
@section('login-hospital')
   <div id="login-hospital" class="login-hospital" style=" background-color: #FFFFFF;">
    <div style="float:right">
       <a href="./">&Chi;</a>
       </div>
    <div class="content-login-doctor">
    <div class="image">
      <img src="./image/login-bacsi.jpg" height="250" width="200">
    </div>
        <div class="title">
      <h1>LOGIN BÁC SĨ</h1>
      </div>
         <div class="form-login">
             {!!Form::open(array('method'=>'POST', 'url'=>'submit-staff', 'id'=>'form-doctor'))!!}
              
               <div class="controls">
              {!! Form::label('maphongkham','Mã Phòng Khám:')!!}
              {!! Form::text('coderoom', '', array('class'=>'coderoom', 'placeholder'=>'ví dụ: 54923'))!!}
              <div class="clears"></div>
                @if($errors->has('coderoom'))<span style="color: red; ">{{$errors->first('coderoom')}} </span>@endif
                 @if (Session('notice-error-coderoom'))
                      <div class="alert alert-success">
                          {{ Session('notice-error-coderoom') }}
                      </div>
                 @endif
               </div>
           
            
               <div class="controls">
              {!! Form::label('email','Email Bác Sĩ:')!!}
              {!! Form::text('email', '', array('class'=>'email', 'placeholder'=>'ví dụ: abc@gmail.com'))!!}
              <div class="clears"></div>
              @if($errors->has('email'))<span style="color: red; ">{{$errors->first('email')}} </span> @endif
              @if (Session('notice-error-email'))
                      <div class="alert alert-success">
                          {{ Session('notice-error-email') }}
                      </div>
                 @endif
              </div>
              
              
               <div class="controls">
              {!! Form::label('password', 'Password:')!!}
              {!! Form::password('password', array('class'=>'password', 'id'=>'span', 'placeholder'=>'ví dụ: ****'))!!}
              <div class="clears"></div>
              @if($errors->has('password'))<span style="color: red;">{{$errors->first('password')}}</span> @endif
             @if($errors->has('password')){{$errors->first('password')}} @endif
               @if (Session('notice-error-pass'))
                      <div class="alert alert-success">
                          {{ Session('notice-error-pass') }}
                      </div>
                 @endif
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