@extends('index')
@section('content')
<div style="float:right">
       <a href="./">&Chi;</a>
       </div>
       <div class="image-sign-up" style="text-align: center;">
       <img src="../public/image/logo-sign-up.jpg" >
       </div>
 <div class="signup">
       
       
       <div class="title-sign">
      <h1>SIGN UP FREE</h1>
      </div>
      <div class="form-sign">
        @if(Session::has('register_success'))
           <p style="color:red; text-align: center;">  {{Session::get('register_success')}}</p>
           <?php Session::forget('register_success'); ?>
        
        @endif

        {!! Form::open(array('method'=>'POST', 'url' => 'submit-sign-up', 'id' => 'form-sign', 'files' => true))!!}
        <div class="controls">
        {!! Form::label('hovaten','Họ và tên: *')!!}   <!-- '': gia tri-->
       {!! Form::text( 'fullname','', array('id'=>'fullname', 'class' => 'fullname span9', 'placeholder' => 'vi du: Hoang Bao'))!!}
        <div class="clears"></div>
        @if($errors->has('fullname')) <span style="color:red; margin-left: 15px;"> {{ $errors->first('fullname')}}</span> @endif
        </div>
        
        <div class="controls">
        {!! Form::label('email', 'Email: *')!!}
        {!! Form::text('email','', array('class'=>'email span9', 'id'=>'email', 'placeholder' => 'vi du: bao@gmail.com'))!!}
         <div class="clears"></div>
        @if($errors->has('email')) <span style="color:red; margin: 15px;"> {{ $errors->first('email')}} </span> @endif
        </div>
      
        <div class="controls">
        {!! Form::label('password', 'Mật khẩu: *')!!}
        {!! Form::password('password', array('id'=>'password', 'class' => 'password span9', 'placeholder' => 'vui long nhap mat khau'))!!}
        <div class="clears"></div>
        @if($errors->has('password')) <span style="color:red; margin: 15px;"> {{ $errors->first('password')}} </span> @endif
        </div>
        
        <div class="controls">
        {!! Form::label('conpass', 'Nhập lại mật khẩu: *')!!}
        {!! Form::password('password_confirmation', array('id'=>'password_confirmation', 'class' => 'password span9', 'placeholder' => 'config lại mật khẩu'))!!}
         <div class="clears"></div>
       @if($errors->has('password_confirmation')) <span style="color:red; margin: 15px;"> {{ $errors->first('password_confirmation')}} </span> @endif
        </div>
        
         <div class="controls" >
         {!! Form::label('idnumber', 'CMND: *')!!}
         {!! Form::text('idnumber','', array('id'=>'span9', 'class' => 'cmtnd span9', 'placeholder' => 'Mã CMND'))!!}
         <div class="clears"></div>
         @if($errors->has('idnumber')) <span style="color:red; margin: 15px;"> {{ $errors->first('idnumber')}} </span> @endif
         </div>
       
         <div class="controls" style="display: none">
          {!! Form::label('datework', 'Ngày Đăng Ký:')!!}
          {!! Form::input('date','datecreateacc', date('Y-m-d'))!!}
          <div class="clears"></div>
          @if($errors->has('datecreateacc')) {{ $errors->first('datecreateacc')}} @endif
         </div>
         
         <div class="controls" >
          {!! Form::label('birthdate', 'Ngày Sinh:')!!}
          {!! Form::input('date','birthday', date('Y-m-d'), array('class'=>'date-birth'))!!}
         <div class="clears"></div>
         @if($errors->has('birthday')) {{ $errors->first('birthday')}} @endif
         </div>
         
        <div class="controls" >
          {!! Form::label('tel', 'Số điện thoại:')!!}
          {!! Form::text('tel','', array('id'=> 'numeric' ,'class'=>'numeric span9', 'placeholder'=>'số điện thoại'))!!}
        <div class="clears"></div>
        @if($errors->has('tel')) {{ $errors->first('tel')}} @endif
         </div>
         
          <div class="controls" >
          {!! Form::label('image', 'Hình đại diện: *')!!}
          {!! Form::input('file','image','image', array('class'=>'image'))!!}
        <div class="clears"></div>
        @if($errors->has('image')) <span style="color:red; margin: 15px;">{{ $errors->first('image')}} </span> @endif
         </div>
         
         <div class="controls" >
          {!! Form::label('street', 'Địa chỉ đường phố:')!!}
          {!! Form::text('street','',array('id'=> 'street', 'class'=>'street', 'placeholder'=>'ví dụ: 432B/8G Dương Bá Trạc'))!!}
         <div class="clears"></div>
         @if($errors->has('street')) {{ $errors->first('street')}} @endif
         </div>
         
         <div class="controls" >
          {!! Form::label('county', 'Quận/Huyện:')!!}
          {!! Form::text('district','', array('id'=>'county', 'class' => 'county', 'placeholder'=>'ví dụ: Quận 8'))!!}
         <div class="clears"></div>
         @if($errors->has('dictrict')) {{ $errors->first('dictrict')}} @endif
         </div>
         <div class="clears"></div>
          <div class="controls" >
          {!! Form::label('town', 'Thành Phố(Thị xã):')!!}
          {!! Form::select('city', array('Hà Nội'=>'Hà Nội', 'Hồ Chí Minh' => 'Hồ Chí Minh', 'Quảng Ngãi' => 'Quảng Ngãi'), array('class'=>'select-town'))!!}
         @if($errors->has('city')) {{ $errors->first('city')}} @endif
         </div>
        <div class="controls-submit" >
         {!! Form::submit('register', array('class'=>'register-user'))!!}
         {!! Form::reset('reset', array('class' => 'reset-register'))!!}
         </div>
        {!! Form::close()!!}
      </div>
 </div>
@stop

