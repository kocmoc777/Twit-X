<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twit-X</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

<div class="post-wrapper">
    <!-- Основний контент -->

    <div class="post-content-box">
        <h1 class="post-heading">{{$post->title}}</h1>

        <div class="post-info">
            <span class="post-category">Категорія: {{$post->category->title}}</span>

        </div>

        <img src="{{ asset('storage/'.$post->main_image)  }}" alt="Зображення поста" class="post-image-box">

        <div class="post-text">
            <p>{!! $post->content !!}</p>
        </div>
        <p class="date">{{ $post->created_at }} {{ $post->comments->count() }} Коментарів</p>

        @if($relatedPosts->count() > 0)
        <div class="wrp">
            <div class="title">Рекомендовані вам пости</div>
            <div class="grid-container">
                @foreach($relatedPosts as $relatedPost)
                <a href="{{ route('main.show', $relatedPost->id) }}"style="color: white; text-decoration: none;">
                <div class="rec-card" onclick="highlightCard(this)">
                    <img src="{{ asset('storage/'.$relatedPost->main_image)  }}" alt="">
                    <h2>{{$relatedPost->category->title}}</h2>
                    <p>{{$relatedPost->title}}</p>
                </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
        @auth()
        <div class="container-com">
            <section class="comment-list">
                <div class="title">Коментарі ({{$post->comments->count()}})</div>
                @foreach($post->comments as $comment)
                <div class="comment">
                    <div class="comment-author">
                        <span class="author-name">{{$comment->user->name}}</span>
                    </div>
                    <div class="comment-text">
                        <p>{{$comment->message}}</p>
                    </div>
                    <div class="comment-meta">
                        <span class="comment-time">{{$comment->dateAsCarbon->diffForHumans()}}</span>
                    </div>
                </div>
                @endforeach
            </section>
            <div class="title">Залиште коментар</div>
            <form action="{{route('main.comment.store', $post->id)}}" method="post">
                @csrf
                <textarea class="comment-box" name="message" rows="4" placeholder="Введіть ваш коментар..."></textarea>
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <button type="submit" class="submit-btn">Додати</button>
            </form>
        </div>
        @endauth

    </div>



</div>

<script>
    function highlightCard(card) {
        card.style.transform = "scale(1.05)";
        card.style.boxShadow = "0 6px 10px rgba(0, 0, 0, 0.15)";
        setTimeout(() => {
            card.style.transform = "scale(1)";
            card.style.boxShadow = "0 3px 5px rgba(0, 0, 0, 0.1)";
        }, 300);
    }
</script>

</body>
</html>
