@extends('index')
@section('content')
<div class="infostaff">
  <div class="title"><span class="glyphicon glyphicon-user"></span> Thông tin cá nhân</div>
	<div class="content-infostaff">
	<div class="infostaff-left">
       <ul class="menu-infostaff">
       	<li><a href="./submit-staff">Xem tổng quát</a></li>
       	<li><a href="./work-and-edu">Nghề nghiệp</a></li>    
       	<li><a href="./place-you-live">Quê quán/ Nơi sống</a></li>
       	<li><a href="./basic-info">Thông tin cơ bản</a></li>
       	<li><a href="./story-summary">Tóm tắt tiểu sử</a></li>
        <li><a href="./contact-info">Liên hệ</a></li>
       </ul>
	</div>
	<div class="infostaff-right">
       @yield('content-infostaff')
	</div>
	<div class="clears"></div>
	</div>
</div>

@stop