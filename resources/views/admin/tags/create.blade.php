@extends('admin.layout')

@section('content')
<div class="content-wrapper">

<!-- Main content -->
<section class="content">
  @include('admin.errors')
  <!-- Default box -->
  <div class="box">
  	{!! Form::open(['route' => 'tags.store']) !!}
    <div class="box-header with-border">
      <h3 class="box-title">Добавить тег</h3>
    </div>
    <div class="box-body">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Название</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title">
        </div>
    </div>
  </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <a href="{{ route('tags.index') }}" class="btn btn-default">Назад</a>
      <button class="btn btn-success pull-right">Добавить</button>
    </div>
    {!! Form::close() !!}
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
</div>
@endsection