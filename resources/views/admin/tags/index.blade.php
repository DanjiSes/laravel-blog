@extends('admin.layout')

@section('content')
<div class="content-wrapper">

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
        <div class="box-header">
          <h3 class="box-title">Таблица тегов</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="form-group">
            <a href="{{ route('tags.create') }}" class="btn btn-success">Добавить</a>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Название</th>
              <th>Действия</th>
            </tr>
            </thead>
            <tbody>
			@foreach($tags as $tag)
            <tr>
              <td>{{ $tag->id }}</td>
              <td>{{ $tag->title }}</td>
              <td><a href="{{ route('tags.edit', $tag->id) }}" class="fa fa-pencil"></a> 
              	{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete']) !!}
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
@endsection