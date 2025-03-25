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
        <a href="{{route('main.index')}}">
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


<div class="category-container">
    <h2 class="category-title">Різноманітні категорії</h2>
    <div class="category-grid">
        @foreach($categories as $category)
            <a href="{{ route('category.post.index', $category->id) }}" class="category-box">
                <h2>{{ $category->title }}</h2>
            </a>
        @endforeach
    </div>
</div>




</body>
</html>
