@extends('admin.pageadmin')
@section('content')
<h1>Thêm ADMIN</h1>
  {!! Form::open(['url' => 'admin/submit-sign-up-admin']) !!}
  <div class="controls">
  {!! Form::label('hovaten','Họ và tên:') !!}
  {!! Form::text('name', null, ['id'=>'name', 'class' => 'fullname']) !!} </br>
  @if ( $errors->has('name')){!! $errors->first('name') !!}@endif
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
  {!! Form::label('image', 'Image:')!!}
  {!! Form::input('file','image','image', array('class'=>'image'))!!}
  @if ( $errors->has('image')){!! $errors->first('image') !!}@endif
  </div>
		{!! Form::submit('Them moi')!!}
    {!! Form::close() !!}	


  

@stop