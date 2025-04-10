@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$tag->title}}</h1>
                        <a href="{{route('admin.tag.edit', $tag->id)  }}" class="text-success"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{route('admin.tag.delete',$tag->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fa-solid fa-trash-can text-danger role='button'"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Теги</a></li>
                            <li class="breadcrumb-item active">{{$tag->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                    <div class="col-12">
                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Таблиця тегів</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="Пошук">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$tag->id}}</td>
                                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Назва:</td>
                                    <td>{{$tag->title}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
@endsection
