<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twit-X</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script type="text/javascript" src="{{asset('assets/js/app.js')}}" defer></script>
</head>
<body>


<div class="sidebar">
    <h3>Меню</h3>
    <ul>
        <a href="#">
            <li><i class="fa-solid fa-house"></i>Дім</li>
        </a>
        <a href="#">
            <li><i class="fa-solid fa-crown"></i>Підписка</li>
        </a>
        <a href="{{route('personal.main.index')}}">
            <li><i class="fa-regular fa-user"></i>Особистий кабінет</li>
        </a>
    </ul>
</div>

<div class="container">
    <div class="content">
        <nav class="navbar">
            <div class="logo">Twit-X</div>
            <div class="nav-links">
                <a href="{{route('category.index')}}">Категорії</a>

            </div>
            @auth()

                <form action="{{route('logout')}}" method="POST" >
                    @csrf
                    <button class="login-btn"type="submit">Вийти</button>
                </form>
            @endauth
            @guest()
                <a href="{{route('personal.main.index')}}" style=" text-decoration: none;"><button class="login-btn">Вхід</button></a>

            @endguest
        </nav>
        <h2>Стрічка постів</h2>
        @foreach($posts as $post)
            <div class="card">
                <div class="card-header">Creative Business Boost</div>
                <a href="{{ route('main.show', $post->id) }}" style="color: white; text-decoration: none;"><span><h4>{{$post->title}}</h4></span></a>
                <div class="card-body">
                    <a href="{{ route('main.show', $post->id) }}"><img
                            src="{{ asset('storage/'.$post->main_image)  }}" alt=""></a>
                    <span class="img-tag">{!! $post->content !!} </span>
                    <span class="post-tag">{{ $post->category->title }}</span>
                </div>
                <ul class="btn-like">
                    @auth()
                    <form action="{{route('main.like.store', $post->id)}}" method="post">
                        @csrf
                        <span>{{$post->liked_user_count}}</span>
                        <button type="submit" class="icon-btn heart-btn" style="font-size: 20px; border:0px;color:red; background-color: #2A2A2A;">

                            @if(auth()->user()->likedPosts->contains($post->id))
                                <i class="fa-solid fa-heart"></i>
                            @else
                                <i class="fa-regular fa-heart"></i>
                            @endif

                        </button>

                    </form>
                        <li>
                            <a href="{{ route('main.show', $post->id) }}" style="text-decoration: none">
                                <button class="icon-btn message-btn"><i class="fa-regular fa-comment"></i></button>
                            </a>
                        </li>
                    @endauth
                    @guest()
                        <div>
                            <span>{{$post->liked_user_count}}</span>
                            <i class="fa-regular fa-heart"></i>

                        </div>
                            <i class="fa-regular fa-comment"></i>
                    @endguest

                </ul>
            </div>
        @endforeach
    </div>


    <div class="right-column">
        <h3>Популярні пости</h3>
        @foreach($likesPosts as $post)
            <a href="{{ route('main.show', $post->id) }}"style="color: white; text-decoration: none;">
            <ul class="post-list">
                <li>
                    <img src="{{ asset('storage/'.$post->preview_image) }}"
                                                                     alt="">
                    <span>{{$post->title}}</span>
                </li>
                @endforeach
            </ul>
            </a>

    </div>
</div>


</body>
</html>
