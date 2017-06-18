@extends('admin.pageadmin')

@section('content')
<h1>Chỉnh sửa thông tin ADMIN</h1>
  {!!Form::open(array('route'=>array('admin.all-admin.update', $editadmin['id']),'method'=>'PUT'))!!}
   <div class="controls">
  {!! Form::label('hovaten','Họ và tên:') !!}
  {!! Form::text('name',  $editadmin['name'] , ['id'=>'name', 'class' => 'fullname']) !!} </br>
  </div>
  <div class="controls">
  {!! Form::label('email','Email:') !!}
  {!! Form::text('email', $editadmin['email']) !!}  </br>
  </div>
  <div class="controls">
  {!! Form::label('pass', 'Password:')!!}
  {!! Form::text('password', $editadmin['password'])!!} </br> 
  </div>
  <div class="controls">
  </div>
		{!! Form::submit('Them moi')!!}
    {!! Form::close() !!}	



@stop
