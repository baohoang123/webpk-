@extends('index')
@section('content')
<div class="profile">
<div class="profile-left">
  <div class="image-profile">
  <div class="replay-image">
  <a href="" alt="" title="">Thay hình đại diện</a>
  </div>
   
  <!-- <img src="./image/represent.png" height="200" width="200">-->
  
  <img src="./album/image/{!!Session::get('imageuser')!!}" height="200" width="200">
  
  </div>
  <div class="menu-profile-user">
  <ul>
  <li><a href="./profile">Thông tin cá nhân</a></li>
  <li class="fix">Chỉnh sửa <span class=""></span>
   <ul class="box-fix">
     <li>Thay đổi mật khẩu</li>
     <li>Thông tin cơ bản</li>
   </ul>
  </li>
  <li><a href="./register-website">Tạo Phòng Khám </a></li>
  <li>Thông tin website</li>
  </ul>
  </div>
</div>
<div class="profile-right">
   <div class="box-profile-right">
   
    @yield('content-info-user')

	 </div>
</div>
<div class="clears"></div>
</div>
@stop