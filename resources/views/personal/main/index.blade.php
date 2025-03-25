@extends('personal.layouts.main')
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
                        <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Головна</a></li>
                        <li class="breadcrumb-item active">Pers</li>
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
                            <h3>Вподобані пости</h3>

                            <p>Перегляд , видалення</p>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <a href="{{route('personal.liked.index')}}" class="small-box-footer">Детальніше <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Коментарі</h3>

                            <p>Перегляд , редагування , видалення</p>
                        </div>
                        <div class="icon">
                            <i class=" fa-regular fa-comment"></i>
                        </div>
                        <a href="{{route('personal.comment.index')}}" class="small-box-footer">Детальніше <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Пости</h3>

                            <p>Перегляд , створення , редагування</p>
                        </div>
                        <div class="icon">
                            <i class=" fa-solid fa-note-sticky"></i>
                        </div>
                        <a href="{{route('personal.post.index')}}" class="small-box-footer">Детальніше <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
            </div>
@endsection
