<!DOCTYPE html>
<html>
<head>
  <title>Bh-Admin</title>
  <!-- start bootstrap, jquery -->
  <link rel="stylesheet" type="text/css" href="{{Asset('asset/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{Asset('asset/css/bootstrap-theme.css')}}">
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
  <script type="text/javascript" src="{{Asset('asset/js/jquery/jquery.validate.js')}}"></script>
  <script type="text/javascript" src="{{Asset('asset/js/angular.min.js')}}"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="pageAdmin.css">
  <link rel="stylesheet" type="text/css" href="webpk.css">
  
  <!-- end bootstrap, jquery -->
</head>
<body>
<div class="body">
<!-- resources/views/auth/login.blade.php -->
<div class="container-fluid">
<div class="">

</div>
<div class="login-admin">
 <div class="image-login-user" style="text-align: center;">
 <img  src="./image/bhadmin-login.jpg" height="100" width="100">
  </div>
      <div class="title-login" style="text-align: center;">
      <h1>Đăng Nhập</h1>
      </div>
     {!! Form::open(array('method'=>'POST','class'=>'login-bh-admin', 'url'=>'admin-room'))!!}
    
     <div class="controls">
    
     {!! Form::text('email','',array('class'=>'form-control','placeholder'=>'abc@gmail.com'))!!}
     </div>
     <div class="clears"></div>
     <div class="controls">
   
     {!! Form::text('password','', array('class'=>'form-control', 'placeholder'=>'******'))!!}
     </div>
      <div class="controls">
        <input type="checkbox" class="checkbox" name="remember"> Remember Me
    </div>
     <div class="controls-submit">
     <div style=" text-align: center;">
     {!! Form::submit('Login', array('class'=>'btn btn-default'))!!}
     </div>
  </div>
  {!! Form::close()!!}  

</div>
<div class="clears">
</div>
</div>
</div>


</body>
</html>