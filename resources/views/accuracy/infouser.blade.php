@extends('accuracy.profile')
@section('content-info-user')
<div class="info-individual">
<strong><h4>THÔNG TIN CÁ NHÂN</h4></strong>
<div class="info-user">
<table>
<?php foreach ($users as $key): ?>
 <tr><td><strong>Họ và Tên:</strong></td>  <td>{{$key->fullname}} </td></tr>
 <tr><td><strong>Ngày sinh:</strong></td>  <td> {{$key->birthday}}</td></tr> 
 <tr><td><strong>Số điện thoại:</strong></td>  <td> {{$key->tel}}</td></tr> 
 <tr><td><strong>Ngày đăng ký:</strong></td>  <td> {{$key->datecreateacc}}</td></tr> 
 <tr><td><strong>Chứng minh thư:</strong></td>  <td> {{$key->idnumber}}</td></tr> 
 <tr><td><strong>Email:</strong></td>  <td> {{$key->email}}</td></tr> 
 <tr><td><strong>Đường:</strong></td>  <td> {{$key->street, $key->district, $key->city}}</td></tr> 
 <tr><td><strong>Thành Phố:</strong></td>  <td> {{$key->city}}</td></tr>
   <?php endforeach ?>
 </table>  
  <!-- @foreach ($users as $key)
    {{$key->fullname}}
   @endforeach-->
   </div>
   <div>
  <a href="./{!! Session::get('mauser') !!}"><input type="button" value="Chỉnh sửa thông tin" name="editinfo"></a>
   </div>
 <!--<script type="text/javascript">
  function clearDemo() {
    var square = document.getElementById("edit-infomation");
    square.style.display = "block";
  
 }
  </script>-->
 




 </div>  
 

@stop