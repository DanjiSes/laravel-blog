@extends('admin.layout')

@section('content')
<div class="content-wrapper">

<!-- Main content -->
<section class="content">
  @include('admin.errors')
  <!-- Default box -->
  <div class="box">
  	{!! Form::open(['route' => 'users.store', 'files' => true]) !!}
    <div class="box-header with-border">
      <h3 class="box-title">Добавить пользователя</h3>
    </div>
    <div class="box-body">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Имя</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Статус</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="desc" value="{{ old('desc') }}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail2">E-mail</label>
          <input type="text" class="form-control" id="exampleInputEmail2" placeholder="" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Пароль</label>
          <input type="password" class="form-control" id="exampleInputEmail3" placeholder="" name="password">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Аватар</label>
          <input type="file" id="exampleInputFile" name="avatar">
        </div>
    </div>
  </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <a href="{{ route('users.index') }}" class="btn btn-default">Назад</a>
      <button class="btn btn-success pull-right">Добавить</button>
    </div>
    <!-- /.box-footer-->
    {!! Form::close() !!}
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
</div>
@endsection