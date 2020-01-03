@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добро пожаловать, {{ Auth::user()->name }}!
        <small>развлекайся...</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Что тут можно сделать:</h3>
        </div>
        <div class="box-body">
          Посты (статьи) - Вы можете писать новые посты, редактировать старые, и удалять ненужные.
        </div>
        <div class="box-body">
          Категории - редактировать категории статей, добавлять и улалять.
        </div>
        <div class="box-body">
          Теги - добавление, удаление, редактирование.
        </div>
        <div class="box-body">
          Коментарии - они появляются на сайте только после вашего одобрения. Одобрять, запрещять или удалять коментарии - ваше право.
        </div>
        <div class="box-body">
          Пользователи - создание, редактирование, и просмотр пользователей.
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Подписчики (email-рассылка) - просмотр подписчиков (показываются только подтвержденные адреса), добавление подписчиков без подтверждения.
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection('content')