@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редагування тегу</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Теги</a></li>
                            <li class="breadcrumb-item active">Редагування тегу</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <h6 class="mb-3">
                        </h6>
                        Додавання тегу
                    </div>

                    <form action="{{route('admin.tag.update', $tag->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Назва тегу" value="{{$tag->title}}"></input>
                            @error('title')
                                <div class="text-danger">Це поле потрібно заповнити</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Оновити">
                    </form>


                </div>
@endsection
