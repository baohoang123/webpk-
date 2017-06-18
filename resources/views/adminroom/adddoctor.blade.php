@extends('adminroom.pagebhadmin')
@section('content')
<h1>Thêm Bác Sĩ </h1>
<span>Thông tin cần có:</span>
  {!! Form::open(['url' => 'bh-admin/process-add-doctor', 'method' => 'POST']) !!}
  <div class="controls">
  {!! Form::label('hovaten','Họ và tên:') !!}
  {!! Form::text('name', null, ['id'=>'name', 'class' => 'fullname']) !!} </br>
  @if ( $errors->has('fullname')){!! $errors->first('fullname') !!}@endif
  </div>
  <div class="controls">
  {!! Form::label('email','Email:') !!}
  {!! Form::text('email') !!}  </br>
  @if ( $errors->has('email')){!! $errors->first('email') !!}@endif
  </div>
  <div class="controls">
  {!! Form::label('pass', 'Password:')!!}
  {!! Form::text('password')!!} </br> 
  @if ( $errors->has('password')){!! $errors->first('password') !!}@endif
  </div>
  <div class="controls">

  {!! Form::label('codeclinic', 'Mã phòng khám:')!!}
    <select name="codeclinic">
    <option value="<?php echo $coderoom; ?>"><?php echo $coderoom; ?> </option>
    </select>
  @if ( $errors->has('codeclinic')){!! $errors->first('codeclinic') !!}@endif
  </div>
  <div class="controls">
  {!! Form::label('codedoctor', 'Mã bác sĩ:')!!}
  {!! Form::text('codedoctor')!!} </br> 
  @if ( $errors->has('codedoctor')){!! $errors->first('codedoctor') !!}@endif
  </div>
 <div class="controls" style="display: none">
          {!! Form::label('datework', 'Ngày Đăng Ký:')!!}
          {!! Form::input('date','datecreateacc', date('Y-m-d'))!!}
          <div class="clears"></div>
          @if($errors->has('datecreateacc')) {{ $errors->first('datecreateacc')}} @endif
         </div>
		{!! Form::submit('Them moi')!!}
    {!! Form::close() !!}	
@stop()