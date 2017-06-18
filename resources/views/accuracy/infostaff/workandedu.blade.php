@extends('accuracy.infostaff')
@section('content-infostaff')
<div class="workandedu">
  <div class="content-workandedu">
   <script type="text/javascript">
     $(document).ready(function() {
       // body...
       $('#add-university').click(function(){
        $("#content-add-university").fadeIn();
       });
       
       $('#close-content-university').click(function(){
        $("#content-add-university").fadeOut();
       });
        $('#add-certificate-universary').click(function(){
        $("#content-add-certificate-university").fadeIn();
       });
       
       $('#close-content-certificate-university').click(function(){
        $("#content-add-certificate-university").fadeOut();
       });
        $('#add-professional').click(function(){
        $("#content-add-professional").fadeIn();
       });
       
       $('#close-content-professional').click(function(){
        $("#content-add-professional").fadeOut();
       });

     });

   </script>
     <ul>    
       <li>
         <div class="universary">
           <div>Đại học:</div>
           <div id="add-university"><a>Thêm trường đại học</a></div>
           <div id="content-add-university" class="content-add-university" style="width:100%;display:none;border: 1px solid #111111; margin-left: -20px;">
              <div class="">
                 <span id="close-content-university" style="float: right;"><a>x Cancel</a></span>
                 <div>
                   {!! Form::open(array('method'=>'POST', 'url' => '', 'id' => '', 'files' => true))!!}
                        <div class="controls">
                        {!! Form::label('','Nơi đã học: ')!!}   <!-- '': gia tri-->
                        {!! Form::text( 'university','', array('id'=>'university', 'class' => 'fullname span9', 'placeholder' => 'vi du: Y dược TP Hồ Chí Minh'))!!}
                        <div class="clears"></div>
                        
                        </div>
                         <div class="controls" >
                          {!! Form::label('daystart', 'Năm vào:')!!}
                          {!! Form::input('date','daystart', date('Y-m-d'), array('class'=>''))!!}
                         <div class="clears"></div>
                     
                         </div>
                         
                         <div class="controls" >
                          {!! Form::label('daystart', 'Năm vào:')!!}
                         <select name="age">
                          <?php for ($age=1900; $age <= 2050 ; $age++) { ?>
                            <option value="<?php echo $age; ?>"> <?php echo $age; ?> </option>
                          <?php } ?>                         
                         </select>

                         <div class="clears"></div>
                     
                         </div>
                         <div class="controls" >
                          {!! Form::label('dayend', 'Năm ra:')!!}
                          {!! Form::input('date','dayend', date('Y-m-d'), array('class'=>''))!!}
                         <div class="clears"></div>
                     
                         </div>
                         <div class="controls-submit" >
                         {!! Form::submit('Save', array('class'=>'register-user'))!!}
                         {!! Form::reset('reset', array('class' => 'reset-register'))!!}
                         </div>
                   {!! Form::close() !!}
                 </div>
              </div>
           </div>
           <div>Đại học bách khoa</div>
           <div>Từ năm ... đến ...</div>
         </div>
       </li>
       <hr>
       <li>
         <div class="certificate-universary">
           <div>Bằng cấp</div>
            <div id="add-certificate-universary"><a>Thêm trường đại học</a></div>
            <div id="content-add-certificate-university" class="content-add-university" style="width:100%;display:none;border: 1px solid #111111; margin-left: -20px;">

              <div class="">
                 <span id="close-content-certificate-university" style="float: right;"><a>x Cancel</a></span>
                   <div>
                  {!! Form::open(array('method'=>'POST', 'url' => '', 'id' => '', 'files' => true))!!}
                        <div class="controls">
                        {!! Form::label('','Nơi đã học: ')!!}   
                        {!! Form::text( 'university','', array('id'=>'university', 'class' => 'fullname span9', 'placeholder' => 'vi du: Y dược TP Hồ Chí Minh'))!!}
                        <div class="clears"></div>
                        
                        </div>
                        <div class="controls">
                        {!! Form::label('','Vị trí làm: ')!!}   
                        {!! Form::text( 'position','', array('id'=>'position', 'class' => 'fullname span9', 'placeholder' => 'vi du: Trưởng kh'))!!}
                        <div class="clears"></div>
                        
                        </div>
                        <div class="controls-submit" >
                         {!! Form::submit('Save', array('class'=>'register-user'))!!}
                         {!! Form::reset('reset', array('class' => 'reset-register'))!!}
                         </div>
                   {!! Form::close() !!}

                 
                 </div>
              </div>
           </div>
           <div>Thêm bằng cấp học vị</div>
           <div>Tốt nghiệp trương Đại học bách khoa
            <div>Từ năm ... đến ...</div>
           </div>
           
         </div>
       </li>
       <hr>
       <li>
          <div class="professional">
           <div>Kinh nghiemj Y khoa</div>
            <div id="add-professional"><a>Thêm kinh nghiệm</a></div>
            <div id="content-add-professional" class="content-add-university" style="width:100%;display:none;border: 1px solid #F8F8FF; margin-left: -20px; background-color: #F8F8FF;">
             
               <script type="text/javascript">
                $(document).ready(function(){
                  $('.register-profile').click(function(){            
                     $.ajax({
                      url: 'work-and-edu/professional',
                      type: "post",
                      dateType:"text",
                    //  data: {'email':$('input[name=email]').val(), '_token': $('input[name=_token]').val()},
                      data : { // Danh sách các thuộc tính sẽ gửi đi
                        'numclinic' : $('#clinic').val(),
                        'position' : $('#position').val(),
                        'numdaystart' : $('#daystart').val(),
                        'numdayend' : $('#dayend').val(),
                        '_token': $('input[name=_token]').val()
                       },
                      success: function(data){
                        alert('data');
                      }
                      
                    });   
                    
                  }); 
                });
                </script>

              <div class="" style="padding: 15px;">
                 <span id="close-content-professional" style="float: right;"><a>x Cancel</a></span>
                 <div class="" >
                   {!! Form::open(array('method'=>'POST', 'action' =>'', 'url' => 'work-and-edu/professional', 'id' => 'tutorial', 'files' => true))!!}
                        <div class="controls" >
                        {!! Form::label('','Nơi đã làm: ')!!}   <!-- '': gia tri-->
                        {!! Form::text( 'clinic','', array('id'=>'clinic', 'class' => 'fullname span9', 'placeholder' => 'vi du: Y dược TP Hồ Chí Minh'))!!}
                        <div class="clears"></div>
                        
                        </div>
                        <div class="controls" >
                        {!! Form::label('','Vị trí làm: ')!!}   <!-- '': gia tri-->
                        {!! Form::text( 'position','', array('id'=>'position', 'class' => 'fullname span9', 'placeholder' => 'vi du: Trưởng khoa mắt'))!!}
                        <div class="clears"></div>
                        
                        </div>
                         <!--<div class="controls"  >
                          {!! Form::label('daystart', 'Năm vào:')!!}
                          {!! Form::input('date','daystart', date('Y-m-d'), array('class'=>''))!!}
                         <div class="clears"></div>
                     
                         </div>-->
                           <div class="controls" >
                          {!! Form::label('daystart', 'Năm vào:')!!}
                         <select name="age" class="daystart" id="daystart">
                          <?php for ($daystart=1900; $daystart <= 2050 ; $daystart++) { ?>
                            <option value="<?php echo $daystart; ?>"> <?php echo $daystart; ?> </option>
                          <?php } ?>                         
                         </select>

                         <div class="clears"></div>
                     
                         </div>
                         <!--<div class="controls" >
                          {!! Form::label('dayend', 'Năm ra:')!!}
                          {!! Form::input('date','dayend', date('Y-m-d'), array('class'=>''))!!}
                         <div class="clears"></div>
                     
                         </div>-->
                           <div class="controls" >
                          {!! Form::label('dayend', 'Năm ra:')!!}
                         <select name="age" class="dayend" id="dayend">
                          <?php for ($dayend=1900; $dayend <= 2050 ; $dayend++) { ?>
                            <option value="<?php echo $dayend; ?>"> <?php echo $dayend; ?> </option>
                          <?php } ?>                         
                         </select>

                         <div class="clears"></div>
                     
                         </div>
                        <hr>
                         <div class="controls-submit" >
                         {!! Form::submit('Save', array('class'=>'register-profile'))!!}
                         {!! Form::reset('reset', array('class' => 'reset-profile'))!!}
                         </div>
                   {!! Form::close() !!}
                 </div>

              </div>
           </div>
           <div>Thêm kinh nghiệm làm việc</div>
           <div>Phó Trưởng Khoa Cấp cứu bệnh viện Nhi đồng 2, Tp.HCM
           <div>Từ năm ... đến ...</div>
           </div>
           <div>Trưởng khoa Nhi - Phòng Khám Quốc tế Victoria Healthcare
                <div>Từ năm ... đến ...</div>
           </div>
         </div>
       </li>
     </ul>
  </div>
	<div class="clears"></div>
</div>


@stop