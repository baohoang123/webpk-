@extends('accuracy.profile')
@section('content-info-user')
<div class="info-register-website-step2">
 <div class="title">
    <h4></h4>
    <div class="title-description">
     <span class="glyphicon glyphicon-question-sign"></span> Chương trình tự tạo website cho phòng khám online.
      Hãy đảm bảo mọi việc làm của bạn từ bước này là chính xác với phòng khám của bạn.
    </div>
    <br />
    
  </div>
     <div class="check-box">
     <div class="street-border">
       </div>
       <div class="step">
         <div class="step-step1" >
           <div class="step1" style=" background-color:#006600;">1</div>
           <div class="text-step">Tài khoản</div>
         </div>
         <div class="step-step2" >
           <div class="step2" style=" background-color:#6699FF">2</div>
           <div class="text-step">Phòng khám</div>
         </div>
         <div class="step-step3"  style=" ">
           <div class="step3">3</div>
           <div class="text-step">Thông tin</div>
         </div>
       </div>
     </div>
     <div class="clears"></div>
     <br />
     <br />
     <div class="register-web-step2">
       <div  class="">
        <h3 style="color:#336699; padding: 10px;"> Bước 2: THÊM THÔNG TIN </h3>
        </div>
         <div class="form-regis-step2">
          {!!Form::open(array('method'=>'POST', 'url' => 'submit-sign-website-step2', 'id' => 'form-sign-web-step2'))!!}
           {!!Form::label('themes','Chọn Theme cho website của bạn')!!}<br />
           <div style="text-align:center;">
           {!! Form::radio('themes','roomone',true) !!}          
           <a href="./room-one" target="_blank"><img src="./image/roomone.png" height="30%" width="25%"></a>
           {!! Form::radio('themes','roomtwo') !!}
           <a href="./room-two" target="_blank"><img src="./image/roomtwo.png" height="30%" width="25%"></a>
           {!! Form::radio('themes','roomthere') !!}
           <a href="./room-three" target="_blank"><img src="./image/roomthree.png" height="30%" width="25%"></a><br />
          </div>
           <br />
           <div style="padding-top:10px; padding-bottom:10px;">
           {!! Form::label('type','Loại phòng khám')!!}
            {!! Form::select('typeroom', array('phong-kham-nhi-khoa'=>'Phòng Khám Nhi Khoa', 'phong-kham-noi-than-kinh' => 'Phòng Khám Nội Thần Kinh', 'phong-kham-phu-san' => 'Phòng khám Phụ Sản', 'phong-kham-ngoai-tong-hop'=>'Phòng Khám Ngoại Tổng Hợp','phong-kham-noi-tong-hop'=>'Phòng Khám Nội Tổng Hợp','phong-kham-rang-ham-mat'=>'Phòng Khám Răng Hàm Mặt','phong-kham-tai-mui-hong'=>'Phòng Khám Tai Mũi Họng','phong-kham-vat-ly-tri-lieu'=>'Phòng Khám Vật Lý Trị Liệu','phong-kham-y-hoc-hat-nhan'=>'Phòng Khám Y Học Hạt Nhân','phong-kham-y-hoc-co-truyen'=>'Phòng Khám Y Học Cổ Truyền','phong-kham-cham-cuu'=>'Phòng Khám Châm Cứu','phong-kham-chan-thuoc-chinh-hinh'=>'Phòng Khám Chấn Thương Chỉnh Hình','phong-kham-mat'=>'Phòng Khám Măt','phong-kham-tieu-hoa-gan-mat'=>'Phòng Khám Tiêu Hóa Gan Mật', 'phong-kham-noi-tim-mach' => 'Phòng Khám Nội Tim Mạch', 'phong-kham-phau-thuat-tham-my' => 'Phòng Khám Phẩu Thuật Thẩm Mỹ'), array('class'=>'typeroom'))!!}
             Color Nền 
          <input type="color" class="colorbackground" name="colorbackground" value="#FFFFFF" />
          </div>
            <br />
            {!! Form::label('description', 'Tóm tắt phòng khám của bạn')!!}<br />
           <textarea rows="4" cols="95" name="description" id="txtdescription"></textarea><br />
           <script type="text/javascript" language="javascript">

           CKEDITOR.replace( 'txtdescription' );
          
          </script> 
            {!! Form::label('posts', 'Giới thiệu về phòng khám')!!}<br />
          
          <textarea rows="20" cols="95" name="posts" id="txtposts"></textarea><br /> 
          <script type="text/javascript" language="javascript">

           CKEDITOR.replace( 'txtposts' );
          
          </script> 
         <div style="text-align:center;">
           {!!Form::submit('Continue', ['class'=>'continue-submit'])!!}
           </div>
          {!!Form::close()!!}
         </div>
         <br />
      
     </div>
  
</div>
@stop