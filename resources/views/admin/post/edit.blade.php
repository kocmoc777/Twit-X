@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редагування поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Пости</a></li>
                            <li class="breadcrumb-item active">Редагуваня поста</li>
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
                        Додавання поста
                    </div>

                    <form action="{{route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group ">
                            <input type="text" class="form-control" name="title" placeholder="Назва поста"
                                   value="{{$post->title}}"></input>
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="content" id="summernote">{{$post->content}}</textarea>
                            @error('content')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputFile">Додати прев'ю</label>
                            <div class="w-25 mb-2">
                                <img src="{{url('storage/' .$post->preview_image)}}" class="w-50" alt="preview_image">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " name="preview_image">
                                    <label class="custom-file-label">Виберіть зображення</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('preview_image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputFile">Додати головне зображення</label>
                            <div class="w-50 mb-2">
                                <img src="{{url('storage/' . $post->main_image)}}" class="w-50" alt="main_image">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " name="main_image">
                                    <label class="custom-file-label">Виберіть зображення</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('main_image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <label>Виберіть категорію</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    {{-- зберігаємо вибрані кат--}}
                                    <option value="{{$category->id}}"
                                            {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Теги</label>
                            <div class="select2-purple">
                                <select class="select2" name="tag_ids[]" multiple="multiple"
                                        data-placeholder="Виберіть тег"
                                        data-dropdown-css-class="select2-purple" style="width: 100%;">
                                    @foreach($tags as $tag)
                                        {{-- зберігаємо вибрані теги--}}
                                        <option
                                            {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                            value="{{ $tag->id }}">
                                            {{ $tag->title }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Обновити">
                        </div>
                    </form>


                </div>
@endsection
