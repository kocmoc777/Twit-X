@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додавання користувача</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Користувачі</a></li>
                            <li class="breadcrumb-item active">Створення користувача</li>
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
                        Додавання користувача
                    </div>

                    <form action="{{route('admin.user.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Ім'я користувача"></input>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email"></input>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <label>Виберіть користувача</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id=>$role)
                                    {{-- зберігаємо вибрані ролі--}}
                                    <option value="{{$id}}"
                                        {{$id == old('role_id') ? 'selected' : ''}}>{{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Додати"></input>
                    </form>


                </div>
@endsection
