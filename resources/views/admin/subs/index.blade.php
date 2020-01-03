@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
        <div class="box-header">
          <h3 class="box-title">Подпсчики</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="form-group">
            <a href="{{ route('subscribers.create') }}" class="btn btn-success">Добавить</a>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subs as $sub)
	            <tr>
	              <td>{{ $sub->id }}</td>
	              <td>{{ $sub->email }}</td>
	              <td>
	              	{!! Form::open(['route' => ['subscribers.destroy', $sub->id], 'method' => 'delete']) !!}
	                  <button type="submit" class="delete"
	                          onclick="return confirm('Вы уверенны')">
	                    <i class="fa fa-remove"></i>
	                  </button>
	                {!! Form::close() !!}
	              </td>
	            </tr>
            @endforeach
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
  <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection