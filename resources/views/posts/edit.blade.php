<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>募集文</h2>
                <input type='text' name='post[content]' value="{{ $post->content }}">
            </div>
            <div class='content__body'>
                <h2>日程</h2>
                <input type='date' name='post[date]' value="{{ $post->date }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>

</html>