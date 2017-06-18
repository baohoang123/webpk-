@extends('accuracy.profile')
@section('content-info-user')
 
  
  <div class="edit-infomation" id="edit-infomation" style="display:block">
      @foreach($useredit as $hs)   
  

      <div class="form-edit-user">

     {!! Form::open(array('method'=>'POST', 'url' => 'update-user-info', 'id' => 'form-register', 'files' => true, 'onsubmit'=> 'return kiemtra()', 'name' => 'formedituser'))!!}
      
       <div>
         <label class="label-user-infobasic">THÔNG TIN CƠ BẢN</label> 
      </div>
       <div class="clears"></div>
       <dl class="dl-edit-infobasic">
        <div class="controls">
        <dt>
        {!! Form::label('hovaten','Họ và tên:')!!}   <!-- '': gia tri-->
        </dt>
        <dd>
       <!--{!! Form::text( 'fullname', '', array('id'=>'fullname', 'class' => 'form-control span9', 'placeholder' => 'vi du: Hoang Bao' ))!!}      
        --><input  type="text" name="fullname" value="{{ old('fullname', isset($useredit))? $hs->fullname : null}} " id="fullname" class="form-control span9" placeholder="vi du: Hoang Bao">
        </dd>
        <div class="clears"></div>
        </div>
        
        <div class="controls">
        <dt>
        {!! Form::label('email', 'Email:')!!}
        </dt>
        <dd>
        <!--{!! Form::text('email','', array('class'=>'form-control span9', 'id'=>'email', 'placeholder' => 'vi du: bao@gmail.com'))!!}
         -->
         <input type="text" name="email" value="{{ old('email', isset($useredit))? $hs->email : null}}" id="email" placeholder="vi du: bao@gmail.com" class="form-control span9">
         </dd>
         <div class="clears"></div>
      </div>
      
        <div class="controls">
         <dt>     
         {!! Form::label('password', 'Password:')!!}
         </dt>
         <dd>
        <!--{!! Form::password('password', array('id'=>'password', 'class' => 'form-control span9', 'placeholder' => 'vui long nhap mat khau'))!!}
         -->
         <input  type="password" name="password" value="{{ old('password', isset($useredit))? $hs->password : null}}" id="password" class="form-control span9" placeholder="Vui lòng nhập mật khẩu">
         </dd>
        <div class="clears"></div>
         @if($errors->has('password')) {{ $errors->first('password')}} @endif
        
        </div>
       
        <div class="controls">
        <dt>
        {!! Form::label('conpass', 'Config Password:')!!}
        </dt>
        <dd>
        <!--{!! Form::password('password_confirmation', array('id'=>'password_confirmation', 'class' => 'form-control span9', 'placeholder' => 'config lại mật khẩu'))!!}
         -->
         <input type="password" name="password_confirmation" value="{{ old('password_confirmation', isset($useredit))? $hs->password : null }}" id="password_confirmation" class="form-control span9" placeholder="Nhập lại mật khẩu">
         </dd>
         <div class="clears"></div>
          @if($errors->has('password_confirmation')) {{ $errors->first('password_confirmation')}} @endif
       
         </div>       
         
        <div class="controls" >
         <dt>
          {!! Form::label('phone', 'Phone:')!!}
          </dt>
          <dd>
         <!-- {!! Form::text('numeric','', array('id'=> 'numeric' ,'class'=>'form-control span9', 'placeholder'=>'số điện thoại'))!!}
          -->
          <input type="numeric" name="tel" value="{{ old('tel', isset($useredit))? $hs->tel : null}}" id="numeric" class="form-control span9" placeholder="số điện thoại">
           </dd>
          <div class="clears"></div> 
         </div>
         </dl>


         <div class="clears"></div>
         <div>
          <label class="label-user-infoother">THÔNG TIN KHÁC</label>
         </div>
         <div class="clears"></div>
         <dl class="dl-edit-infoother">
          <div class="controls" >
          <dt>
          {!! Form::label('birthdate', 'Ngày Sinh:')!!}
          </dt>
          <dd>
          <!--{!! Form::input('date','date-birth', date('Y-m-d'), array('class'=>'form-control'))!!}
           -->
           <input type="date" name="birthday" value="{{ old('birthday', isset($useredit))? $hs->birthday : null}}" id="date-birth" class="form-control  span9">
           </dd>
           <div class="clears"></div>
          </div>
         
          <div class="controls" >
         <dt>
         {!! Form::label('cmtnd', 'CMND:')!!}
         </dt>
         <dd>
         <!--{!! Form::text('cmtnd','', array('id'=>'span9', 'class' => 'form-control span9', 'placeholder' => 'Mã CMND'))!!}
         -->
         <input type="text" name="idnumber" value="{{ old('idnumber', isset($useredit))? $hs->idnumber : null}}" id="cmtnd" class="form-control span9" placeholder="Mã CMND">
         </dd>
         <div class="clears"></div>
         </div>
      
         <div class="controls" >
          <dt>
          {!! Form::label('street', 'Địa chỉ đường phố:')!!}
          </dt>
          <dd>
          <!--{!! Form::text('street','',array('id'=> 'street', 'class'=>'form-control', 'placeholder'=>'ví dụ: 432B/8G Dương Bá Trạc'))!!}
          -->
          <input type="text" name="street" value="{{ old('street', isset($useredit))? $hs->street : null}}" id="street" class="form-control span9" placeholder="ví dụ: 432B/8G Dương Bá Trạc" >
          </dd>
          <div class="clears"></div>
         </div>
   
         <div class="controls" >
         <dt>
          {!! Form::label('county', 'Quận/Huyện:')!!}
         </dt>
         <dd>
         <!-- {!! Form::text('county','', array('id'=>'county', 'class' => 'form-control', 'placeholder'=>'ví dụ: Quận 8'))!!}
         -->
         <input type="text" name="district" value="{{ old('dictrict', isset($useredit))? $hs->district : null}}" id="country" class="form-control span9" placeholder="ví dụ: Quận 8" >
         </dd>
         <div class="clears"></div>
         </div>
         
          <div class="controls" >
          <dt>
          {!! Form::label('town', 'Thành Phố(Thị xã):')!!}
          </dt>
          <dd>
          <!--{!! Form::select('town', array('Hà Nội'=>'Hà Nội', 'Hồ Chí Minh' => 'Hồ Chí Minh', 'Quảng Ngãi' => 'Quảng Ngãi'), array('class'=>'select-town'))!!}
          -->
          <select id="town" name="city">
            <option value="{{old('city', isset($useredit))? $hs->city : null}}">{{old('city', isset($useredit))? $hs->city : "Chọn tỉnh của bạn"}}</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
            <option value="Quảng Ngãi">Quảng Ngãi</option>
            <option value="Tỉnh Khác">Tỉnh Khác</option>
          </select>
          </dd>
          <div class="clears"></div>
          </div>
         
         </dl>
       

        <div class="controls-submit" style="text-align:center" >
         {!! Form::submit('Lưu thông tin', array('class'=>'register-user'))!!}
         
         </div>
        {!! Form::close()!!}
       <script type="text/javascript">
     
        function kiemtra () {
        
         var frm = window.document.formedituser;
        
         if(frm.password.value != frm.password_confirmation.value){
          alert('pass khong khop');
           document.forms['formedituser'].password_confirmation.focus();
          return false;
         }
        }</script>

        </div>
        @endforeach
  </div>
@stop