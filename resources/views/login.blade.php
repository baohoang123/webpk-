@extends('index')
@section('content')
<!--@include('thulua') marquee -->
<div style="float:right">
       <a href="./">&Chi;</a>
       
       </div>
<div class="login">
 <div class="image-login-user" style="text-align: center;">
 <img  src="./image/login-user.png">
  </div>
      <div class="title-login" style="text-align: center;">
      <h1>LOGIN</h1>
      </div>
      @if(Session::has('errors-message-activated')) 
           <p style="color:red; text-align: center;">  {{Session::get('errors-message-activated')}} </p>
             <?php Session::forget('errors-message-activated') ?>
         @endif
    
      <div class="form-login">
      {!! Form::open(array('method'=>'POST', 'url'=>'submit-log-in','id'=>'form-login'))!!}
      <div class="controls">
        {!! Form::label('email', 'Email eddress:')!!}
        {!! Form::text('email','', array('class'=>'email span9', 'id'=>'span9', 'placeholder' => 'Email của bạn'))!!}
         <div class="clears"></div>
         @if($errors->has('email'))<p style="color:red; text-align: center;"> {{$errors->first('email')}} </p> @endif
         @if(Session::has('errors-message-email')) 
          <p style="color:red; text-align: center;">   {{Session::get('errors-message-email')}}</p>
            <?php Session::forget('errors-message-email') ?>
         @endif
    
        </div>
        
        <div class="controls">
        {!! Form::label('password', 'Password:')!!}
        {!! Form::password('password', array('id'=>'span9', 'class' => 'password span9', 'placeholder' => 'Mật Khẩu'))!!}
         <div class="clears"></div>
         @if($errors->has('password')) <p style="color:red; text-align: center;">  {{$errors->first('password')}} </p> @endif
          
          @if(Session::has('errors-message-password')) 
           <p style="color:red; text-align: center;">  {{Session::get('errors-message-password')}}</p>
            <?php Session::forget('errors-message-password') ?>
         @endif
        </div>
         <div class="controls-submit">
        {!! Form::submit('LogIn', array('class'=>'login-submit'))!!}
        {!! Form::reset('Reset', array('class'=>'reset-submit'))!!}
        </div>
       {!! Form::close()!!}
      </div>
      <div>
       <table>
         <tr>
         <td>
         Quên mật khẩu? 
         </td>
         <td>
        
         Remember Me
         </td>
         <tr>
       </table>
         
      </div>
      <div>
        Bạn chưa có tài khoảng? <a href="./sign-up">Đăng ký tài khoản</a>
      </div>
</div>

@stop

<script type="text/javascript">
  //$('#form-login')
</script>