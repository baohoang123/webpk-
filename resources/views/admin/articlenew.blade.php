@extends('admin.pageadmin')
@section('content')
<div class="container-fluid border-ad">
<div>
<strong>BÀI VIẾT</strong> 
<button type="button" class="btn btn-default btn-xs">Thêm bài viết</button>
 <div class="border-ad">
 Tất cả () | Đã đăng ()
 <span class="seach-article">
 {!! Form::open(array('method'=>'POST', 'url' => '', 'id' => '', 'class' => 'seach-article'))!!}
       
<input type="text" value="">
<input type="submit" value="tìm các bài viết" >
{!! Form::close()!!}
</span>
</div>

<div class="border-ad">
<div class="filter-art">
{!! Form::open(array('method'=>'POST', 'url' => '', 'id' => '', 'class' => 'filter-article'))!!}       
 {!! Form::select('Ngày', array('tat-ca-cac-ngay'=>'Tất cả các ngày', 'thang-1' => 'Bài viết tháng 1', 'thang-2' => 'Bài viết tháng 1'), array('class'=>'select-filter'))!!}          
<input type="submit" value="Lọc" >
{!! Form::close()!!}
</div>
<div class="list-menu-art">
 <ul class="menu-number">
    <li><a href="#"><<</a></li>
    <li><a href="#"><</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">></a></li>
    <li><a href="#">>></a></li>
  </ul>
</div>
<div class="list-menu-art-mobile">
 <ul class="menu-number">
    <li><a href="#">Trang trước</a></li>
    
    <li><a href="#">Trang sau</a></li>
  </ul>
</div>
</div>

 <div class="border-ad">
  <table class="list-article">
  	<tr class="title">
  	<th class="title-art">Tiêu đề</th>
  	<th class="date-art">Ngày viết</th>
  	<th class="id-art">ID Phòng khám</th>
  	<th class="user-art">Tác giả</th>
  	<th class="statis-post-art"><span class="glyphicon glyphicon-list-alt"></span></th>
  	<th class="statis-cmt-art">Trạng thái</th>
  	<th class="url-art">url</th>
  	<th class="num-comment-art">Số lượng<span class="glyphicon glyphicon-comment"></span></th>
  	</tr>
  	<tr class="title-article">
  	<td class="name-article"><div><input id="cb-select-94" type="checkbox" name="post[]" value="">Tiêu đề</div><div>Chỉnh sửa | xóa | xem</div></td>
  	<td class="date-article">Ngày viết</td>
  	<td class="id-article">ID Phòng khám</td>
  	<td class="user-article">Tác giả</td>
  	<td class="statis-post-article"><span class="glyphicon glyphicon-list-alt"></span></td>
  	<td class="statis-cmt-article">Trạng thái</td>
  	<td class="url-article">url</td>
  	<td class="num-comment-article">Số lượng<span class="glyphicon glyphicon-comment"></span></td>
  	<td class="but-mobile"><a href="#" tabindex="0" title="" class="fermoir">&#9650;</a></td>
  	</tr>
  </table>
 </div>

</div>
</div>
@stop