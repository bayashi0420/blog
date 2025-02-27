<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1 class="content">
        {{ $post->content }}
    </h1>
    <div class="date">
        <div class="date">
            <h3>開催日</h3>
            <p>{{ $post->date }}</p>
        </div>
    </div>
    <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>

</html>