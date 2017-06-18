<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<!-- start bootstrap, jquery -->
	<link rel="stylesheet" type="text/css" href="{{Asset('asset/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{Asset('asset/css/bootstrap-theme.css')}}">
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
	<script type="text/javascript" src="{{Asset('asset/js/jquery/jquery.validate.js')}}"></script>
	<script type="text/javascript" src="{{Asset('asset/js/angular.min.js')}}"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="pageAdmin.css">
	<link rel="stylesheet" type="text/css" href="./webpk.css">
	
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
 <img  src="./image/login-user.png">
  </div>
      <div class="title-login" style="text-align: center;">
      <h1>LOGIN</h1>
      </div>
    <form method="POST" action="./submit-login-admin">
    {!! csrf_field() !!}

    <div>
   
        <input type="email" class="form-control" id="exampleInputEmail2" name="email" value="{{ old('email') }}" placeholder="Enter email">
    </div>
   <div class="clears">
</div>
    <div>
        
        <input type="password" class="form-control" id="exampleInputPassword2" name="password" id="password" placeholder="Password">
    </div>
   <div class="clears">
</div>
    <div>
        <input type="checkbox" class="checkbox" name="remember"> Remember Me
    </div>
  <div class="clears">
</div>
    <div style=" text-align: center;">
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>

</div>
<div class="clears">
</div>
</div>
</div>


</body>
</html>