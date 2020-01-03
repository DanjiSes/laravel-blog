@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Main content -->
<section class="content">
	@include('admin.errors')
  <!-- Default box -->
  <div class="box">
  	{!! Form::open(['route' => 'subscribers.store']) !!}
    <div class="box-header with-border">
      <h3 class="box-title">Добавить подписчика</h3>
    </div>
    <div class="box-body">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email adress" value="{{ old('email') }}" name="email">
        </div>
    </div>
  </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <a href="{{ route('subscribers.index') }}" class="btn btn-default">Назад</a>
      <button class="btn btn-success pull-right">Добавить</button>
    </div>
    {!! Form::close() !!}
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection