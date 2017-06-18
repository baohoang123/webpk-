@extends('adminroom.pagebhadmin')
@section('content')
<div class="container-fluid border-ad">
<div>
<strong>BÀI VIẾT MỚI</strong>
<div class="container-ad">
<div class="col-sm-9 container-ad">
<div ng-app='' class="">
<div>
  
  <script type="text/javascript">
    // JavaScript Document
$(document).ready(function(e) {
   $('input[name="txtTieuDe"]').bind('keyup blur focus',function(){
       //alert('a');
       var aa=$(this).val();
       var as = $('input[name="getTxtTitle"]');
       
       as = aa.replace(/á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ/g,"a");
       as = aa.replace(/đ|Đ/g,"d");
       as = aa.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ/g,"e");
       as = aa.replace(/í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị/g,"i");
       as = aa.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ/g,"o");
       as = aa.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự/g,"u");
       as = aa.replace(/ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ/g,"y");
       
       /* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */ 
       str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1- 
       str= str.replace(/^\-+|\-+$/g,""); 
       
       $('input[name="getTxtTitle"]').val(as);
   });
});  


  </script>
</div>
 <input type="text" ng-model="name" name="txtTieuDe" value="txtTieuDe">
 </div>
 <div>
   {!! Form::label('posts', 'Giới thiệu về phòng khám')!!}<br />
          
          <textarea rows="20" cols="95" name="posts" id="txtposts"></textarea><br /> 
          <script type="text/javascript" language="javascript">

           CKEDITOR.replace( 'txtposts' );
          
          </script>

  </div>
  </div>
  <div class="col-sm-3">
  <div class="container-ad">
     <div class="title-ad">
     Chính sách
    </div>
    <div>
       <div>Trạng thái: ẩn | chỉnh sửa</div>
       <div>Visibility: Public | Edit</div>
       <div>Publish immediately | Edit</div>
       <div>
         <div class="title-ad" style="">
           {!!Form::submit('Continue', ['class'=>'continue-submit'])!!}
           </div>
          {!!Form::close()!!}
       </div>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
@stop()