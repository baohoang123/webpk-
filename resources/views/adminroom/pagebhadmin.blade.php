<!DOCTYPE html>
<html>
<head>
	<title>BH-Admin</title>
	<!-- start bootstrap, jquery -->
	<link rel="stylesheet" type="text/css" href="{{Asset('asset/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{Asset('asset/css/bootstrap-theme.css')}}">
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
	<script type="text/javascript" src="{{Asset('asset/js/jquery/jquery.validate.js')}}"></script>
	<script type="text/javascript" src="{{Asset('asset/js/angular.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('asset/js/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{Asset('asset/js/ckfinder/ckfinder.js')}}"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://localhost:3030/webpk/public/pageAdmin.css">
	<!-- end bootstrap, jquery -->
</head>
<body>
<div class="body">
<div class="informations">
<!--<span><a href="./"><span class="glyphicon glyphicon-home"></span>Khám Online</a></span>
<span style="float:right">
@if(Session::has('useradmin'))
{{Session::get('useradmin') }}
@endif
<a href="../admin/admin-logout">Logout</a></span>
-->
Trang chủ: <a href="../room/{!! Session::get('mapkSec')!!}">{{Session::get('nameroomSec')}}</a> <a href="../bh-admin/logout">Logout</a>

</div>
<div class="content-admin">
<div class="right">
<div class="dashboard menuadmin">
<a href="../bh-admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a>
</div>
<ul>
<li>
Trang chủ
</li>
<li>

</li>
</ul>
<div class="post menuadmin">
<span class="glyphicon glyphicon-pushpin"></span>Bài viết
</div>
<ul>
<li>
<a href="../bh-admin/articlenew-admin">Bài viết mới</a>
</li>
<li>
<a href="../bh-admin/allarticle-admin">Tất cả bài viết</a>
</li>
</ul>
<div class="">
	<a><span class="glyphicon glyphicon-camera"></span>Media</a>
	<ul>
	<li><span class=""></span>Thư viện</li>
	<li><a href="">thêm mới</a></li>
	
</ul>
</div>
<div class="">
<a><span class="glyphicon glyphicon-cog"></span>Appearance</a>
<ul>
<li><span class="glyphicon glyphicon-tag"></span>Themes</li>
<li><a href="../bh-admin/bh-customise-admin">Customise</a></li>
<li>Background</li>
<li>Logo</li>



</ul>
</div>
<div class="users menuadmin">
<a href="../bh-admin/bh-users">Users</a>
</div>
<ul>
<li><a href="../bh-admin/all-admin">Admin</a></li>
<li><a href="../bh-admin/new-admin">Thêm admin</a></li>
<li><a href="../bh-admin/process-add-doctor">Thêm Bác sĩ</a></li>
<li><a href="../bh-admin/all-doctor">Bác sĩ</a></li>
<li><a href="../bh-admin/all-patient">Bệnh nhân</a></li>
</ul>
<div class="comments menuadmin">
Bình luận
</div>
<div class="">
<a href=""><span class="glyphicon glyphicon-wrench"></span>Cài đặt</a>
<ul>
<li><a href="">Chung</a></li>
<li><a href="">Viết</a></li>
<li><a href="">Đọc</a></li>
</ul>
</div>
<div class="payment menuadmin">
Thống kê thanh toán
</div>
<div class="infophongkham menuadmin">
<!--<a href="../bh-admin/bh-info-phong-kham">Info Phòng Khám</a>-->
</div>
</div>
<div class="left">
@yield('content')

</div>
<div class="clears">
</div>
<div class="footer">
Xin chào bạn đã đến với trang Quản trị của mình
</div>
</div>


</body>
</html>