<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>Blog Name</h1>
    <div class='posts'>
        @foreach ($posts as $post)
        <div class='post'>
            <h2 class='content'>
                <a href="/posts/{{$post->id}}">{{ $post->content }}</a>

            </h2>
            <p class='date'>{{ $post->date }}</p>
            <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost ({{$post->id}})">delete</button>
            </form>
        </div>
        @endforeach
    </div>
    <script>
        function deletePost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</body>

</html>