@extends('admin.layouts.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Головна</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                        <li class="breadcrumb-item active">Головна</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$data['usersCount']}}</h3>

                            <p>Користувачі</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <a href="{{route('admin.user.index')}}" class="small-box-footer">Детальніше <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$data['postsCount']}}</h3>

                            <p>Пости</p>
                        </div>
                        <div class="icon">
                            <i class=" fa-solid fa-note-sticky"></i>
                        </div>
                        <a href="{{route('admin.post.index')}}" class="small-box-footer">Детальніше <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$data['categoriesCount']}}</h3>

                            <p>Категорії</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-table-list"></i>
                        </div>
                        <a href="{{route('admin.category.index')}}" class="small-box-footer">Детальніше <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$data['tagsCount']}}</h3>

                            <p>Теги</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-tags"></i>
                        </div>
                        <a href="{{route('admin.tag.index')}}" class="small-box-footer">Детальніше <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
@endsection
