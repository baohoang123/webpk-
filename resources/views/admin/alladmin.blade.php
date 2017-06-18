@extends('admin.pageadmin')
@section('content')
<?php $id = 0;?>
@foreach($admin as $article)
<?php $id = $id + 1;?>
		<li> {{$id}} |Name : {{$article->name}} | Author : {{$article->password}} | {{$article->email}} | 
         <?php 

          echo \Carbon\Carbon::createFromTimeStamp(strtotime($article->create_at))->diffForHumans();
         ?>
		|
		<a href="{{ route('admin.all-admin.edit', $article->id)}}">edit</a> 
         |
        {!!Form::open(array('route'=>array('admin.all-admin.destroy', $article->id),'method'=>'DELETE'))!!}
		<input type="submit"  value="Xóa">
        {!!Form::close()!!}
		</li>
	@endforeach
	
	@yield('editadmin')
@stop