@extends('accuracy.profile')
@section('content-info-user')
<div class="info-register-website">
 <div class="title">
    <h4 class="title-high"></h4>
    <div class="title-description">
     <span class="glyphicon glyphicon-warning-sign"> </span>Hiện tại bạn đang sử dụng tài khoản <strong>{{ Session::get('emailuser')}}</strong> để thực hiện đăng ký mở phòng khám. <br/>
     Bạn đã chắn chắn thật sự muốn đăng ký. Hãy đảm bảo mọi việc làm của bạn từ bước này là chính xác với phòng khám của bạn.
     </div>
    <br />
    
  </div>
    <div class="check-box">
     <div class="street-border">
       </div>
       <div class="step">
         <div class="step-step1" >
           <div class="step1" style="background-color:#6699FF">1</div>
           <div class="text-step">Tài khoản</div>
         </div>
         <div class="step-step2" >
           <div class="step2" style=" ">2</div>
           <div class="text-step">Phòng khám</div>
         </div>
         <div class="step-step3"  style="">
           <div class="step3">3</div>
           <div class="text-step">Thông tin</div>
         </div>
       </div>
     </div>
      <br />
     <br />
   <div class="register-web">
     <div class="">
     <h3 style="color: #336699;"> Bước 1: ĐĂNG KÝ TẠO PHÒNG KHÁM </h3>
       Để sử dụng dịch vụ của chúng tôi bạn cần phải điền tên phòng khám của bạn vào bên dưới. Nó sẽ giúp bạn nhận biết phòng khám của bạn.
       </div>
       <br />
       <div class="form-register-web">
      {!!Form::open(array('method'=>'POST', 'url' => 'submit-sign-website', 'id' => 'form-sign-web'))!!}
       
        <div class="controls">
        {!! Form::label('nameroom', 'Tên Phòng Khám:')!!}
        {!! Form::text('nameroom','', array('class'=>'nameroom span9', 'id'=>'nameroom', 'placeholder' => 'vi du: Nhi Khoa ABC'))!!}
        <div class="clears"></div>
        @if($errors->has('nameroom')) {{ $errors->first('nameroom')}} @endif
        </div>      
        <div class="controls" style="display: none">
          {!! Form::label('datework', 'Ngày Đăng Ký:')!!}
          {!! Form::input('date','datecreate', date('Y-m-d'))!!}
         <div class="clears"></div>
          @if($errors->has('datecreate')) {{ $errors->first('datecreate')}} @endif
         </div>
         <div class="controls" style="text-align:center;">
         <span style="display: none;">
          {!! Form::label('static', 'Trạng Thái:')!!}
          {!! Form::radio('static', 'free', true) !!} Miễn Phí 30 ngày
          {!! Form::radio('static', 'on') !!} Mở Tài khoản
          {!! Form::radio('static', 'off') !!} Đóng Tài Khoản Tạm Thời
          </span>
          Vui lòng nhập tên phòng khám của bạn tại đây.
        <div class="clears"></div>
      
         </div>         
            <br />    
            <br />
            <br />
         <div class="" style="text-align:center;">   
         {!! Form::submit('register', array('class'=>'register-submit'))!!}
         {!! Form::reset('reset', array('class' => 'reset-submit'))!!}
         </div>
       {!!Form::close()!!}
       </div>
   </div>
</div>
@stop