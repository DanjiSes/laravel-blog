@extends('admin.layout')

@section('content')
<div class="content-wrapper">

<!-- Main content -->
<section class="content">
	@include('admin.errors')
  <!-- Default box -->
  <div class="box">
  	{!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) !!}
    <div class="box-header with-border">
      <h3 class="box-title">Редактирование категории</h3>
    </div>
    <div class="box-body">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Название</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" 
          		 value="{{ $category->title }}" name="title">
        </div>
    </div>
  </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <a href="{{ route('categories.index') }}" class="btn btn-default">Назад</a>
      <button class="btn btn-warning pull-right">Изменить</button>
    </div>
    {!! Form::close() !!}
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
</div>
@endsection