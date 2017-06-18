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
<span><a href="../"><span class="glyphicon glyphicon-home"></span>Khám Online</a></span>
<span style="float:right">
@if(Session::has('useradmin'))
{{Session::get('useradmin') }}
@endif
<a href="../admin/admin-logout">Logout</a></span>

</div>
<div class="content-admin">
<div class="right">
<div class="dashboard menuadmin">
<a href="../admin/dashboard-admin"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a>
</div>
<ul>
<li>
<a href="../admin/dashboard-admin"><span class="glyphicon glyphicon-dashboard"></span>Trang chủ</a>
</li>
<li>

</li>
</ul>
<div class="post menuadmin">
<span class="glyphicon glyphicon-pushpin"></span>Bài viết
</div>
<ul>
<li>
<a href="../admin/articlenew-admin"><span class="glyphicon glyphicon-pencil"></span>Bài viết mới</a>
</li>
<li>
Tất cả bài viết	
</li>
</ul>
<div class="">
	<a><span class="glyphicon glyphicon-camera"></span>Media</a>
	<ul>
	<li><span class=""></span>Library</li>
	<li><a href="">Add New</a></li>
	
</ul>
</div>
<div class="">
<a><span class="glyphicon glyphicon-cog"></span>Giao diện</a>
<ul>
<li><span class="glyphicon glyphicon-tag"></span>Giao diện</li>
<li><a href="../admin/customise-admin">Tùy chỉnh</a></li>
<li>Background</li>
<li>Logo</li>



</ul>
</div>
<div class="users menuadmin">
<a href="../admin/users">Users</a>
</div>
<ul>
<li><a href="../admin/all-admin">All Admin</a></li>
<li><a href="../admin/new-admin">New Admin</a></li>
<li><a href="../admin/all-userpk">All QTVPK</a></li>
</ul>
<div class="comments menuadmin">
Comments
</div>
<div class="">
<a href=""><span class="glyphicon glyphicon-wrench"></span>Settings</a>
<ul>
<li><a href="">General</a></li>
<li><a href="">Write</a></li>
<li><a href="">read</a></li>
</ul>
</div>
<div class="payment menuadmin">
Payment
</div>
<div class="infophongkham menuadmin">

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