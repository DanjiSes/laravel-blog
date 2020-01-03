@extends('admin.layout')

@section('content')
<div class="content-wrapper">

<!-- Main content -->
<section class="content">
  @include('admin.errors')
  <!-- Default box -->
  <div class="box">
  	{!! Form::open(['route' => ['users.update', $user->id], 'method' => 'put', 'files' => true]) !!}
    <div class="box-header with-border">
      <h3 class="box-title">Редактировать пользователя</h3>
    </div>
    <div class="box-body">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Имя</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $user->name }}" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail11">Статус</label>
          <input type="text" class="form-control" id="exampleInputEmail11" placeholder="" value="{{ $user->desc }}" name="desc">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail2">E-mail</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" value="{{ $user->email }}" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Пароль</label>
          <input type="password" class="form-control" id="exampleInputEmail3" placeholder="" name="password">
        </div>
        <!-- checkbox -->
        <div class="form-group">
          <label>
            {{ Form::checkbox('status', '1', $user->status, ['class' => 'minimal']) }}
          </label>
          <label>
            Забанен
          </label>
        </div>
        <!-- checkbox -->
        <div class="form-group">
          <label>
            {{ Form::checkbox('is_admin', '1', $user->is_admin, ['class' => 'minimal']) }}
          </label>
          <label>
            Администратор
          </label>
        </div>
        <div class="form-group">
          <img src="{{ $user->getImage() }}" alt="" width="200" class="img-responsive">
          <label for="exampleInputFile">Аватар</label>
          <input type="file" id="exampleInputFile" name="avatar">
        </div>
    </div>
  </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <a href="{{ route('users.index') }}" class="btn btn-default">Назад</a>
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