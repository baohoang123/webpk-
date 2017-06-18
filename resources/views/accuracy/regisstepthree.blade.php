@extends('accuracy.profile')
@section('content-info-user')
<div class="auth-website">
 <div class="title">
    <h4></h4>
    <div class="title-description">
     <span class="glyphicon glyphicon-ok-circle"></span>Mọi thông tin của bạn đã được ghi nhận, hãy điên thông tin cuối cùng được xác thực qua Mail để chúng tôi xác thực bạn không phải là máy móc.  
    </div>
    <br />
    
  </div>
<div class="check-box">
     <div class="street-border">
       </div>
       <div class="step">
         <div class="step-step1" >
           <div class="step1" style=" background-color:#006600;">1</div>
           <div class="text-step">Tài khoản</div>
         </div>
         <div class="step-step2" >
           <div class="step2" style="background-color:#006600;">2</div>
           <div class="text-step">Phòng khám</div>
         </div>
         <div class="step-step3"  >
           <div class="step3" style="background-color:#6699FF">3</div>
           <div class="text-step">Thông tin</div>
         </div>
       </div>
     </div>
     <div class="clears"></div>
     <br />
     <br />
<div class="title-three">
<h3>Bước 3: XÁC THỰC THÔNG TIN</h3>
</div>
<div style="color:red; text-align:center;">{{$messagereport}}</div>
<div class="form-auth-website">
	{!! Form::open(array('method'=>'POST', 'class'=>'form-login-admin-page', 'url'=>'login-admin-room'))!!}
     <div class="controls"> 
     {!! Form::label('coderoom','Mã phòng khám:')!!}
     {!! Form::text('nameroom','', array('class'=>'nameroom', 'placeholder'=>'ABC1234'))!!}
     </div>
        <div class="clears"></div>
        @if($errors->has('nameroom')) {{ $errors->first('nameroom')}} @endif
        
     <div class="controls-submit">
     {!! Form::submit('Login', ['class' => 'login-submit'])!!}
	</div>
	{!! Form::close()!!}
</div>
</div>
@stop